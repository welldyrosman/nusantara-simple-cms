@extends('layouts.app') 

<section class="section">
   
    <div class="container my-5">
        <div class="row">
            <div class="col-md-9">
                @include('partials.app.contentarticle')
                @include('partials.app.relatedarticle')
            </div>
            <div class="col-md-3">
                @include('partials.app.popular')
            </div>
        </div>
    </div>
</section>
