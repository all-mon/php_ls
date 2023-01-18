@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('device.store')}}" method="post">
            @csrf
            <input type="text" name="name" id="name">
            <input type="text" name="system" id="system">
            <input type="text" name="description" id="description">
            <input type="submit" title="Send">
        </form>
    </div>
@endsection
