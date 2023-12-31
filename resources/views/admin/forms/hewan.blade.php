@extends('layouts.admin')

@section('content')
    @include('partials.admin.form.init')
    @include('partials.admin.form.dropdown', ['attribute' => 'category'])
    @foreach (['name','price','weight_start','weight_end'] as $a)
        @include('partials.admin.form.text', ['attribute' => $a])
    @endforeach
    @include('partials.admin.form.file',['attribute'=>'image'])
    @include('partials.admin.form.submit')
@endsection
