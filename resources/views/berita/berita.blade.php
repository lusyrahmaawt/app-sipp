@extends('layouts.layouts')

@section('content')
<section id="berita" class="py-5" style="margin-top: 60px">
    <div class="container py-5" data-aos="flip-up">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita Kegiatan Dinas Koperasi dan UMKM DIY</h2>
        </div>
        <div class="row py-5" data-aos="flip-up">
            @foreach ($artikels as $item)
            <div class="col-lg-4 mb-4">
                <div class="card border-0">
                    <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid" alt="">
                    <div class="konten-berita p-3">
                        <p class="mb-2 text-secondary">{{ $item->created_at }}</p>
                        <h4 class="fw-bold mb-2">{{ $item->judul }}</h4>
                        <p class="text-secondary mb-2">#UmkmNaikKelas</p>
                        <a href="{{ route('berita.detail', ['slug' => $item->slug]) }}" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
