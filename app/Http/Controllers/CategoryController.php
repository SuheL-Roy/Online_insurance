<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {

        $all_data = Category::paginate(50);
        $title = 'Category List show';

        return view('admin.policy.categorylist', compact('all_data', 'title'));
    }


    public function create(Request $request)
    {


        Category::create([
            //            'column name'=>'input / value'
            'name' => $request->category_name,
            'installment_amount' => $request->installment_amount,
            'policy_length' => $request->policy_length,
            'interest_rate' => $request->interest_rate
        ]);
        return redirect()->back();
    }

    public function insurance()
    {
        $all_categories = Category::paginate(6);
        return view('insurance', compact('all_categories'));
    }




    public function edit($id)
    {
        $categories = Category::find($id);

        return view('admin.category.categoryedit', compact('categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'installment_amount' => 'required',
            'policy_length' => 'required',
            'interest_rate' => 'required',
            'status' => 'required'


        ]);
        $categories = Category::findOrFail($id);
        $categories->name = $request->get('name');
        $categories->installment_amount = $request->get('installment_amount');
        $categories->policy_length = $request->get('policy_length');
        $categories->interest_rate = $request->get('interest_rate');
        $categories->status = $request->get('status');
        $categories->save();
        return redirect('/categorylist')->with('success', 'Data is Update');
    }



    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect('/categorylist')->with('success', 'Data is delete Successfully');
    }
}
