<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->paginate(6),
        ]);
    }



    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }


    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }


    public function store(PostRequest $request){
        // validasi
        // assigment
        $attr = $request->all();
        $attr['slug']= \Str::slug(request('title'));
        Post:: create($attr);
        //create new post
        // return redirect('posts');

        session()->flash('success','Data Berhasil Di Tambahkan!');
        return back();
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(PostRequest $request, Post $post)
    {
       $attr = $request->all();
        $post->update($attr);
        session()->flash('success','Data Berhasil Di Edit!');
        return redirect('posts');
 }

    public function validateRequest(){
    return request()->validate([
        'title' => 'required|min:3',
        'body' => 'required',
    ]);
 }

}