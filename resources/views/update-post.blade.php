@extends('layouts.app')

@section('title-block') Update post @endsection

@section('content')
<h1>Update post</h1>

<form action="{{ route('post-update-submit', $data->id) }}" method="post">
<!-- Special token for contact forms in Laravel -->
    @csrf   
    <div class="form-group">
        <label for="name">Please, enter your name</label>
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter your name" id="name" class="form-control" >
    </div>
    <div class="form-group">
        <label for="email">Please, enter your e-mail</label>
        <input type="text" name="email" value="{{ $data->email }}" placeholder="Enter your e-mail" id="email" class="form-control" >
    </div>
    <div class="form-group">
        <label for="subject">Please, enter your subject</label>
        <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Enter subject" id="subject" class="form-control" >
    </div>
    <div class="form-group">
        <label for="message">Please, enter your message</label>
        <textarea name="message" id="message" cols="30" rows="5" class="form-control">{{$data->message}}</textarea>
    </div>
    <button type="submit" name="button" class="btn btn-success">Update</button>
</form>

@endsection

@section('aside')
    @parent
    <p style="color:red;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, amet!</p>
@endsection