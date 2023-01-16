<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(Request $request)
    {
        $author = new Author();
        $author -> username = $request->username;
        $author -> password = $request->password;
        $author -> save();
        return redirect('showrecord');
    }
    public function showall()
    {
        $authors=Author::all();
        $posts=Post::all();
        return view('show',['authors'=>$authors],['posts'=>$posts]);
    }
    public function showAuthor($id)
    {
        $author = Post::find($id)->author;
        return $author;
    }

}
