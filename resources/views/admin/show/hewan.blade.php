@extends('layouts.admin')

@section('content')
    @include('partials.admin.show.init')
    @include('partials.admin.show.dropdown', ['attribute' => 'category'])
    @foreach (['name','price','weight_start','weight_end'] as $a)
        @include('partials.admin.show.text', ['attribute' => $a])
    @endforeach
    @include('partials.admin.show.file',['attribute'=>'image'])
@endsection
