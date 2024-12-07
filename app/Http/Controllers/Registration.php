<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
  public function index(){
    return view('form');
  }
  public function register(Request $re){
    $re->validate([
      'name'=>'required',
      'email'=>'required|email',
      'password'=>'required',
      'confirm_password'=>'required|same:password'
    ]);
    echo "<pre>";
  print_r($re->all());
  }
}
