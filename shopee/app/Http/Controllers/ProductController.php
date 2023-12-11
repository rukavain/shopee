<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use App\Models\Cart;


class ProductController extends Controller
{
    public function purchaseproduct(Product $product)
    {
        request()->validate([
            'quantity' => 'required|integer|min:1|max:' . $product->stocks,
        ]);

        if (request('action') === 'cart') {
            $product->decrement('stocks', request('quantity'));
            return redirect()->back()->with('success', 'Added to cart successfully.');
        } elseif (request('action') === 'buy') {
            $product->decrement('stocks', request('quantity'));
            $product->increment('sold', request('quantity'));

            return redirect()->back()->with('success', 'Product purchased successfully.');
        }
        return redirect()->back()->with('error', 'Invalid action.');
    }

    public function index()
    {
        return view('layout');
    }
    public function cart(Product $products)
    {
        $products::all();
        $products = Product::orderBy('created_at', 'DESC');
        if (request()->has('search')) {
            $products = $products->where('name', 'like', '%' . request()->get('search', '') . '%');
        }
        return view('cart', [
            'products' => $products->get()
        ]);
    }
    public function mainpage()
    {
        $product = Product::orderBy('created_at', 'DESC');
        if (request()->has('search')) {
            $product = $product->where('name', 'like', '%' . request()->get('search', '') . '%');
        }
        return view('mainpage', [
            'products' => $product->paginate(8)
        ]);
    }
    public function store()
    {

        request()->validate([
            'image' => 'required|url'
        ]);

        $product = Product::create([

            'name' => request()->get('name', ''),
            'price' => request()->get('price', ''),
            'description' => request()->get('description', ''),
            'stocks' => request()->get('stocks', ''),
            'image' => request()->get('image', ''),
            'sold' => request()->get('sold', ''),
        ]);

        $product->save();
        return redirect()->route('mainpage');
    }
    public function gotocreate()
    {
        return view('create');
    }
    public function gotoprodlist(Product $products)
    {
        return view('prodlist', [
            'products' => Product::all()
        ]);
    }

    public function edit(Product $product)
    {
        $editing = true;

        return view('prodlist', compact('product', 'editing'));
    }

    public function update(Product $product)
    {
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
            'stocks' => request('stocks'),
        ]);

        return redirect()->route('products.list');
    }
    public function destroy(Product $id)
    {
        $id->delete();

        return redirect()->route('mainpage');
    }
    public function show(Product $product)
    {
        $reviews = $product->reviews()->latest()->get();
        return view('view', [
            'product' => $product,
            'reviews' => $reviews,
        ]);
    }
    public function review()
    {
        $reviews = Review::all();

        return view('view', ['reviews' => $reviews]);
    }
    public function submitReview(Product $product)
    {
        request()->validate([
            'review' => 'required|min:3|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $product->reviews()->create([
            'feedback' => request('review'),
            'rating' => request('rating'),
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully.');
    }
    public function checkout(Product $product)
    {
        return view('checkout', [
            'product' =>  $product
        ]);
    }
    public function addToCart(Product $product, Request $request)
    {
        $quantity = $request->input('quantity', 1);

        $cartItem = Cart::where('product_id', $product->id)->first();

        if ($cartItem) {

            $cartItem->update(['quantity' => $cartItem->quantity + $quantity]);
        } else {

            Cart::create([
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);
        }

        return redirect()->route('products.show', $product->id)->with('success', 'Product added to the cart.');
    }

    public function viewCart()
    {
        $cartItems = Cart::with('product')->get();

        return view('cart', ['cartItems' => $cartItems]);
    }

    public function updateCart(Product $product, Request $request)
    {
        $quantity = $request->input('quantity');

        $cartItem = Cart::where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->update(['quantity' => $quantity]);
        }

        return redirect()->route('cart.view')->with('success', 'Cart updated.');
    }

    public function removeFromCart(Product $product)
    {
        $cartItem = Cart::where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('cart.view')->with('success', 'Product removed from the cart.');
    }
}
