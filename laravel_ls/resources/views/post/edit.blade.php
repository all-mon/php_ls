@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content" >{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="Image" value="{{$post->image}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
