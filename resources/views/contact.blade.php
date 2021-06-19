@extends('layouts.app')
@section('content')
<h1>Contact Us</h1>
{{-- displaying errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Contact Form --}}
<form method="POST" action="{{route("contact-form-submit")}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" aria-describedby="nameHelp" placeholder="Enter name"  required minlength="4">
    </div>

    <div class="form-group">
        <label for="Subject">Subject</label>
        <input type="text" class="form-control" name="subject" aria-describedby="subjectHelp" placeholder="Enter Subject" required minlength="4">
    </div>

    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="3" required minlength="10"></textarea>
    </div>

    <div class="form-group">
        <label for="email1">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
            placeholder="Enter email" required >
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection