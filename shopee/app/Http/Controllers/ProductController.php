<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('layout');
    }

    public function mainpage(){

        $product =  new Product([
            'name'=>'Logitech G102 Lightsync Optical Gaming Mouse',
            'price' => 999,
            'description' => 'Make the most of your gaming time with the G102 gaming mouse. It features LIGHTSYNC technology, a gaming-grade sensor, and a classic 6-button design to light up your game...and your desk.
            Get precise cursor tracking and responsive performance with a gaming-grade sensor. Sensitivity is adjustable from 200-8,000 DPI, choosing the best level based on your playing preferences.
            The classic six-button design brings comfort and confidence so you can explore, cast spells, and play the way you want.
            The left and right main buttons feature Logitech Gs exclusive metal spring actuation system, which provides precise actuation and a consistent user experience. Click after click.'
            ,'stocks' => 100
        ]);

        return view('mainpage', [
            'products' => Product::orderBy('created_at', 'DESC')->get()
        ]);
    }

}
