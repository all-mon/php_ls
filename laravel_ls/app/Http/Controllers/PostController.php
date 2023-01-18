<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',

        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',

        ]);
        $post->update($data);
        return redirect()->route('post.show',$post->id);
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    //firstOrCreate
    //updateOrCreate
    public function firstOrCreate()
    {

        $anotherPost =[
                'title' => 'some post',
                'content' => 'some content',
                'image' => 'some imageblabla.jpg',
                'likes' => 5000,
                'is_published' => 1,
        ];
        $post = Post::firstOrCreate([
            'title' => 'some title phpstorm'
        ],[
            'title' => 'some title phpstorm',
            'content' => 'some content',
            'image' => 'some imageblabla.jpg',
            'likes' => 5000,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('work');
    }

    public function updateOrCreate()
    {
        $anotherPost =[
            'title' => 'updateorcreate some post',
            'content' => 'updateorcreate some content',
            'image' => 'updateorcreate some imageblabla.jpg',
            'likes' => 500,
            'is_published' => 0,
        ];
        $post = Post::updateOrCreate([
            'title' => 'some NEW title phpstorm'
        ],[
            'title' => 'some NEW title phpstorm',
            'content' => 'NEW some content',
            'image' => 'NEW some imageblabla.jpg',
            'likes' => 500,
            'is_published' => 0,
        ]);
        dump($post->content);
        dd('stop');
    }
}
