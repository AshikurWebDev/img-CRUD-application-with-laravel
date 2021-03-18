@extends('layout.main')

@section('title', 'lazyLoad')

@section('content')
    <section>
       <div class="container">
            <div class="row">
                @for ($i = 1; $i <= 16; $i++)
                   <div class="col-md-6"> </div>
                @endfor
            </div>
       </div>
    </section>
@endsection