<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Models\Product; // Adjust the namespace based on your project structure

class ProjectController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->limit(4)->get();
        return view('index', ['products' => $products]);
    }

    public function single_product($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        return view('single_product', ['product' => $product]);
    }

    public function products()
    {
        $products = DB::table('products')->paginate(4);
        return view('products', compact('products'));
    }
}
