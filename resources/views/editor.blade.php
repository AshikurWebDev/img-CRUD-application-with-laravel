@extends('layout.main')

@section('title' ,'TinyMCE HTML editor')

@section('content')
    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            My text Area
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <textarea name="mytextarea" id="mytextarea"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection