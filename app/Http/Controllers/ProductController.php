<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('product.list', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lastCategoryId = Category::orderByDesc('id')->first()->id;

        $request->validate([
            'productName' => 'required|min:1|max:32',
            'categorySelect' => 'required|min:1|max:$lastCategoryId|numeric',
            'quantity' => 'required|numeric|min:0|max:1000000000',
            'buyPrice' => 'required|min:0|max:1000000000',
            'sellPrice' => 'required|min:0|max:1000000000',
            'taxRate' => 'required|numeric|min:0|max:100'
        ]);

        Product::create([
            'name' => $request->productName,
            'category_id' => $request->categorySelect,
            'quantity' => $request->quantity,
            'buy_price' => $request->buyPrice,
            'sell_price' => $request->sellPrice,
            'tax_rate' => $request->taxRate
        ]);

        return view('customer.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        $categories = Category::all();
        return view('product.detail', compact('product', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return view('product.list');
    }
}