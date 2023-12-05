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
        ]);

        return view('mainpage', [
            'products' => Product::orderBy('created_at', 'DESC')->paginate(10)
        ]);
    }

    public function store() {

        request()->validate([
            'image' => 'required|url'
        ]);

        $product = Product::create([

            'name'=> request()->get('name', ''),
            'price'=> request()->get('price', ''),
            'description'=> request()->get('description', ''),
            'stocks'=> request()->get('stocks', ''),
            'image'=> request()->get('image', ''),
            'sold' => request()->get('sold', ''),
        ]);

        $product->save();
        return redirect()->route('mainpage');
    }
    public function gotocreate(){
        return view('create');
    }
    public function gotoprodlist(Product $products) {
        return view('prodlist',[
            'products' => Product::all()
        ]);
    }

    public function edit(Product $product){
        $editing = true;

        return view('prodlist', compact('product', 'editing'));
    }

    public function update(Product $product){
        request()->validate([
            'image' => 'required|url',
            'name' => 'required',
            'price' => 'required',
            'sold' => 'required',
            'description' => 'required',
            'image' => 'required|url'
        ]);

        $product->update([
            'name' => request('name'),
            'price' => request('price'),
            'sold' => request('sold'),
            'description' => request('description'),
            'image' => request('image'),
        ]);

            return redirect()->route('products.list');
    }
    public function destroy(Product $id){
        $id->delete();

        return redirect()->route('mainpage');
    }
}
