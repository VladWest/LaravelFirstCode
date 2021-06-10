@extends('layouts.app')

@section('title-block') {{$data->subject}} @endsection

@section('content')
<h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <h3>{{ $data->name }}</h3>
            <p> {{$data->email}} </p>
            <p> <small> {{$data->created_at}} </small> </p>
            <p> {{$data->message}} </p>
            <a href="{{ route('post-update', $data->id) }}"> <button class="btn btn-primary">Edit</button> </a>
            <a href="{{ route('post-delete', $data->id) }}"> <button class="btn btn-danger">Delete</button> </a>
        </div>
@endsection

@section('aside')

@endsection