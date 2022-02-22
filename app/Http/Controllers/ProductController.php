<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')->get();

        return view('products.index');
    }

    public function create()
    {
        return 'This is the form to create a products';
    }

    public function store()
    {
        return 'this is storages data products';
    }

    public function show($product)
    {
        $product = DB::table('products')->where('id', $product)->first();

        dd($product);
        return view('products.show');
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }

}
