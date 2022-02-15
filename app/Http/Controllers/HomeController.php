<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
  //   public function index() {
  //
  //   //  return view('index');
  //     // return view('categories.index');
  // //    return redirect();
  // //   return redirect()->route('auth.orders.index');
  //   return view('auth.orders.index');

     public function index() {

       // $products = DB::table('products')->where('user_id', $id)->first();

  //    $user_id =  DB::table('users')->where('name', 'John')->first();
      // $user_id = DB::table('products')->pluck('user_id');

    //   $user_id = DB::table('products')->where('user_id', $id)->value('user_id');
       //       $id = DB::table('products')->pluck('title');
// dd($products);
//  $product = Product::where('user_id', $id)->first();

      $products = Product::get();
      $contacts = Contact::get();
//     dd($contact);
//  return view('auth.index', ['id => $id']);
    //    return  view('auth.index')->with('id', '$id');
        return  view('auth.index', compact('products', 'contacts' ));
    //    return  view('auth.index')->with('id', '$id');
    //    return view('index.blade.php', ['id => $id']);
         // return  view('auth.index', compact('user_id'));
       }
}
