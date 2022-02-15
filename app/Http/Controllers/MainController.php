<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
     $products = Product::all();
     $product = Product::all();
     return  view('index', compact('products', 'product'));
    }

    public function categories() {
    $categories = Category::get();
    return view('categories', compact('categories'));
    }

    public function category($code) {
    $category = Category::where('code', $code)->first();
//    $products = Product::where('category_id', $category->id)->get();
    // $categories = Category::get();
    // $products = Product::get();
    return view('category', compact('category'));
    }

    public function product($category, $product = null) {
    return view('product', ['product' => $product]);
    }

    public function messagepodrobno($id) {
      // dd($id);
      $product = Product::where('id', $id)->first();
      // dd($product);
        return  view('messagepodrobno', compact('product'));
        // return 'JFJF';
    }
    //Последний вариант
    public function proba() {
        // $contacts = Contact::get()
    return view('proba');
    }


    // public function basket() {
    // return view('basket');
    // }
    // public function basketPlace() {
    // return('order');
  // }
}
