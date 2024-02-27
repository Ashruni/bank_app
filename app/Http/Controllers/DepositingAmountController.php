<?php

namespace App\Http\Controllers;
use App\Models\AccountTransferDetails;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepositingAmountController extends Controller
{
    // public $balance;
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
        $request->validate([
            'ac_number'=>'required',
            'deposit'=>'required',

        ]);
        $balance = 0;
        // $balance += $request->deposit ;
        // $user = User::where('ac_number','=',$request->ac_number);
        $deposits = AccountTransferDetails::create(
            [
            'ac_number' => $request['ac_number'],
            'deposits' => $request['deposit'],
            // 'current_balance'=> $balance
            ]
        );
        return view('success');

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
