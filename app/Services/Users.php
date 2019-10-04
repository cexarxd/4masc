<?php

namespace App\Services;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

    class Users extends Controller{

    public function updateProfile(Request $request) 
    {
        if ($request->user()) {
        $user = Auth::user()->cedula;
            
    }   
    return $user;
    }
}