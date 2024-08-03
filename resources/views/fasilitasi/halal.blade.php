@extends('layouts.layouts')
@section('content')

<section id="detail" class="py-5" style="margin-top: 100px;"></section>

<div class="container col-xl-9">
    <div class="row">
        <div class="col-sm-12 mb-3">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/nib">NIB</a></li>
                <li class="breadcrumb-item active">Halal</li>
                <li class="breadcrumb-item"><a href="/pirt">PIRT</a></li>
                <li class="breadcrumb-item"><a href="/cppob">CPPOB</a></li>
            </ol>
        </div>
        <div class="text-center mb-4">
            <img src="{{ asset('assets/css/icons/oss1.png') }}" class="img-fluid" alt="OS Icon">
        </div>
    </div>
</div>

<section id="join" class="py-5">
    <div class="container" data-aos="zoom-out">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5>Apa itu Sertifikat Halal?</h5>
                </div>
                <p>Sertifikat Halal adalah tanda bahwa suatu produk atau layanan telah diproduksi sesuai dengan prinsip-prinsip dan pedoman Islam yang ketat. Ini termasuk pemilihan bahan baku, metode produksi, dan penggunaan bahan tambahan. Produk yang telah memenuhi standar halal akan diberikan label sertifikat halal oleh otoritas yang berwenang atau lembaga sertifikasi.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/css/icons/usy.jpg') }}" class="img-fluid rounded" alt="Sertifikat Halal Image">
            </div>
        </div>
    </div>
</section>

<h3 class="text-center my-4">Bagaimana cara mendapatkan Sertifikat Halal?</h3>

<div class="card mb-4">
    <img src="{{ asset('assets/css/img/sertifikat-halal.jpeg') }}" class="card-img-top" alt="Sertifikat Halal">
    <div class="card-body">
        <h5 class="card-title">Pentingnya Memilih Produk dengan Sertifikat Halal yang Sah</h5>
        <ul class="list-unstyled">
            <li>
                <h6>1. Kepentingan Keagamaan:</h6>
                <p>Bagi umat Islam, memilih produk dengan sertifikat halal adalah kewajiban agama. Hal ini memastikan bahwa mereka menjalankan ajaran Islam dengan benar dalam aspek konsumsi pangan.</p>
            </li>
            <li>
                <h6>2. Keamanan Pangan:</h6>
                <p>Produk dengan sertifikat halal seringkali melewati pengujian dan pemantauan yang ketat. Ini berarti bahwa produk tersebut lebih cenderung aman dan lebih sedikit terkontaminasi dengan bahan yang mungkin dianggap haram.</p>
            </li>
            <li>
                <h6>3. Pilihan yang Luas:</h6>
                <p>Produk dengan sertifikat halal telah menjadi lebih umum, dan banyak produsen terkemuka mengupayakan untuk mendapatkan sertifikasi halal. Ini berarti konsumen memiliki pilihan yang lebih luas dalam memilih produk yang sesuai dengan kepercayaan mereka.</p>
            </li>
            <li>
                <h6>4. Membangun Kepercayaan:</h6>
                <p>Memilih produk dengan sertifikat halal yang sah membantu membangun kepercayaan dalam kualitas dan keamanan produk tersebut. Hal ini juga berarti bahwa produsen berkomitmen untuk menjaga integritas produk mereka.</p>
            </li>
        </ul>
        <div class="text-center mt-4">
            <a href="https://ptsp.halal.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
        </div>
    </div>
</div>

@endsection
