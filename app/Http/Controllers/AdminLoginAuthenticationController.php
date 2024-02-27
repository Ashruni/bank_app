<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminLoginAuthenticationController extends Controller
{
    public function index(){
        return view('login');
    }
    public function loginAuth(Request $request){
        $userId = $request->input('email');
        $users = User::where('email', '=', $userId)->where('type', '=', 'admin')->first() ;
        if ($users){
            if(Auth::attempt($request->only('email', 'password'))){

                return view('admin_dashboard');
            }
            else{
                return redirect()->route('show_error');
            }
        }
        else{
            if(Auth::attempt($request->only('email', 'password'))){
                $usersId = $request->input('email');
                $users = User::where('email', '=', $usersId)->first();
                if($users){
                    return view('user_dashboard', ['users' => $users]);
                }

                // return redirect()->route('user_dashboard')->with('user', $user);
            }
            else{
                return redirect()->route('show_error');
            }

          }



    }
}
