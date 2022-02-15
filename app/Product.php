<?php

namespace App;

use App\Contact;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['code', 'name', 'category_id', 'description','image','user_id'];
  //
  // public function products() {
  //
  //     return $this->hasMany(Product::class);

      public function category() {
          return $this->belongsTo(Category::class);
      }

      public function contacts() {
          return $this->hasMany(Contact::class);
      }


}
