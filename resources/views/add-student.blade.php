@extends('layout.main')


@section('title', 'Add Student')
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
                            @if (Session::has('student_added'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('student_added')}}
                                </div>
                            @endif
                            <form action="/add-student" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="file">Choose Profile Image</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                                    <img src="" id="previewImg" alt="Profile Image" style="max-width: 130px; margin-top: 20px;"/>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (Session::has('student_added'))
        <script>
            toastr.success("{!! Session::get('student_added')!!}");
        </script>
    @endif
@endsection