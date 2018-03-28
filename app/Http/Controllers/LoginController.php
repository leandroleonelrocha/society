<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;

class LoginController extends Controller
{
	 public function validar(Request $request){
	 	
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            $user=User::where('email',$request->email)->first();
            Auth::login($user, true);

            return redirect()->intended('deshboard');
        }else{
        	return 'asd';
        }
    }

    public function deshboard(){

    	dd(Auth::user());
    	return view('deshboard');
    }

}
