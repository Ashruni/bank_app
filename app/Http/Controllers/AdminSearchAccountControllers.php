<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSearchAccountControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $acNum = $request->accountNumber;
        $variable = DB::table('users')->where('account_number', $acNum)->exists();
        if( $variable == true){
            $request->validate([
                'accountNumber'=>'required',
            ]);
            $transactionHistory= DB::table('account_transfer_details')->where('ac_number',$acNum)->get();
            $user = DB::table('users')->where('account_number', $acNum)->first();
            $deposits = DB::table('account_transfer_details')->where('ac_number',$acNum)->sum('account_transfer_details.deposits');
            $withdraw = DB::table('account_transfer_details')->where('ac_number',$acNum)->sum('account_transfer_details.withdraw');
            $currentBalance =$deposits-$withdraw ;
            return view('user_transaction_table_admin')->with('transactionHistory',$transactionHistory)->with('user',$user)->with('currentBalance',$currentBalance);

        }
        else{
            return 'ACCOUNT NUMBER DO NOT EXIST';
        }

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
        //
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
