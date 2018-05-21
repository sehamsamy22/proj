<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Http\Requests;
use DB;

class PagesController extends Controller
{
    public function posts()
    {
        $posts=post::all();
        return view ('content.posts',compact('posts'));
    } 
    public function post(Post $post)
    {
     //   $post=DB::table('posts')->find($id);
        return view ('content.post',compact('post'));
    } 
    public function store(Request $request)
     {
    //      $this ->validate($request,[
    //          'title'=>'required',
    //          'bady'=>'required',
    //          'url'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    //      ]);   

        $img_name= time().'.'.$request->url->getClientOriginalExtension();
        $post = new Post;
        $post->title= request('title');
        $post->body= request('body');
        $post->url= $img_name;
        $post->save();
       
       $request->url-> move(public_path('upload'),$img_name); 
       
    //    return back()
    //    ->with('success','images Has been You uploaded successfully.')
    //    ->with('image',$img_name);
       return redirect('/posts');
    } 
    public function category($name)
    {
        $cat=DB::table('categories')->where('name' ,$name)->value ('id');
        $posts=DB::table('posts')->where('category_id' ,$cat)->get();
        return view ('content.category',compact('posts'));
    } 
    public function admin()
    {
        return view ('content.admin');
    } 
         
    
}
