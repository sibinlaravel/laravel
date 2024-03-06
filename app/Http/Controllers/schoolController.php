<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Jobs\ProcessRegistration;




class schoolController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $cibaca){

        $cibaca->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'pass'=> 'required',
          
        ]);

         
        $existingEmail = User::where('email', $cibaca->email)->first();

        if ($existingEmail) {
            return redirect()->back()->with('message', 'Email already exists');
        }

            ProcessRegistration::dispatch([
                'name' => $cibaca->name,
                'email' => $cibaca->email,
                'pass' => $cibaca->pass,
    
            ])->onQueue('Sibin_Q');

            return redirect('login');

    }







}


