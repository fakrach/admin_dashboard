<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = product::paginate(6);
        return view('product.products')->with([
            'products'=> $products
        ]);
    }


    public function add()
    {
        
        return view('product.addProduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'title' => ['required', 'unique:products', 'min:4','max:70'],
            'description'=> ['required',  'min:14','max:300'],
            'price'=>['required'],
        ]);
        $product = new product();
        $product->title=$request->title;
        $product->slug=Str::slug($request->title);
        $product->category=$request->category;
        $product->image=$request->image;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->oldPrice=$request->oldPrice;
        $product->save();
        
        return redirect()->route('add.product')->with([
            'success'=>"product added"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        
    }

    public function details($id)
    {
        $product = product::find($id);
        return view('productDetails')->with([
            'product'=> $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
