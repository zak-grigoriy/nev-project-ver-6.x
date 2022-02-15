<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;


class UserController extends Controller {

public  function allData() {
  $user = new User;
  dump($user ->all());
    }


}
