<?php

namespace App\Http\Controllers\User;

use App\Mascota;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
 

class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('user-info.user-info');  
        
    }

    public function store(Request $request)
    {
           // validacion
           
    
}

    public function show( $id)
    {
        
    }



}
