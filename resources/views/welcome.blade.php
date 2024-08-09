@extends('layouts.layouts')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <section id="hero" class="px-0">
        <div class="container text-center text-white" data-aos="fade-up">
            <div class="hero-title">
                <div class="hero-text" style="padding-top: 10rem"> Selamat Datang <br> Di Sistem Informasi Penjadwalan
                    Penyuluhan CPPOB <h4>Dinas Koperasi dan UKM Daerah Istimewa Yogyakarta</h4>
                </div>
            </div>
    </section>
    <section id="program" style="margin-top: -30px">
        <div class="container col-xl-9">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="nib">Pembuatan NIB</a>
                                    <img src="{{ asset('assets/css/icons/nib.png') }}" height="55" width="55">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="halal">Sertifikasi Halal</a>
                                    <img src="{{ asset('assets/css/icons/halal.png') }}" height="55" width="55">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="pirt">Fasilitasi P-IRT</a>
                                    <img src="{{ asset('assets/css/icons/pirt.png') }}" height="55" width="55">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3" data-aos="zoom-left">
                    <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="cppob">Fasilitasi MD CPPOB</a>
                                    <img src="{{ asset('assets/css/icons/bpom.png') }}" height="55" width="55">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- berita --}}
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
                                <p class="mb-2 text-secondary">{{ $item->create_at }}</p>
                                <h4 class="fw-bold mb-2">{{ $item->judul }}</h4>
                                <p class="text-secondary mb-2">#UmkmNaikKelas</p>
                                <a href="{{ route('berita.detail', ['slug' => $item->slug]) }}"
                                    class="text-decoration-none text-danger">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="footer-berita text-center py-3">
                <a href="/berita" class="btn btn-outline-danger border-2">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- berita --}}
    <section id="join" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="text-center">
                        <h2 class="fw-bold text-danger mb-4">Daftar CPPOB Secara Mandiri</h2>
                        <p class="lead text-secondary"> Pendaftaran secara mandiri memungkinkan pengajuan MD CPPOB tanpa
                            menggunakan fasilitas dari Dinas Koperasi dan UKM DIY. </p>
                        <p class="lead text-secondary mb-4"> Kamu menggunakan biaya pribadi untuk pengajuan CPPOB dan
                            menyediakan dokumen sesuai persyaratan BPOM. </p>
                        <a href="https://e-sertifikasi.pom.go.id/" class="btn btn-danger btn-lg">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/css/img/CPPOB.png') }}" class="img-fluid rounded shadow-lg" alt="CPPOB">
                </div>
            </div>
        </div>
    </section>
    {{-- penjadwalan --}}
    <section id="penjadwalan" class="py-5" style="margin-top: 100px; background-color: #f8f9fa; padding-top: 80px;">
        <div class="container" data-aos="flip-up">
            <div class="header-berita text-center mb-5">
                <h3 class="fw-bold">Data Jadwal Pendaftaran</h3>
                <p class="text-secondary">Informasi lengkap mengenai jadwal kegiatan yang akan datang</p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <thead class="thead-dark">
                                <tr class="text-center" style="background-color: #343a40; color: #fff;">
                                    <th scope="col">No</th>
                                    <th scope="col">Mulai Kegiatan</th>
                                    <th scope="col">Berakhir Kegiatan</th>
                                    <th scope="col">Waktu Kegiatan</th>
                                    <th scope="col">Tempat Kegiatan</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            {{-- @foreach ($jadwals as $item) --}}
                            <tbody>
                                <tr class="text-center">
                                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}} <th scope="row">1</th>
                                    <td>{{ $jadwals['nama_kegiatan'] }}</td>
                                    <td>{{ $jadwals['tanggal_kegiatan'] }}</td>
                                    <td>{{ $jadwals['waktu_kegiatan'] }}</td>
                                    <td>{{ $jadwals['tempat_kegiatan'] }}</td>
                                    <td>{{ $jadwals['keterangan'] }}</td>
                                </tr>
                            </tbody>
                            {{-- @endforeach --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- penjadwalan --}}
    <style>
        /* Mengatur tinggi gambar agar sama rata */
        .image-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            height: 300px;
            /* Anda dapat menyesuaikan tinggi sesuai kebutuhan */
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Menyesuaikan gambar agar sesuai dengan container */
        }
    </style>
    <section id="poto" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Foto Kegiatan</h2>
            </div>
            <div class="row py-5" data-aos="zoom-in-up">
                @foreach ($potos as $poto)
                    <div class="col-lg-4 h-100" data-aos="flip-up">
                        <a href="{{ asset('storage/poto/' . $poto->poto) }}" data-lightbox="roadtrip">
                            <div class="image-wrapper">
                                <img src="{{ asset('storage/poto/' . $poto->poto) }}" class="img-fluid">
                            </div>
                        </a>
                        <h6 class="text-center mb-2">{{ $poto->kegiatan }}</h6>
                    </div>
                @endforeach
                <div class="footer-berita text-center">
                    <a href="{{ route('page.photo') }}" class="btn btn-outline-danger border-2"> Foto Lainnya</a>
                </div>
            </div>
        </div>
    </section>
    {{-- video --}}
    <section id="video_youtube" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Kegiatan CPPOB </h2>
            </div>
            <div class="row my-5" data-aos="zoom-in">
                @foreach ($videos as $video)
                    <div class="col-lg-4">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/{{ $video->youtube_code }}"
                                title="{{ $video->judul }}"></iframe>
                        </div>
                    </div>
                @endforeach
                <div class="footer-berita text-center my-4">
                    <a href="{{ route('page.video') }}" class="btn btn-outline-danger border-2">Video Lainnya</a>
                </div>
            </div>
    </section>
    <section id="konsultasi" class="py-5">
        <div class="container">
            <div class="row my-5 justify-content-evenly">
                <div class="col-lg-3 text-center">
                    <a href="" class="text-decoration-none">
                        <img src="{{ asset('assets/img/messages-1.jpg') }}" class="img-thumbnail"
                            style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%;">
                        <div class="mt-3">
                            <i class="h2 text-success bi bi-whatsapp"></i>
                            <h4 class="mt-2 text-dark">
                                Lussy Rahmawati
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="" class="text-decoration-none">
                        <img src="{{ asset('assets/css/img/konsultan.png') }}" class="img-thumbnail"
                            style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%;">
                        <div class="mt-3">
                            <i class="h2 text-success bi bi-whatsapp"></i>
                            <h4 class="mt-2 text-dark">
                                Lussy Rahmawati
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 text-center">
                    <a href="" class="text-decoration-none">
                        <img src="{{ asset('assets/img/messages-3.jpg') }}" class="img-thumbnail"
                            style="width: 250px; height: 250px; object-fit: cover; border-radius: 50%;">
                        <div class="mt-3">
                            <a href="https://api.whatsapp.com/send?phone=+6282121044424&text=Halo%20saya%20ingin%20konsultasi">
                            <i class="h2 text-success bi bi-whatsapp"></i>
                            <h4 class="mt-2 text-dark">
                                Lussy Rahmawati
                            </h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    </section>
@endsection


@section('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a.nav-link');

    for (const link of links) {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const offset = 80; // Sesuaikan nilai offset ini sesuai dengan tinggi navbar atau header
                const elementPosition = targetElement.offsetTop - offset;

                window.scrollTo({
                    top: elementPosition,
                    behavior: 'smooth'
                });
            }
        });
    }
});

    </script>
@endsection
