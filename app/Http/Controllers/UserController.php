<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function dashboard()
    {
        return view('user.dashboard');
    }


    public function userlist()
    {
        $all_users = User::where('role', '!=', 'account_holder')->with('employee')->get();
        return view('admin.employee.employeelist', compact('all_users'));
    }


    public function employeeForm()
    {
        $employees = Employee::all();

        return view('admin.employee.addform', compact('employees'));
    }



    public function employeecreate(Request $request)
    {



        $request->validate([

            'role' => 'required',
            'name'      => 'required',

            'email'  => 'required|unique:users'

        ]);


        $user = User::create([
            'name'     => $request->name,
            'role'     => $request->role,
            'email'    => $request->email,
            'password' => bcrypt('123456'),
        ]);



        return redirect()->back()->with('message', 'Employee has been added.');
    }


    public function password($id)
    {
        $users = User::find($id);

        return view('admin.employee.updatepassword', compact('users'));
    }



    public function passwordupdate(Request $request, $id)
    {
        $request->validate([
            'password' => 'required'



        ]);
        $users = User::findOrFail($id);
        $users->password = bcrypt($request->get('password'));

        $users->save();
        return redirect()->back()->with('message', 'Password Changed');
    }









    public function login()
    {
        return view('login.login');
    }

    public function doLogin(Request $request)
    {
        //step 1 check input
        $credentials = $request->except('_token');

        //step 2 check valid user
        if (Auth::attempt($credentials)) {
            //step2.1 if valid login to the system
            // Authentication passed...

            return redirect()->route('dashboardroute');
        } else {
            //step2.2 return back with error: invalid user
            return redirect()->back()->with('message', 'Invalid Credentials');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
