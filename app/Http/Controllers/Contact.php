<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
 {
    protected $fillable = [ 'subject', 'message'];

   public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
 }
