@extends('layouts.app')

@section('title-block') Conatct @endsection

@section('content')
<h1>Contact</h1>

<form action="{{ route('contact-form') }}" method="post">
<!-- Special token for contact forms in Laravel -->
    @csrf   
    <div class="form-group">
        <label for="name">Please, enter your name</label>
        <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control" >
    </div>
    <div class="form-group">
        <label for="email">Please, enter your e-mail</label>
        <input type="text" name="email" placeholder="Enter your e-mail" id="email" class="form-control" >
    </div>
    <div class="form-group">
        <label for="subject">Please, enter your name</label>
        <input type="text" name="subject" placeholder="Enter subject" id="subject" class="form-control" >
    </div>
    <div class="form-group">
        <label for="message">Please, enter your name</label>
        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Enter your message here"></textarea>
    </div>
    <button type="submit" name="button" class="btn btn-success">Submit</button>
</form>

@endsection

@section('aside')
    @parent
    <p style="color:red;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error, amet!</p>
@endsection