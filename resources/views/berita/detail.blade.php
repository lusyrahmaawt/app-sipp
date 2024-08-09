@extends('layouts.layouts')

@section('content')
<section id="detail-berita" class="py-5" style="margin-top: 60px">
    <div class="container py-5" data-aos="fade-up">
        <div class="header-berita text-center mb-4">
            <h2 class="fw-bold">{{ $artikel->judul }}</h2>
            <p class="text-secondary">{{ $artikel->created_at->format('d M Y') }}</p>
        </div>
        <div class="row">
            <!-- Gambar di sebelah kiri -->
            <div class="col-md-4 mb-3">
                <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid rounded" style="max-width: 100%; height: auto;" alt="{{ $artikel->judul }}">
            </div>
            <!-- Teks di sebelah kanan -->
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        {!! nl2br(e(strip_tags($artikel->desc))) !!} <!-- Menghapus HTML tags dan menjaga paragraf -->
                        <div class="text-end mt-3">
                            <span class="badge bg-secondary">#UmkmNaikKelas</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>
</section>
@endsection
