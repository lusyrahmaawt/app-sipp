@extends('layouts.sidebar')
@section('content')

<section id="detail" class="py-5" style="margin-top: 100px;"></section>

<div class="container col-xl-9">
    <div class="row mb-3">
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                <li class="breadcrumb-item"><a href="/nibberanda">NIB</a></li>
                <li class="breadcrumb-item"><a href="/halalberanda">Halal</a></li>
                <li class="breadcrumb-item active">PIRT</li>
                <li class="breadcrumb-item"><a href="/cppobberanda">CPPOB</a></li>
            </ol>
        </div>
    </div>
    <div class="text-center">
        <img src="{{ asset('assets/css/icons/oss1.png') }}" class="img-fluid mb-4" alt="PIRT Icon">
    </div>
</div>

<section id="join" class="py-5">
    <div class="container" data-aos="zoom-out">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5>Apa itu PIRT?</h5>
                </div>
                <p>Pangan Industri Rumah Tangga (PIRT) adalah istilah yang digunakan untuk merujuk pada makanan yang diproduksi oleh industri rumah tangga dan telah mendapatkan sertifikat keamanan dari Badan Pengawas Obat dan Makanan (BPOM) atau lembaga serupa di berbagai negara. PIRT mencakup berbagai produk makanan, seperti makanan kemasan, makanan olahan, atau makanan siap saji yang dihasilkan dengan standar keamanan yang ketat.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/css/img/pirt3.jpeg') }}" class="img-fluid rounded shadow" alt="PIRT Image">
            </div>
        </div>
    </div>
</section>

<h3 class="text-center my-4">Bagaimana cara mendapatkan PIRT?</h3>

<div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach(['pirt11', 'pirt12', 'pirt13', 'pirt14', 'pirt15', 'pirt16', 'pirt17', 'pirt18', 'pirt19'] as $key => $image)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                <img src="{{ asset("assets/css/img/{$image}.png") }}" class="d-block w-100 img-fluid" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">Manfaat PIRT</h5>
        <ul class="list-unstyled">
            <li>
                <h6>1. Keamanan Konsumen:</h6>
                <p>Produk PIRT memberikan jaminan keamanan dalam hal kualitas makanan. Ini berarti Anda dapat yakin bahwa makanan yang Anda konsumsi aman untuk dikonsumsi.</p>
            </li>
            <li>
                <h6>2. Kenikmatan dan Kenyamanan:</h6>
                <p>Produk PIRT seringkali lebih praktis dan nyaman digunakan dalam kehidupan sehari-hari. Ini membantu Anda menghemat waktu dan energi dalam mempersiapkan makanan untuk keluarga.</p>
            </li>
            <li>
                <h6>3. Dukungan Industri Rumah Tangga:</h6>
                <p>Dengan memilih produk PIRT, Anda juga mendukung usaha kecil dan industri rumah tangga, yang berkontribusi pada pertumbuhan ekonomi lokal.</p>
            </li>
        </ul>
        <div class="text-center">
            <a href="https://sppirt.pom.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
        </div>
    </div>
</div>

@endsection
