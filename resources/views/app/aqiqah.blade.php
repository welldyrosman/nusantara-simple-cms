@extends('layouts.app')

@include('partials.app.sections', [
'title' => getTitle($title),
'description' => getDescription($description),
'image' => getImage()
])
<section class="section">
    @include('partials.app.carousel')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                @include('partials.app.aqiqah')
            </div>
            <div class="col-md-3">
            @include('partials.app.popular')
            </div>
        </div>
    </div>
</section>
