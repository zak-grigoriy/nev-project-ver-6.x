<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotegory extends Model
{
  public function categories() {
  return $this->belongsTo(category::class);
}
