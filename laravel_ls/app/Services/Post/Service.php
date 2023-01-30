<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{

    public function store($data)
    {

        if(array_key_exists('tags',$data)){
            $tags = $data['tags'];
            unset($data['tags']);
            $post = Post::create($data);
            $post->tags()->attach($tags);
        }else{
            Post::create($data);
        }
    }

    public function update($post,$data)
    {
        //dd($post,$data);
        if (array_key_exists('tags',$data)){
            $tags = $data['tags'];
            unset($data['tags']);
            $post->update($data);
            $post->tags()->sync($tags);
        }else{
            $post->update($data);
        }


    }
}
