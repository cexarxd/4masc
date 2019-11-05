<?php

namespace App\Http\Controllers\Adop;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidacionMenu;
use App\Mascota;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos1=Mascota::orderBy('id')->pluck('estado_id', 'id')->toArray();/**
        * arreglar consegir que solo muestre los estados con valor = 3  y que enves de los valores muestre los nombres */
       $datos1=$datos['mascotas']=Mascota::paginate(2);
       return view('pet-adop.pet_adop', $datos);
}   
        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        return view('pet-adop.user-info');
    }
}
