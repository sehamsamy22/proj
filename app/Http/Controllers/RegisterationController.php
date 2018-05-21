<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterationController extends Controller
{
  public function create()
  {
      return view ('register');
  }
  public function store(Request $request )
  {
      $user=new User;
      $user->name=$request->name;
      $user->password=md5($request->password);
      $user->email=$request->email;
      $user->save();

      //login
      auth()->login($user);
      //redirect
      return redirect('/posts');
  }
}
