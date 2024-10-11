@extends('layout.master')

@section('heading', 'Beranda')
@section('content')
    <div>
        <h3 class=" fw-bold">Baju Batik</h3>
        <div class="app-line"></div>
        <div class="card mt-3" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image" />
            <div class="card-body">
                <h5 class="card-title fw-light text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Quidem, nam?</h5>
                <p class="card-text fw-bold">Rp100.000</p>
                <a href="#" class="btn btn-success">Beli</a>
                <a href="#" class="btn btn-secondary">Detail</a>
                <a href="#" class="btn btn-dark"><i class="bi bi-cart-plus-fill"></i></a>
            </div>
        </div>

    </div>
    <div class="my-5">
        <h3 class=" fw-bold">Kain Batik</h3>
        <div class="app-line"></div>
        <div class="card mt-3" style="width: 18rem;">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Product Image" />
            <div class="card-body">
                <h5 class="card-title fw-light text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Quidem, nam?</h5>
                <p class="card-text fw-bold">Rp100.000 <span class="fw-light">/ meter</span></p>
                <a href="#" class="btn btn-success">Beli</a>
                <a href="#" class="btn btn-secondary">Detail</a>
                <a href="#" class="btn btn-dark"><i class="bi bi-cart-plus-fill"></i></a>
            </div>
        </div>
    </div>

@endsection
