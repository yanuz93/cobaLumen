<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with(['productDetail', 'size'])
                          ->find($id);

        if (!$product){
            return response([
                'message' => "There's no product registered with id={$id}!"
            ], 404);
        }

        return response([
            'nama_product' => $product->productDetail->name,
            'jenis_produk' => $product->productDetail->type,
            'ukuran' => $product->size->name,
            'harga' => $product->price,
        ], 200);
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return $request->all();
    }

    public function reportAllSales()
    {
        $all = Product::with(['productDetail', 'size', 'transaction'])->get();

        $res = $all->map(function ($item){
            return [
                'nama_product' => $item->productDetail->name,
                'jenis_produk' => $item->productDetail->type,
                'ukuran' => $item->size->name,
                'terjual' => $item->transaction->sum('quantity'),      
            ];
        });

        return response($res, 200);
    }
}
