@extends('layout.main')

@section('title', 'Search Product')

@section('content')
    <section style="padding-top: 60px;"> 
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Search Product
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group"><input type="text" class="form-control typeahead" placeholder="search..."></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection