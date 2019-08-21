<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Category;
use App\Product;

class ProductsController extends Controller
{
    public function addProduct(Request $request){
       $categories = Category::where(['parent_id'=>0])->get();
       $categories_dropdown = "<option selected disabled>select</option>";

       foreach ($categories as $cat) {
       	$categories_dropdown .= "<option value = '".$cat->id."'>".$cat->name."</option>";
       }


    	return view('admin.products.add_products')->with(compact('categories_dropdown'));
    }
}
