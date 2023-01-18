@extends('layouts.main')
@section('content')
    <div>
        <a href="{{route('device.create')}}">Create</a>
    </div>
    <div>
        @foreach($devices as $device)
            <div>
                <a href="{{route('device.show',$device->id)}}">{{$device->id}}. {{$device->name}}</a>
            </div>
        @endforeach
    </div>
@endsection
