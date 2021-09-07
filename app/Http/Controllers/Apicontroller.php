<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class Apicontroller extends Controller
{
public function store(request $req)
{
 
  
$product=new product;
$product->name=$req->input('name');
$product->description = $req->input('description');

$product->image = $req->file('image')->store('products');
$result=$product->save();
 if($result)
 return["data has been saved"];

}
public function display()
{
           
    return product::all();
   // dd($data);
    //return view('list',['data'=>$data]);
}
}
/*    */