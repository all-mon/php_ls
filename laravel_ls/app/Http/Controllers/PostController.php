<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where('is_published',0)->first();
        dump($post->title);
        dd('end');
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblabla.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblabla.jpg',
                'likes' => 50,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArr as $item)
        {
            Post::create($item);
        }
        dd('created');
    }

    public function update()
    {
        $post = Post::find(6);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_published' => 0,
        ]);
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('deleted');
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
