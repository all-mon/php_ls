<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request ,Post $post)
   {
       $data = $request->validated();
       $this->service->update($post,$data);
       //return redirect()->route('post.show', $post->id);
       return new PostResource($post);
   }

}
