@extends('layouts.main')
@section('content')
    <div class="row p-3">
        <div class="px-4 text-center border"><h3 class="align-middle"> Добавление нового устройства</h3></div>
    </div>
    <div class="row">
        <div class="d-grid gap-3 col-4 mx-xl-5 border">
        <form action="{{route('device.store')}}" method="post">
            @csrf
            <div class="p-2">
                <input type="text" name="name" id="name" title="Name">
            </div>
            <div class="p-2">
                <input type="text" name="system" id="system" title="System">
            </div>
            <div class="p-2">
                <input type="text" name="description" id="description" title="Description">
            </div>
            <div class="p-2">
                <input type="submit" title="Send">
            </div>

        </form>
        </div>
    </div>
@endsection
