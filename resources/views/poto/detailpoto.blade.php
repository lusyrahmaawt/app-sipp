@extends('layouts.layouts')

@section('content')
<section id="detail-berita" class="py-5" style="margin-top: 60px">
    <div class="container py-5" data-aos="fade-up">
        <div class="header-berita text-center mb-4">
            <h2 class="fw-bold">Detail Foto</h2>
        </div>
        <div class="row">
            @foreach ($potos as $poto)
                <div class="col-md-4 mb-4">
                    <div class="poto-wrapper">
                        <img src="{{ asset('storage/poto/' . $poto->poto) }}" class="poto-image" alt="{{ $poto->kegiatan }}">
                    </div>
                    <h5 class="text-secondary mt-2">{{ $poto->kegiatan }}</h5>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali ke Halaman Utama</a>
        </div>
    </div>
</section>
@endsection
