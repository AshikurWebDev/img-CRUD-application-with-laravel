@extends('layout.main')


@section('title', 'Edit Student')
@section('content')

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add new Student
                        </div>
                        <div class="card-body">
                            @if (Session::has('student_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('student_updated')}}
                                </div>
                            @endif
                            <form action="/update-student" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" id="name" value="{{$student->id}}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                                    <img id="previewImg" src="{{asset('images')}}/{{$student->profileImage}}" alt="Profile Image" style="max-width: 130px; margin-top: 20px;"/>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection