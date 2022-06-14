<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Insurancepolicy;
use Illuminate\Http\Request;

class AdminController extends Controller
{



	//>>>>>>Admin  Accounts>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	public function accountlist()
	{
		$all_accounts = Account::all();
		return view('admin.accountlist', compact('all_accounts'));
	}

	public function createForm()
	{
		return view('admin.accountscreate');
	}


	public function accountstore(Request $request)
	{
		$data = [
			'name' => $request->input('name'),
			'address' => $request->input('address'),
			'types' => $request->input('types'),
			'mobile' => $request->input('mobile'),
			'email' => $request->input('email'),
			'duration' => $request->input('duration'),
			'amount' => $request->input('amount')
		];
		try {
			Account::create($data);
			return redirect()->route('accountlistroute');
		} catch (\Exception $e) {
		}
	}





	//>>>>>>Admin New  Policies>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	public function policylist()
	{
		$all_insurancepolicies = Insurancepolicy::all();
		return view('admin.policy.policylist', compact('all_insurancepolicies'));
	}


	public function policyForm()
	{
		return view('admin.policy.openpolicy');
	}



	public function policystore(Request $request)
	{
		$data = [
			'name' => $request->input('name'),
			'address' => $request->input('address'),
			'types' => $request->input('types'),
			'mobile' => $request->input('mobile'),
			'email' => $request->input('email'),
			'duration' => $request->input('duration'),
			'amount' => $request->input('amount')
		];
		try {
			Insurancepolicy::create($data);
			return redirect()->route('policylistroute');
		} catch (\Exception $e) {
		}
	}
}
