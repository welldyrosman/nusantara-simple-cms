@extends('layouts.app')
@section('content')
    <section class="section w-100">
        <div class="container pt-5">
            <div class="row mt-5">
                <div class="col-md-9">
                    <div class="row mt-5">
                        <div class="col-8">
                            <div class="imagecrop">
                                <img src="{{ $articles[0]->image ? asset($articles[0]->image) : 'https://picsum.photos/600/300' }}" alt="Gambar Kiri" class="img" style="object-fit: contain;"/>
                                <div class="gradient-overlay"></div>
                                <div class="overlay-text"><a href="{{ $articles[2]->link }}">{{$articles[0]->title}}</a></div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="imagecrop kecil mb-3">
                                <img src="{{ $articles[1]->image ? asset($articles[1]->image) : 'https://picsum.photos/600/300' }}" alt="Gambar Kiri" class="img" />

                                <div class="gradient-overlay"></div>
                                <div class="overlay-text">  <a href="{{ $articles[2]->link }}">{{$articles[1]->title}}</a></div>
                            </div>
                            <div class="imagecrop kecil">
                                <img src="{{ $articles[2]->image ? asset($articles[2]->image) : 'https://picsum.photos/600/300' }}" alt="Gambar Kiri" class="img" />

                                <div class="gradient-overlay"></div>
                                <div class="overlay-text"><a href="{{ $articles[2]->link }}">{{$articles[2]->title}}</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        
                        @include('partials.app.articlelist')
                        @include('partials.app.relatedarticle')
                    </div>
                </div>
                <div class="col-md-3">
                    @include('partials.app.popular')
                </div>
            </div>
        </div>
    </section>
@endsection
