@extends('layouts.app')
@section('content')
<h1>Contact Us</h1>

<form method="POST" action="{{route("contact-form-submit")}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter name">
    </div>

    <div class="form-group">
        <label for="Subject">Subject</label>
        <input type="text" class="form-control" name="subject" aria-describedby="subjectHelp" placeholder="Enter Subject">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection