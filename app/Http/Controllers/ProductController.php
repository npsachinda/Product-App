<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    public function SaveProduct(Request $request){

        // dd($request->all());
 
        $this->validate($request,[
            "product_name" => "required|max:100",
            "product_sku" => "required",
            "description" => "required",
             "inventory"   =>  "required|numeric|min:1"
        ]);
 
        $product=new Product;
        $product->name=$request->product_name;
        $product->sku=$request->product_sku;
        $product->description=$request->description;
        $product->inventory=$request->inventory;
        $product->save();
 
        $saved_data=Product::all();
       // dd($saved_data);
       return redirect('/products')->with('products', $saved_data);
 
       // return redirect()->back();
 
     }
 
 
 public function DeleteProduct($id){
 
     $product=Product::find($id);
     $product->delete();
     return redirect()->back();
 
 }
 
 public function EditProduct($id){
 
     $product_data=Product::find($id);
     return view('editproduct')->with('productdata',$product_data);
 
 }
 
 public function SaveEdit(Request $request){
 
    $this->validate($request,[
        "product_name" => "required|max:100",
        "product_sku" => "required",
        "description" => "required",
         "inventory"   =>  "required|numeric|min:1"
    ]);
 
    $id=$request->id;

    $product_data=Product::find($id);

    $product_data->name=$request->product_name;
    $product_data->sku=$request->product_sku;
    $product_data->description=$request->description;
    $product_data->inventory=$request->inventory;

    $product_data->save();

    $saved_data=Product::all();
    return redirect('/products')->with('products', $saved_data);
 
 
  }
}
