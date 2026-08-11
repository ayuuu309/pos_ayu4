@extends('layouts.app')

@section('title', 'Tentang')

@section('content')
<div class="container py-4">
    @include('layouts.navbar')

    <div class="row g-4">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <div class="bg-primary text-white p-3 rounded-3">
                        <i class="bi bi-shop fs-2"></i>
                    </div>
                    <div>
                        <h3 class="fw-bold text-dark m-0">Tentang AyuMart</h3>
                        <p class="text-muted m-0">Sistem Point of Sale & Kasir Online</p>
                    </div>
                </div>

                <p class="text-secondary leading-relaxed">
                    <strong>AyuMart</strong> adalah aplikasi kasir berbasis web yang dirancang khusus untuk mempermudah operasional toko, pencatatan stok barang, hingga riwayat transaksi penjualan secara otomatis dan terintegrasi.
                </p>

                <hr class="my-3">

                <h6 class="fw-bold text-dark mb-3"><i class="bi bi-stars text-primary me-2"></i>Fitur Unggulan</h6>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="p-2 border rounded-3 bg-light d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span class="small fw-medium">Manajemen User</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-2 border rounded-3 bg-light d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span class="small fw-medium">Stok Produk Auto</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-2 border rounded-3 bg-light d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span class="small fw-medium">Kasir Multi-Payment</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-2 border rounded-3 bg-light d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span class="small fw-medium">Dashboard Realtime</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                <div class="position-relative d-inline-block mx-auto mb-3">
                    <img src="{{ asset('img/profil.jpg') }}" 
                         alt="Foto Saya" 
                         class="rounded-circle img-thumbnail shadow-sm"
                         style="width: 130px; height: 130px; object-fit: cover;"
                         onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Developer&background=0D6EFD&color=fff&size=128';">
                </div>

                <h4 class="fw-bold text-dark mb-1">Ayu</h4>
                <p class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill mx-auto mb-3">
                    Developer & Creator
                </p>

                <p class="text-muted small mb-4">
                    Pengembang di balik sistem POS Ayu. Berkomitmen untuk terus menciptakan aplikasi yang responsif, modern, dan mudah digunakan.
                </p>

                <div class="border-top pt-3 mt-auto">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted small">Ikuti Saya:</span>
        <div class="d-flex gap-2">
            <a href="https://github.com/ayuuu309" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-dark btn-sm rounded-circle d-inline-flex align-items-center justify-content-center" 
               style="width: 36px; height: 36px;"
               title="GitHub">
                <i class="bi bi-github"></i>
            </a>

            <a href="https://linkedin.com/in/username-anda" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-primary btn-sm rounded-circle d-inline-flex align-items-center justify-content-center" 
               style="width: 36px; height: 36px;"
               title="LinkedIn">
                <i class="bi bi-linkedin"></i>
            </a>

            <a href="https://instagram.com/park_cill" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="btn btn-outline-danger btn-sm rounded-circle d-inline-flex align-items-center justify-content-center" 
               style="width: 36px; height: 36px;"
               title="Instagram">
                <i class="bi bi-instagram"></i>
            </a>
        </div>
    </div>
</div>
                
    </div>
</div>
@endsection