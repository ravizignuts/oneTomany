<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost(Request $request)
    {
        $author =Author::find($request->id);
        $post = new Post();
        $post->title = $request->title;
        $post->cat = $request->cat;
        $author->post()->save($post);
        return redirect('showrecord');
    }
    public function showPost($id)
    {
        //show post of particular author which id given
        $post = Author::find($id)->post;
        return view('authorpost',['posts'=>$post]);
    }
}
