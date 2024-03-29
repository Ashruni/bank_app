<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserInputFieldControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email = $request->email;
        $checker=DB::table('users')->where('email', $email)->exists();
        if($checker==true){
            return "DUPLICATE EMAIL ID NOT ALLOWED";
        }
        else{
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
                'mobile'=>'required',
                'account_number'=>'required',
                'address'=>'required'
           ]);
           $users = User::create([
               'name'=>$request['name'],
               'email'=>$request['email'],
               'password'=>$request['password'],
               'mobile'=>$request['mobile'],
               'account_number'=>$request['account_number'],
               'address'=>$request['address']
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
