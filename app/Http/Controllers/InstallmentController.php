<?php

namespace App\Http\Controllers;

use App\Models\Installment;
use App\Models\Policy;
use Illuminate\Http\Request;

class InstallmentController extends Controller
{
    public function thisMonth()
    {

        $installment = Installment::with('user')->where('month', date('m'))->where('year', date('Y'))->where('status', 'wait')->update([
            'status' => 'due'
        ]);

        $all_data = Installment::where('month', date('m'))->where('year', date('Y'))->where('status', 'due')->paginate(10);

        return view('admin.installment.thisMonth', compact('all_data'));
    }


    public function totaldue()
    {

        $installment = Installment::with('user')->where('month', date('m'))->where('year', date('Y'))->where('status', 'wait')->update([
            'status' => 'due'
        ]);


        $all_data = Installment::where('status', 'due')->paginate(10);

        return view('admin.installment.totaldue', compact('all_data'));
    }

    public function totalpaid()
    {

        // $installment = Installment::with('user')->where('month', date('m'))->where('year', date('Y'))->where('status', 'wait')->update([
        //     'status' => 'due'
        // ]);


        $all_data = Installment::where('status', 'paid')->paginate(10);

        return view('admin.installment.totalpaid', compact('all_data'));
    }



    public function installmentpay($id)
    {

        $installments = Installment::find($id);
        //return $installments;

      return view('admin.installment.installmentpay', compact('installments'));
        
     
    }

    public function confirm(Request $request, $id)
    {


        $installments = Installment::findOrFail($id);
        $installments->status = "paid";

        $installments->save();
        
        $installments = Installment::find($id);

        $all_data = Installment::where('month', date('m'))->where('year', date('Y'))->where('status', 'due')->paginate(10);
         
        //return view('admin.installment.thisMonth', compact('all_data'));
       return view('exampleEasycheckout',compact('all_data','installments'));
    }

    public function confirmed(Request $request, $id)
    {


        $installments = Installment::findOrFail($id);
        $installments->status = "paid";

        $installments->save();
        
        $installments = Installment::find($id);

        $all_data = Installment::where('month', date('m'))->where('year', date('Y'))->where('status', 'due')->paginate(10);
         
        return view('admin.installment.thisMonth', compact('all_data'));
       //return view('exampleEasycheckout',compact('all_data','installments'));
    }
    


    public function paidthisMonth()
    {


        $all_data = Installment::with('user')->where('month', date('m'))->where('year', date('Y'))->where('status', 'paid')->paginate(10);

        return view('admin.installment.thisMonthpaid', compact('all_data'));
    }
    /*public function installmentpay(Request $request, $id)
    {



   
        $installment=Installment::findOrFail($id);
        $installment->status="paid";
        $installment->save();
      
        return view('/payinsallment')->with('success', 'Data is Update');
    }*/

    public function myinstallment()
    {

        $all_installments = Installment::where('status', 'paid')->where('user_id', auth()->user()->id)->where('status', 'paid')->paginate(10);

        $total_installments = Installment::where('status', 'paid')->where('user_id', auth()->user()->id)->where('status', 'paid')->sum('amount');



        // select sum('amount') form `tabel` where `status` = 'paid' and where `user_id`=2;


        return view('admin.installment.myinstallment', compact('all_installments', 'total_installments'));
    }



    public function mydues()
    {

        $installment = Installment::with('user')->where('month', date('m'))->where('year', date('Y'))->where('status', 'wait')->update([
            'status' => 'due'
        ]);


        $all_installments = Installment::where('status', 'due')->where('user_id', auth()->user()->id)->where('status', 'due')->paginate(10);

        $total_installments = Installment::where('status', 'due')->where('user_id', auth()->user()->id)->where('status', 'due')->sum('amount');

        return view('admin.installment.mydues', compact('all_installments', 'total_installments'));
    }
}
