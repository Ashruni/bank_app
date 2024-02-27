<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTransactionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $acNumber = DB::table('users')->select('account_number')->where('id',$id)->value('account_number');

        $details = DB::table('users')->where('id', $id)->first();
        $accountDetails = DB::table('account_transfer_details')->where('ac_number', $acNumber)->get();
        $deposits = DB::table('account_transfer_details')->where('ac_number',$acNumber)->sum('account_transfer_details.deposits');
        $withdraw = DB::table('account_transfer_details')->where('ac_number',$acNumber)->sum('account_transfer_details.withdraw');
        $currentBalance =$deposits-$withdraw ;


        return view('user-transaction-details')->with('details', $details)->with('accountDetails',$accountDetails)->with('currentBalance',$currentBalance);
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
