<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
 {
    protected $fillable = [ 'subject', 'message'];
   //
   // public function products() {
   //      return $this->hasMany(Product::class);

  //  }
 }
