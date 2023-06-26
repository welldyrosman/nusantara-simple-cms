@extends('layouts.app')

@include('partials.app.sections', [
    'title' => getTitle($title),
    'description' => getDescription($description),
    'image' => getImage(),
])

<section class="section">
    @include('partials.app.carousel')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="mt-5">
                    <h2 class="f-sbold text-center mb-3">{{ $title }}</h2>
                    <p class="">{!! $description !!}</p>
                </div>
            </div>
            <div class="col-md-3">
            @include('partials.app.popular')
            </div>
        </div>
    </div>
</section>
