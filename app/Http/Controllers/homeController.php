<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\treino;

class homeController extends Controller
{
    public function index()
    {
       $treinos = treino::all();
       return view('home',compact('treinos'));
    }
}
