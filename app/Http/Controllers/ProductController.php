<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with(['productDetail', 'transaction', 'size'])
                          ->find($id);
        return response([
            'nama_product' => $product->productDetail->name,
            'jenis_produk' => $product->productDetail->type,
            'ukuran' => $product->size->name,
            'harga' => $product->price,
        ], 200);
        // return $request->route();
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return $request->all();
    }
}
