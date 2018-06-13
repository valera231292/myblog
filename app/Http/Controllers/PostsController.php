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
public function store()
    {
    
    $post = new Post;
    

    

    $post->title = request('title');
    $post->intro = request('alias');
    $post->body = request('body');
    $post->alias = request('alias');
   

   return redirect('/');

    $post->save();
    


}
public function edit(Post $post)
    {
        return view("posts.edit", compact('post'));
    }

    public function update(Post $post)
    {
//        dd(request()->all());
        $this->validate(request(), [
            'title' => 'required|min:2',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required',
        ]);
        $post->update(request(['title', 'alias', 'intro', 'body']));
        return redirect('/');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/');
    }
}






