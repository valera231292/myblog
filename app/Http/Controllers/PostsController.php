<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostsController extends Controller
{

	public function index()
	               {
    
    $posts = Post::all();
    return view('index', compact('posts'));

                   }


     public  function show($id) 
                   {


$posts = Post::find($id);
 return view('posts.show', compact('posts')); 

                    }

 public function create(){

  return view("posts.create");

 }


}
