@extends('layout.master')

@section('heading', 'Keranjang')

@section('content')
    <div class="product mb-3">
        @include('cart.cart_product')
    <div class="sticky-bottom bg-light border rounded z-0">
        <div class="p-4">
            <p>Total Harga : <span class="fw-bold">Rp100.000</span></p>
            <a href="#" class="btn btn-secondary disabled">Check Out (0)</a>
        </div>
    </div>



@endsection
