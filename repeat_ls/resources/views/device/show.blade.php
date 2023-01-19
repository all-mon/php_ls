@extends('layouts.main')
@section('content')
    <div>
            <div>
                {{$device->id}}. {{$device->name}}
            </div>
            <div>
               System: {{$device->system}}
            </div><div>
               Description: {{$device->description}}
            </div>
            <div>
                <a href="{{route('device.edit',$device->id)}}" class="btn btn-primary">Edit</a>
            </div>

            <div>
                <form action="{{route('device.delete',$device->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </div>
            <div>
                <a href="{{route('device.index')}}">Back</a>
            </div>
    </div>
@endsection
