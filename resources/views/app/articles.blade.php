@extends('layouts.app')ß
@section('content')
    <section class="section w-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-8"></div>
                            <div class="col-4"></div>
                        </div>
                        @include('partials.app.articlelist')
                    </div>
                </div>
                <div class="col-md-3">
                    @include('partials.app.popular')
                </div>
            </div>
        </div>
    </section>
@endsection
