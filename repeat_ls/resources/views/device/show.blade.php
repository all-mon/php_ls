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
    </div>
@endsection
