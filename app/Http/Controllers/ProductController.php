<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        $data = Product::get();

        return view('product.index', compact('data'));
    }

    function create(){
        return view ('product.create');
    }

    function post(Request $request){
        $product = new Product();
        $product->fill($request->only(['name', 'description', 'price', 'stock']));
        $product->save();
        return redirect()->route('product.index');
    }

    function update ($id){
        $product = Product::find($id);
        return view('product.update', compact('product'));
    }

    function put (Request $request, $id){
        $product = Product::find($id);
        $product->fill($request->only(['name', 'description', 'price', 'stock']));
        $product->updated_at = now();
        $product->update();
        return redirect()->route('product.index');
    }

    function delete ($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
