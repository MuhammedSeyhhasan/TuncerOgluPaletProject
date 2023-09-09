<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
     
    public function index(){
        return view('welcome');
    }

    public function urunlerimiz(){
        return view('urunlerimiz');
    }

    public function hakimizda(){
        return view('hakimizda');
    }

    public function iletisim(){
        return view('iletisim');
    }
}
