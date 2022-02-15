<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use App\Contact;
use App\Product;
use Illuminate\Http\Request;
//use App\Http\Controllers\Contact;
// use App\Http\Controllers\DB;

      class ContactController extends Controller  {

      public function allData($id) {
    //   $id = 4;
    //  dd($id);
      //  $contact = DB::table('contacts')->get();
       $product = Product::where('id',$id)->first();
      // dump($product->id);
    //      $product = Product::first();
    //     $product = Product::get();
    //    dump($product);
  //        return view('messages', compact('cities'));
  //       dd($product->contacts);
         $contacts = $product->contacts;
         // dd($product->id);
         // dump($contacts);
        return view('messages', compact('contacts', 'product'));


         // $contact = $product->contact;
               // dd($cities);
                 // dump($country->streets);
                // return view('countries', compact('cities'));



      //   $contacts = new Contact;
      //   $contacts->all();
      // // dump($contacts);
      //   return view('messages', ['data' => Contact::all()]);
      }

      public function addCommentForm(Request $request) {
        $contact = new Contact;
        // $contact->name = $request->input('name');
        // $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->product_id = $request->input('product_id');

        $contact->save();
        // $product = Product::first();
        // return view('addform', compact('product'));
        return view('addcomment');
      }

        public function addForm($id) {
      //     dd($id);
        $product = Product::where('id',$id)->first();
      //  dump($products);
        return view('addform', compact('product'));
        // dd($products);
      }
 // $product = Product::where('id',$id)->first();
        // public function idProduct(Request $reqprodect);
        // $product = new Product;


  }
