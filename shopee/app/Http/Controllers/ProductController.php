<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('layout');
    }
    public function mainpage() {
        return view('mainpage');
    }
}
