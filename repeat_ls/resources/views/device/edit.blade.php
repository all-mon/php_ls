@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('device.update',$device->id)}}" method="post">
            @csrf
            @method('patch')
            <input type="text" name="name" id="name" value="{{$device->name}}">
            <input type="text" name="system" id="system" value="{{$device->system}}">
            <input type="text" name="description" id="description" value="{{$device->description}}">
            <input type="submit" title="Send">
        </form>
    </div>
@endsection
