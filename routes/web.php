<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});



Route::get('/welcome', function () {
    return view('welcome');
})->name('welcomeroute');



Route::get('/about', function () {
    return view('about');
})->name('aboutroute');







Route::get('/contact', function () {
    return view('contact');
})->name('contactroute');


/*log in and log out part*/
Route::get('/login', 'UserController@Login')->name('login');

Route::post('/admin/do-login', 'UserController@doLogin')->name('logindo');

Route::get('/logout', 'UserController@logout')->name('logout');






Route::group(['middleware' => 'auth'], function () {

    //<<<<<<<<<<<<<<<<<<<<<<<<<admin>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    //>>>>>>Admin>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    Route::get('/dashboard', 'UserController@dashboard')->name('dashboardroute');

    //>>>>>>Admin  Accounts>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

    Route::get('/accountlist', 'AdminController@accountlist')->name('accountlistroute');
    Route::get('/installment', 'InstallmentController@thisMonth')->name('installment.thisMonth');

    Route::get('/dues', 'InstallmentController@totaldue')->name('alldues');
    Route::get('/paids', 'InstallmentController@totalpaid')->name('allpaid'); 



    Route::get('/payinsallment/{id}/update', 'InstallmentController@installmentpay')->name('installmentpayroute');

    Route::post('/installment/{id}/pay', 'InstallmentController@confirm')->name('confirmroute');

    Route::post('/installments/{id}/payed', 'InstallmentController@confirmed')->name('confirmed_route');

    Route::get('/paidinstallment', 'InstallmentController@paidthisMonth')->name('paidinstallment.thisMonth');


    Route::get('/createform', 'AdminController@createForm')->name('createroute');

    Route::post('store', 'AdminController@accountstore')->name('storeroute');

    Route::get('/myinstallment', 'InstallmentController@myinstallment')->name('myinstallment');

    Route::get('/mydues', 'InstallmentController@mydues')->name('mydues');



    //>>>>>>Admin New  Policies>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


    Route::get('/openpolicy', 'AdminController@policyForm')->name('policyformroute');


    Route::get('/categorylist', 'CategoryController@list')->name('categoryroute');

    Route::post('/category2', 'CategoryController@create')->name('categorycreateroute');

    Route::get('/category/{id}/edit', 'CategoryController@edit')->name('categoryedit');

    Route::post('/category/{id}/update', 'CategoryController@update')->name('categoryupdate');

    Route::get('/category/{id}/delete', 'CategoryController@destroy')->name('categorydelete');


    /*insurance policies*/

    Route::get('/policylist', 'PolicyController@list')->name('insurancepolicyroute');

    Route::get('/openpolicy', 'PolicyController@createForm')->name('openpolicyroute');

    Route::post('/policycreate', 'PolicyController@create')->name('createroute');

    Route::get('/policy/{id}/edit', 'PolicyController@edit')->name('editformroute');

    Route::get('/employeelist', 'UserController@userlist')->name('employeeroute');

    Route::get('/addemployeeform', 'UserController@employeeForm')->name('employeeformroute');

    Route::post('/employeecreate', 'UserController@employeecreate')->name('addroute2');

    Route::get('/password/{id}', 'UserController@password')->name('password');
    Route::post('/password/{id}/update', 'UserController@passwordupdate')->name('passwordchange');




    Route::put('/policy/{id}/update', 'PolicyController@update')->name('policyupdate');

    Route::get('/policy/{id}/delete', 'PolicyController@destroy')->name('policydelete');

    Route::get('/accountholder', 'PolicyController@accountholder')->name('accountholderroute');

    Route::get('/claim', 'PolicyController@claimform')->name('claimroute');

    Route::post('/claimcreate', 'PolicyController@claimcreate')->name('claimroute2');

    Route::get('/claim/{id}/approved', 'PolicyController@claimApproved')->name('claim.approved');



    Route::get('/claim/{id}/reject', 'PolicyController@claimReject')->name('claim.reject');

    Route::get('/claim/{id}/confirm', 'PolicyController@claimconfirm')->name('claim.confirm');

    Route::get('/deathclaim/{id}/approved', 'PolicyController@deathclaimApproved')->name('deathclaim.approved');

    Route::get('/deathclaim/{id}/confirm', 'PolicyController@deathclaimconfirm')->name('deathclaim.confirm');

    Route::get('/deathclaim/{id}/reject', 'PolicyController@deathclaimReject')->name('deathclaim.reject');

    Route::get('/deathclaimroute', 'PolicyController@deathclaimform')->name('deathclaimroute');

    Route::post('/deathclaimroute', 'PolicyController@deathclaimform2')->name('deathclaimroute2');


    Route::get('/deathclaimlist', 'PolicyController@deathclaimlist')->name('deathclaimlist');

    Route::get('/claimlist', 'PolicyController@claimlist')->name('claimlistroute');
    Route::get('/approvedclaimlist', 'PolicyController@approvedclaimlist')->name('approvedclaimlistroute');

    Route::get('/doneclaimlist', 'PolicyController@doneclaimlist')->name('doneclaimlistroute');
    Route::get('/rejectclaimlist', 'PolicyController@rejectclaimlist')->name('rejectclaimlistroute');

    Route::get('/approveddeathclaimlist', 'PolicyController@approveddeathclaimlist')->name('approveddeathclaimlistroute');

    Route::get('/donedeathclaimlist', 'PolicyController@donedeathclaimlist')->name('donedeathclaimlistroute');

    Route::get('/rejectdeathclaimlist', 'PolicyController@rejectdeathclaimlist')->name('rejectdeathclaimlistroute');


    Route::get('/myclaimlist', 'PolicyController@myclaimlist')->name('myclaimlistroute');

    Route::get('/mydeathclaimlis', 'PolicyController@mydeathclaimlist')->name('mydeathclaimlist');
});






Route::get('/servicess', 'CategoryController@insurance')->name('serviceroute');

Route::get('/servicess1/{id}', 'PolicyController@userpolicy')->name('userpolicy');

Route::post('/create', 'PolicyController@create')->name('usercreateroute');





// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END