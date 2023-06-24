@extends('layouts.app')

@include('partials.app.sections', [
'title' => getTitle($title),
'description' => getDescription($description),
'image' => getImage()
])

@section('content')

<section class="section w-100">
    @include('partials.app.contentarticle')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @include('partials.app.hero')
                @include('partials.app.articles')
            </div>
            <div class="col-md-3">
            @include('partials.app.popular')
            </div>
        </div>
    </div>
</section>
@endsection
