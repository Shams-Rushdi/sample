<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function details($id){
        $name="";
        $price ="";
        return view('product.details')
        ->with('id',$id)
        ->with('n',$name)
        ->with('price',$price);
    }
    // public function details(Product $products)
    // {
    //     return view('product.details')->with('products',$products);
    // }
    public function list(){

        $products = Product::all();
        return view('product.list')->with('products',$products);

    }

    function create(){
        return view('product.create');
    }
    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:50|min:3",
                "price"=>"required"
               
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 50 characters",
                "price.required"=>"Please provide price",
              
            ]);
            $products = Product::all();
            $st = new Product();
            $st->name = $req->name;
            $st->price =$req->price;
            $st->save();
            return view('product.list')->with('products',$products);
        
    }

}
