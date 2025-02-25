<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $PostsFromDB = Post::all();

        return view('posts.index',["posts"=>$PostsFromDB]);
    }

    public function show(Post $post){
        // $singlepost = post::find($id);
        return view('posts.post',['post' => $post]);
    }

    public function create(){
        
        return view('posts.create');
    }

    public function store(){

        $data = request()->all();
        
        $posted_by = request()->posted_by;
        $title = request()->title;
        $paragraph = request()->paragraph;
        $id = request()->id;

        $post = new Post;
        $post->title = $title;
        $post->paragraph = $paragraph;
        $post->posted_by =$posted_by;

        $post->save();
        return to_route('posts.index');
    }

    public function edit(Post $post){
  
        return view('posts.edit',['post'=> $post]);
    }

    public function update($id){

        $singlepostfromdb = Post::find($id);
        
        $posted_by = request()->posted_by;
        $title = request()->title;
        $paragraph = request()->paragraph;
        $id = request()->id;

        $singlepostfromdb->update([
            'title' => $title,
            'paragraph' => $paragraph, 
            'posted_by' => $posted_by 
        ]);
        

        return to_route('posts.show',['post' => $singlepostfromdb]);

    }

    public function destroy($id){

        $post = post::find($id);

        $post->delete();

        return to_route('posts.index');

    }
}



