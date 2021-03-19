<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProducts() 
    {
        $products = [
            ['name' => 'Phone'],
            ['name' => 'Tablet'],
            ['name' => 'Laptop'],
            ['name' => 'TV'],
            ['name' => 'Freeze'],
            ['name' => 'AC'],
        ];

        Product::insert($products);
        return "Product has been inserted successfully";
    }

    public function search()
    {
        return view('search');
    }

    public function autocomplete(Request $req)
    {
        $datas = Product::select('name')->where('name', "LIKE" , "%{$req->terms}%")->get();
        return response()->json($datas);
    }
}
