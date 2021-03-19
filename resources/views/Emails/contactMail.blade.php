@extends('../layout.main')
@section('title', 'Contact Form')
@section('content')
    <h1>Contact Message</h1>
    <p>Name: {{$details['name']}}</p>
    <p>Email: {{$details['email']}}</p>
    <p>Phone: {{$details['phone']}}</p>
    <p>Message: {{$details['msg']}}</p>
@endsection