<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show(Request $request)
    {
        // if (count($request->route('product')) < 2){
        //     return response($request->route('product'));
        // }

        // $product = Product::where();

        return response()->json(count($request->all()));
    }

    public function store(Request $request)
    {
        Transaction::create($request->all());
        return $request->all();
    }

}
