@extends('layout.main')


@section('title', 'All Students')
@section('content')

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-around">
                            <h2>Add new Student</h2>
                            <a href="/add-student" class="btn btn-info">Add student</a> 
                        </div>
                        <div class="card-body">
                            @if (Session::has('student_deleted'))
                                <div class="alert alert-success">
                                    {{Session::get('student_deleted')}}
                                </div>
                            @endif
                           <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Profile Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $st)
                                        <tr>
                                            <td>{{$st->name}}</td>
                                            <td><img src="{{asset('images')}}/{{$st->profileImage}}" style="max-width:60px; " alt=""></td>
                                            <td>
                                                <a href="/edit-student/{{$st->id}}" class="btn btn-info">Edit</a>
                                                <a href="/deleted-student/{{$st->id}}" class="btn btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection