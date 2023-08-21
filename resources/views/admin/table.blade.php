@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                        @if (isset($link))
                            <a class="btn btn primary" href="{{ $link }}">
                                {{ __(Route::getCurrentRoute()->getName()) }}  <i class="fas fa-plus-square"></i>
                            </a>
                        @endif
                </div>
                <div class="card-body" style="padding-bottom: 2rem;">{!! $dataTable->table() !!}</div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {!! $dataTable->scripts() !!}
@endsection
