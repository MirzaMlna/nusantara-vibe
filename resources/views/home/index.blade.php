@extends('layout.master')

@section('heading', 'Beranda')
@section('content')
    <div class="container">
        @include('products.cloth')

        @include('products.fabic')
    </div>
@endsection
