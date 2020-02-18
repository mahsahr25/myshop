<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kala;

class CategoryController extends Controller
{
    //
    public function index(){
$product=kala::all();
// dd($product);
    return view('category.category')->with('product',$product);

    }

    public function category_product(){
        return view('category.brand_category');

        }

    public function brand_category(){
        return view('category.brand_category');

        }

    public function price_category(){
        return view('category.brand_category');

        }
}
