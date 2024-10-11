@extends('layout.master')

@section('heading', 'Keranjang')

@section('content')
    <div class="product mb-3">
        <div class="card mb-3">
            <div class="row d-flex justify-content-center align-items-center flex-wrap">
                <div class="col-4 col-sm-4">
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-start" alt="Product Image">
                </div>
                <div class="col-8 col-sm-8">
                    <div class="card-body">
                        <h5 class="card-title">Nama Produk</h5>
                        <p class="card-text fw-bold">Rp100.000</p>
                        <p class="card-text"><small class="text-muted">Tersedia Sebanyak : 100</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center">
            <input type="checkbox" class="btn-check" id="choosed-product" autocomplete="off">
            <label class="btn btn-outline-success me-2" for="choosed-product">Pilih</label><br>
            <a href="#" class="btn btn-secondary">Detail</a>
        </div>
    </div>
    <div class="sticky-bottom bg-light border rounded z-0">
        <div class="p-4">
            <p>Total Harga : <span class="fw-bold">Rp100.000</span></p>
            <a href="#" class="btn btn-secondary disabled">Check Out (0)</a>
        </div>
    </div>



@endsection
