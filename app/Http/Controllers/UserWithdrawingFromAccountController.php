<?php

namespace App\Http\Controllers;
use App\Models\AccountTransferDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class UserWithdrawingFromAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ac_no =$request->ac_number;

        $deposits = DB::table('account_transfer_details')->where('ac_number', $ac_no)->sum('account_transfer_details.deposits');
        $withdrawals = DB::table('account_transfer_details')->where('ac_number',$ac_no)->sum('account_transfer_details.withdraw');
        $balance = $deposits-$withdrawals;
        $amount = $request->withdraw;
        if($balance < $amount  ){
            return "You cant withdraw  ₹{$amount} your current account balance  ₹{$balance } ";
        }
        else{

        $user_create = AccountTransferDetails::create([
            'ac_number'=>$request['ac_number'],
            'withdraw'=>$request['withdraw'],
        ]);
        return view('success');

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
