@extends('layout.master')

@section('heading', 'Beranda')
@section('content')
    <div class="container">
        @include('home.products.cloth')

        @include('home.products.fabic')
    </div>
@endsection
