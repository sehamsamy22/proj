<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view ('login');
    }

    public function store( )
    {
      if( auth()->attempt(request(['email','password'])))
  
       {
        return redirect('/posts');
        //   
       }
      
       return back()->withErrors([
              'message'=> 'email  or  password  is incorrect ',
         ]); 
       
     
    }
    public function destory()
    {
        auth()->logout();
        return  redirect('/posts');
    }
}
