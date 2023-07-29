<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{


   public function products($category_slug)
   {
    $category = Category::where('slug', $category_slug)->first();
    if($category){

        $products = $category->products()->get();
        return view('frontend.collections.products.index', compact( 'category'));
    }
    else
    {
        return redirect()->back();
    }
}
public function product($category_slug)
{
    $category = Category::where('slug', $category_slug)->first();
    if($category){

        $products = $category->products()->get();
        return view('frontend.collections.products.agency_index', compact( 'category'));
    }
    else
    {
        return redirect()->back();
    }
}
}
