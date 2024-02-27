<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAccountCurrentBalanceController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $acNumb = DB::table('users')->select('account_number')->where('id', $id)->value('account_number');
        $deposits = DB::table('account_transfer_details')->where('ac_number', $acNumb)->sum('account_transfer_details.deposits');
        $withdraw= DB::table('account_transfer_details')->where('ac_number',$acNumb)->sum('account_transfer_details.withdraw');
        $currentBalance= $deposits - $withdraw;
        $aboutUser = DB::table('users')->where('id',$id)->first();
        return view('current_balance')->with('currentBalance',$currentBalance)->with('aboutUser',$aboutUser);


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
