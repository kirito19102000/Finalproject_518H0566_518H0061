<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Eloquent;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       $prod = Product::find($product);
       return view('admin.edit', compact('prod','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
            'Name' => 'required',
            'unit_price' => 'required',
        ]);
        //$product_id = $product->input('');
        $prod = Product::find(2);
        //dd($prod);
        $prod->Name = $request->get('Name');
        $prod->description = $request->get('description');
        $prod->ID_type = $request->get('ID_type');
        $prod->unit_price = $request->get('unit_price');
        $prod->promotion_price = $request->get('promotion_price');
        $prod->image = $request->get('image');
        $prod->save();
        return redirect()->route('productsPanel')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
