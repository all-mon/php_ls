@extends('layouts.main')
@section('content')
    <div>
        <a href="{{route('device.create')}}" class="btn btn-success">Создать</a>
    </div>
    <div>
        <ul class="list-group">
        @foreach($devices as $device)
            <li class="list-group-item">
                <a class="nav-link" href="{{route('device.show',$device->id)}}">{{$device->id}}. {{$device->name}}</a>
            </li>
        @endforeach
        </ul>
    </div>
@endsection
