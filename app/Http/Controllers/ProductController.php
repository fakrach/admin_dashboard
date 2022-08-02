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
            'image'=>['required' ,'image','max:2048','mimes:png,jpg,jpeg']
        ]);
        $product = new product();
        $product->title=$request->title;
        $product->slug=Str::slug($request->title);
        $product->category=$request->category;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->oldPrice=$request->oldPrice;
        $product->quantity=$request->quantity;
        if($request->has('image')){
            $file = $request->image;
            $image_name = time()."_".$file->getClientOriginalName();
            $file->move(public_path('uploads'),$image_name);
            $product->image=$image_name;
        }
        $product->save();
        
        return redirect()->route('products')->with([
            'success'=>"product added"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$slug)
    {
        return view('product.product-details')->with([
            'product'=> product::where('slug',$slug)->first()
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
    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => ['required', 'min:4','max:70'],
            'description'=> ['required',  'min:14','max:300'],
            'price'=>['required'],
            'image'=>['image','max:2048','mimes:png,jpg,jpeg']
        ]);
        $product = product::where('slug',$slug)->first();
        if($request->has('image')){
            $file = $request->image;
            $image_name = time()."_".$file->getClientOriginalName();
            $file->move(public_path('uploads'),$image_name);
            unlink(public_path('uploads/'.$product->image));
            $product->image=$image_name;
        }
        $product->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'category'=>$request->category,
            'image'=>$product->image,
            'description'=>$request->description,
            'price'=>$request->price,
            'oldPrice'=>$request->oldPrice,
            'quantity'=>$request->quantity
        ]);
        return redirect()->route('product.show',$product->slug)->with([
            'update'=>'product updated successfly!!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete($slug)
    {
        $product = product::where('slug',$slug)->first();
        $product->delete();
        return redirect()->route('products')->with([
            'delet'=>'product deleted successfly!!'
        ]);
    }
}
