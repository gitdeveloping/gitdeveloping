@extends('layouts.app.app')

@section('content')
    <div class="container p-2">
        <h2>{{$challenge->title}}</h2>
        <h5>Challenge {{$challenge->id}}</h5>
        <p>{!! $challenge->description !!}</p>

        <div class="card mb-2 text-left">
            <button class="btn btn-outline-primary col-md-2 align-self-end"><span class="fa fa-icon"></span>Test Code</button>
        </div>
        <div id="challenge-sandbox"></div>
    </div>
@endsection
