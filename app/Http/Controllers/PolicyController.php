<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Installment;
use App\Models\Policy;
use App\Models\Deathclaim;
use App\Models\Claim;
use App\Models\User;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function list()
    {
        $all_policies = Policy::with('category')->get();
        return view('admin.policy.policylist', compact('all_policies'));
    }


    public function createForm()
    {
        $categories = Category::all();

        return view('admin.policy.policycreateform', compact('categories'));
    }

    public function create(Request $request)
    {



        $request->validate([
            'policy_holder_name' => 'required',
            'father_name'        => 'required',
            'mother_name'        => 'required',
            'occupation'         => 'required',
            'date_of_birth'      => 'required',
            'gender'             => 'required',
            'nid_number'         => 'required',
            'nationality'        => 'required',
            'religion'           => 'required',
            'maritial_status'    => 'required',
            'permanent_address'  => 'required',
            'present_address'    => 'required',
            'annual_income'      => 'required',
            'mobile'             => 'required|unique:policies',
            'email'              => 'required|unique:policies'
           
        ]);


        $file_name = '';
        if ($request->hasFile('holder_image')) {
            $policy = $request->file('holder_image');
            if ($policy->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $policy->getClientOriginalName();
                //store into directory
                $policy->storeAs('Images', $file_name);
            }
        }

        $user = User::create([
            'name'     => $request->input('policy_holder_name'),
            'role'     => "account_holder",
            'email'    => $request->input('email'),
            'password' => bcrypt('123456'),
        ]);


        $policy = Policy::create([
            'user_id'            => $user->id,
            'policy_holder_name' => $request->policy_holder_name,
            'holder_image'       => $file_name,
            'father_name'        => $request->father_name,
            'mother_name'        => $request->mother_name,
            'occupation'         => $request->occupation,
            'date_of_birth'      => $request->date_of_birth,
            'gender'             => $request->gender,
            'nid_number'         => $request->nid_number,
            'nationality'        => $request->nationality,
            'religion'           => $request->religion,
            'maritial_status'    => $request->maritial_status,
            'permanent_address'  => $request->permanent_address,
            'present_address'    => $request->present_address,
            'annual_income'      => $request->annual_income,
            'mobile'             => $request->mobile,
            'email'              => $request->email,
            'benificant_name'    => $request->benificant_name,
            'banificient_nid'    => $request->banificient_nid,
            'relation'           => $request->relation,
            'benifient_address'  => $request->benifient_address,
            'category_id'        => $request->category_id
        ]);
        //get insurance length and installment amount
        $insurance = Category::select('installment_amount', 'policy_length')->find($request->category_id);
        //insert all installment
        //check number of installment
        $installment_number = (int)$insurance->policy_length * 12;
        $currentDate = date('Y-m');
        for ($i = 0; $i < $installment_number; $i++) {
            $effectiveDate = date('Y-m-d', strtotime("+" . $i . " months", strtotime($currentDate)));
            Installment::create([
                'user_id'   => $user->id,
                'policy_id' => $policy->id,
                'month'     => date('m', strtotime($effectiveDate)),
                'Year'      => date('Y', strtotime($effectiveDate)),
                'amount'    => $insurance->installment_amount,
            ]);
        }
        return redirect()->back()->with('message', 'Policy Taken Successfully.');

    }


    /*update part*/

    public function edit($id)
    {
        $policies = policy::find($id);

        return view('admin.policy.policyedit', compact('policies'));

    }


    public function update(Request $request, $id)
    {
        if ($request->hasFile('holder_image')) {
            $policy = $request->file('holder_image');
            if ($policy->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $policy->getClientOriginalName();
                //store into directory
                $policy->storeAs('Images', $file_name);
            }
            Policy::find($id)->update([
                'policy_holder_name' => $request->policy_holder_name,
                'holder_image'       => $file_name,
                'father_name'        => $request->father_name,
                'mother_name'        => $request->mother_name,
                'occupation'         => $request->occupation,
                'date_of_birth'      => $request->date_of_birth,
                'gender'             => $request->gender,
                'nid_number'         => $request->nid_number,
                'nationality'        => $request->nationality,
                'religion'           => $request->religion,
                'maritial_status'    => $request->maritial_status,
                'permanent_address'  => $request->permanent_address,
                'present_address'    => $request->present_address,
                'annual_income'      => $request->annual_income,
                'mobile'             => $request->mobile,
                'email'              => $request->email,


                'benificant_name'   => $request->benificant_name,
                'banificient_nid'   => $request->banificient_nid,
                'relation'          => $request->relation,
                'benifient_address' => $request->benifient_address,
             

                /*

                'updated_by'=>auth()->user()->id*/
            ]);
        } else {
            Policy::find($id)->update([
                'policy_holder_name' => $request->policy_holder_name,
                'father_name'        => $request->father_name,
                'mother_name'        => $request->mother_name,
                'occupation'         => $request->occupation,
                'date_of_birth'      => $request->date_of_birth,
                'gender'             => $request->gender,
                'nid_number'         => $request->nid_number,
                'nationality'        => $request->nationality,
                'religion'           => $request->religion,
                'maritial_status'    => $request->maritial_status,
                'permanent_address'  => $request->permanent_address,
                'present_address'    => $request->present_address,
                'annual_income'      => $request->annual_income,
                'mobile'             => $request->mobile,
                'email'              => $request->email,


                'benificant_name'   => $request->benificant_name,
                'banificient_nid'   => $request->banificient_nid,
                'relation'          => $request->relation,
                'benifient_address' => $request->benifient_address,
                'policy_number'     => $request->policy_number,
                /*
                'updated_by'=>auth()->user()->id*/
            ]);
        }


        return redirect('/policylist')->with('success', 'Data is Update');
    }


    public function destroy($id)
    {
        $policies = Policy::find($id);
        $policies->delete();
        return redirect('/policylist')->with('success', 'Data is delete Successfully');
    }


    public function userpolicy($id)
    {

        return view('userpolicycreate', compact('id'));

    }




     public function accountholder()
    {

    $all_data=Policy::paginate(50);
    $title='Category List show';

        return view('admin.policy.accountholder',compact('all_data','title'));
    }



     public function claimform()
    {

        $policy= Policy::where('user_id',auth()->user()->id)->first();

        return view('admin.claim.claimform',compact('policy'));
    }


    public function claimcreate(Request $request)
    {


        Claim::create([
//            'column name'=>'input / value'
            'policy_id'=>$request->policy_id,
            'user_id'=>auth()->user()->id,
            'reason'=>$request->reason,
            'date'=>$request->date,
            'time'=>$request->time,
            'place'=>$request->place,
            'loss_amount'=>$request->loss_amount,
            'claim_amount'=>'0',
            'status'=>"Pending",
            'description'=>$request->description
        ]);

        return redirect()->back()->with('message', 'Claim has Taken Successfully.');


    }



    public function claimlist()
    {
        $all_claims = Claim::with('policy')->where('status','Pending')->paginate(10);


        return view('admin.claim.claimlist', compact('all_claims'));
    }


     public function approvedclaimlist()
    {
        $all_claims = Claim::with('policy')->where('status','approved')->paginate(10);


        return view('admin.claim.approvedclaimlist', compact('all_claims'));
    }

     public function doneclaimlist()
    {
        $all_claims = Claim::with('policy')->where('status','completed')->paginate(10);


        return view('admin.claim.doneclaimlist', compact('all_claims'));
    }


    public function rejectclaimlist()
    {
        $all_claims = Claim::with('policy')->where('status','reject')->paginate(10);


        return view('admin.claim.rejectclaimlist', compact('all_claims'));
    }



    public function myclaimlist()
    {
        $all_claims = Claim::with('policy')->where('user_id',auth()->user()->id)->paginate(10);


        return view('admin.claim.myclaimlist', compact('all_claims'));
    }


    

     public function deathclaimlist()
    {

        $all_claims = Deathclaim::with('policy')->where('status','Pending')->paginate(10);

    

        return view('admin.claim.deathclaim',compact('all_claims'));
    }



     public function rejectdeathclaimlist()
    {

        $all_claims = Deathclaim::with('policy')->where('status','reject')->paginate(10);

    

        return view('admin.claim.rejectdeathclaim',compact('all_claims'));
    }


    public function approveddeathclaimlist()
    {

        $all_claims = Deathclaim::with('policy')->where('status','approved')->paginate(10);

    

        return view('admin.claim.approveddeathclaim',compact('all_claims'));
    }


     public function donedeathclaimlist()
    {

        $all_claims = Deathclaim::with('policy')->where('status','completed')->paginate(10);

    

        return view('admin.claim.donedeathclaim',compact('all_claims'));
    }





     public function mydeathclaimlist()
    {

        $all_claims = Deathclaim::with('policy')->where('user_id',auth()->user()->id)->paginate(10);

    

        return view('admin.claim.mydeathclaim',compact('all_claims'));
    }


     public function deathclaimform()
    {

        $policy= Policy::where('user_id',auth()->user()->id)->first();

    

        return view('admin.claim.deathclaimform',compact('policy'));
    }

    public function deathclaimform2(Request $request)
    {


         $file_name = '';
        if ($request->hasFile('death_certicate')) {
            $policy = $request->file('death_certicate');
            if ($policy->isValid()) {
                //generate file name
                $file_name = date('Ymdhms') . '.' . $policy->getClientOriginalName();
                //store into directory
                $policy->storeAs('Images', $file_name);
            }
        }


        Deathclaim::create([
//            'column name'=>'input / value'
            'policy_id'=>$request->policy_id,
            'user_id'=>auth()->user()->id,
            'reason'=>$request->reason,
            'date'=>$request->date,
            'time'=>$request->time,
            'place'=>$request->place,
            'Status'=>"Pending",
            'amount'=>"0",

            'death_certificate'=>$file_name
        ]);
    return redirect()->back()->with('message', 'Claim has Taken Successfully.');
    }


public function claimApproved($id)
{
    $claim = Claim::with('policy.category')->where('status','Pending')->where('id',$id)->first();
    //select * from calims  join on polcies claims.policy_id = poliecs.id 
        //join on categories poliecs.category_id = categories.id
    // return $claim;   
    
    $interest_rate = ((int)$claim->policy->category->interest_rate / 100);

    $claim_amount =  $claim->loss_amount * $interest_rate;


    $claim->update([
        'status' => 'approved',
        'claim_amount' => $claim_amount
    ]);
    return redirect()->back();
}


public function deathclaimApproved($id)
{
    $deathclaim = Deathclaim::with('policy.category')->where('status','Pending')->where('id',$id)->first();
    //select * from calims  join on polcies claims.policy_id = poliecs.id 
        //join on categories poliecs.category_id = categories.id
    
    $policy_month = ($deathclaim->policy->category->policy_length * 12);


   $total_installment = ($deathclaim->policy->category->installment_amount * $policy_month);

   $interest_rate = ((int)$deathclaim->policy->category->interest_rate / 100);

   $claim_rate= ($total_installment * $interest_rate);

   $claim_amount=($claim_rate + $total_installment);




    $deathclaim->update([
        'status' => 'approved',
        'amount' => $claim_amount
    ]);
    return redirect()->back();
}




public function claimconfirm($id)
{
    $claim = Claim::with('policy.category')->where('status','approved')->where('id',$id)->first();
    //select * from calims  join on polcies claims.policy_id = poliecs.id 
        //join on categories poliecs.category_id = categories.id
    
    


    $claim->update([
        'status' => 'completed',
        
    ]);
    return redirect()->back();
}




public function claimReject($id)
{
    $claim = Claim::with('policy.category')->where('status','Pending')->where('id',$id)->first();
    //select * from calims  join on polcies claims.policy_id = poliecs.id 
        //join on categories poliecs.category_id = categories.id
    
    


    $claim->update([
        'status' => 'reject',
        
    ]);
    return redirect()->back();
}













public function deathclaimReject($id)
{
    $deathclaim = Deathclaim::with('policy.category')->where('status','Pending')->where('id',$id)->first();
    //select * from calims  join on polcies claims.policy_id = poliecs.id 
        //join on categories poliecs.category_id = categories.id
    
    


    $deathclaim->update([
        'status' => 'reject',
        
    ]);
    return redirect()->back();
}

public function deathclaimconfirm($id)
{
    $deathclaim = Deathclaim::with('policy.category')->where('status','approved')->where('id',$id)->first();
    //select * from calims  join on polcies claims.policy_id = poliecs.id 
        //join on categories poliecs.category_id = categories.id
    
    


    $deathclaim->update([
        'status' => 'completed',
        
    ]);
    return redirect()->back();
}



}


















