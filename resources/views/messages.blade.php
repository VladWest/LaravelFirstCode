@extends('layouts.app')

@section('title-block') Home @endsection

@section('content')
<h1>Messages</h1>
    @foreach($data as $el)   <!-- Перебор массива данных из базы по эл. -->
        <div class="alert alert-info">
            <h3>{{ $el->subject }}</h3>
            <p> {{$el->email}} </p>
            <p> <small> {{$el->created_at}} </small> </p>
            <a href="{{ route('posts', $el->id) }}"> <button class="btn btn-warning">More</button> </a>
        </div>
    @endforeach
@endsection

@section('aside')

@endsection