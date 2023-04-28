<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    public function account($user){

        $user = User::find($user);        
        return view('account.account', compact('user'));
    }
}
