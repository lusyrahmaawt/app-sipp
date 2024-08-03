@extends('layouts.sidebar')
@section('content')
<section id="hero" class="px-0">
 <div class="container text-center text-white" data-aos="fade-up">
   <div class="hero-tittle">
   <div class="hero-text"><h1>Selamat datang, {{ Auth::user()->name }}</h1></div>
    <h1><p>Di Sistem Informasi Penjadwalan Penyuluhan CPPOB</p></h1>
    <h2> Dinas Koperasi dan UKM DIY</h2>
   </div>
</section>

<section id="program" style="margin-top: -30px">
 <div class="container col-xl-9">
   <div class="row">
     <div class="col-lg-3 col md-6 col"data-aos="zoom-left">
       <div class="bg-white rounded-3 shadow p-3 d-flex align-items-center">
         <div class="d-flex">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link active" href="nibberanda">Pembuatan NIB</a>
         <img src="{{asset('assets/css/icons/nib.png')}}" height="55" width="55" alt="">
       </div>
     </div>
   </div>
 </li>
</ul>
     <div class="col-lg-3 col md-6 col" data-aos="zoom-left">
       <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex align-items-center">
         <div class="d-flex">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" href="halalberanda">Sertifikasi Halal</a>
         <img src="{{asset('assets/css/icons/halal.png')}}" height="55" width="55" alt="">
       </div>
     </div>
     </div>
   </li>
 </ul>
     <div class="col-lg-3 col md-6 col" data-aos="zoom-left">
       <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex align-items-center">
         <div class="d-flex">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" href="pirtberanda">Fasilitasi P-IRT</a>
         <img src="{{asset('assets/css/icons/pirt.png')}}" height="55" width="55" alt="">
       </div>
     </div>
     </div>
     </li>
     </ul>
     <div class="col-lg-3 col md-6 col" data-aos="zoom-left">
       <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex align-items-center">
         <div class="d-flex">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active" href="cppobberanda">Fasilitasi MD CPPOB</a>
         <img src="{{asset('assets/css/icons/bpom.png')}}" height="55" width="55" alt="">
       </div>
     </div>
     </div>
     </li>
     </ul>
</section>

{{-- jadwal --}}
<section id="jadwal" class="py-5" style="margin-top: 100px; background-color: #f8f9fa;">
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
                        <tbody>
                            {{-- @foreach ($jadwals as $item) --}}
                                <tr class="text-center">
                                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                    <th scope="row">1</th>
                                    <td>{{ $jadwals['nama_kegiatan'] }}</td>
                                    <td>{{ $jadwals['tanggal_kegiatan'] }}</td>
                                    <td>{{ $jadwals['waktu_kegiatan'] }}</td>
                                    <td>{{ $jadwals['tempat_kegiatan'] }}</td>
                                    <td>{{ $jadwals['keterangan'] }}</td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
                {{-- <div class="text-center mt-4">
                    @if (isset($registrationStatus[$item->id]) && $registrationStatus[$item->id])
                        <p class="text-success">Anda sudah daftar</p>
                        <button class="btn btn-primary" id="tomboldaftar" disabled>Daftar Fasilitasi CPPOB</button>
                    @else
                        <form action="{{ route('pendaftaran', ['id' => $item->id]) }}" method="GET">
                            <button type="submit" class="btn btn-primary" id="tomboldaftar">Daftar Fasilitasi CPPOB</button>
                        </form>
                    @endif
                </div> --}}
                <div class="text-center mt-4">
                    @if ($status)
                        <p class="text-success">Anda sudah daftar</p>
                        <button class="btn btn-primary" id="tomboldaftar" disabled>Daftar Fasilitasi CPPOB</button>
                    @else
                        <form action="{{ route('pendaftaran', ['id' => $jadwals->id]) }}" method="GET">
                            <button type="submit" class="btn btn-primary" id="tomboldaftar">Daftar Fasilitasi CPPOB</button>
                        </form>
                    @endif
                </div>
                
                {{-- <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        @if (isset($registrationStatus[$item->id]) && $registrationStatus[$item->id])
                            document.getElementById('tomboldaftar').setAttribute('disabled', 'disabled');
                        @endif
                    });
                </script> --}}
                   
                
                
                {{-- <div class="text-center mt-4">
                    @if (isset($registrationStatus[$item->id]) && $registrationStatus[$item->id])
                    <p class="text-success">Anda sudah daftar</p>
                @else
                    <a href="{{ route('pendaftaran', ['id' => $item->id]) }}" class="btn btn-primary" id="tomboldaftar">Daftar Fasilitasi CPPOB</a>
                    @endif
                </div> --}}
            </div>
        </div>
    </div>
</section>
{{-- jadwal --}}


{{-- video --}}
<section id="umku" style="margin-top: 100px;" class="py-5 bg-light">
    <div class="container py-5" data-aos="fade-up">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <h1 class="fw-bold mb-3">Apa itu PB-UMKU?</h1>
                <p class="text-secondary">Perizinan Berusaha Untuk Menunjang Kegiatan Usaha (PB UMKU) adalah perizinan yang diperlukan bagi kegiatan usaha dan/atau produk pada saat pelaksanaan tahap operasional dan/atau komersial.</p>
                <p class="text-secondary">Jenis PB UMKU sangat bervariasi, antara lain dalam bentuk Izin, Persetujuan, Penetapan, Pengesahan, Penunjukan, Registrasi, Rekomendasi, Sertifikat, Sertifikasi, Konsultasi, dan Surat Keterangan.</p>
                <p class="text-secondary">PB UMKU tidak termasuk izin yang sifatnya transaksional (berlaku hanya untuk sekali kegiatan), seperti Izin Terbang untuk Pesawat, Pilot, Pramugari/a dan Persetujuan Impor/Ekspor.</p>
                <p>Belum memiliki NIB?</p>
                <a href="https://oss.go.id/" class="btn btn-outline-danger">Klik Disini</a>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/css/img/meklay-umku.jpg') }}" class="img-fluid rounded" alt="Ilustrasi PB-UMKU">
            </div>
        </div>
    </div>
</section>

<section id="umku-carousel" class="bg-dark text-light py-5">
    <div class="container py-4" data-aos="fade-up">
        <div class="header-akun text-center">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h3 class="text-light">Cara Membuat PB-UMKU</h3>
                </div>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/css/img/umku11.png') }}" class="d-block w-100 img-fluid rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/css/img/umku12.png') }}" class="d-block w-100 img-fluid rounded" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/css/img/umku13.png') }}" class="d-block w-100 img-fluid rounded" alt="...">
                        </div>
                        <!-- Tambahkan item carousel lainnya sesuai kebutuhan -->
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
            </div>
        </div>
    </div>
</section>



{{-- join --}}
<section id="akun" style="margin-top: 100px;" class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="fw-bold mb-3">Bagaimana cara registrasi akun?</h1>
                <p class="text-secondary">Registrasi akun CPPB-OB (Cara Produksi Pangan Olahan yang Baik) di BPOM (Badan Pengawas Obat dan Makanan) adalah proses pendaftaran yang dilakukan oleh produsen atau pelaku usaha pangan olahan untuk mendapatkan sertifikasi bahwa produknya diproduksi sesuai dengan standar keamanan dan kualitas yang ditetapkan oleh BPOM. Sertifikasi CPPB-OB memastikan bahwa produk pangan olahan diproduksi dengan cara yang baik dan aman untuk dikonsumsi oleh masyarakat.</p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('assets/img/panganoss4.png') }}" class="img-fluid rounded" alt="Ilustrasi Registrasi Akun">
            </div>
        </div>
    </div>
</section>

<section id="akun-lengkapi-profile" class="bg-dark text-light py-5">
    <div class="container py-4" data-aos="fade-up">
        <div class="header-akun text-center">
            <div class="col-lg-8 mx-auto">
                <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h3 class="text-light">Cara Registrasi Akun</h3>
                </div>
                <p class="text-center text-secondary mb-4" data-aos="fade-up">Berikut adalah langkah-langkah untuk melengkapi profile perusahaan dalam e-registrasi. Scroll ke samping untuk melihat setiap langkahnya dengan cermat.</p>
                <div id="carouselProfileSteps" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/css/icons/0.png') }}" class="d-block w-100 img-fluid rounded" alt="Langkah 1 - 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/css/icons/data.png') }}" class="d-block w-100 img-fluid rounded" alt="Langkah 4 - 6">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/css/icons/3.png') }}" class="d-block w-100 img-fluid rounded" alt="Langkah 7 - 10">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/css/icons/4.png') }}" class="d-block w-100 img-fluid rounded" alt="Langkah 11 - 14">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/css/icons/6.png') }}" class="d-block w-100 img-fluid rounded" alt="Langkah 15 - Selesai">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProfileSteps" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProfileSteps" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pangan" style="margin-top: 100px;" class="py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h1 class="fw-bold mb-3">Bagaimana cara melihat daftar jenis pangan?</h1>
                <p class="text-secondary">Daftar jenis pangan adalah kode-kode yang digunakan untuk mengklasifikasikan berbagai jenis produk pangan yang beredar di pasaran. Kode ini biasanya diterbitkan oleh BPOM di Indonesia dan digunakan dalam proses registrasi, pelaporan, dan pengawasan produk pangan. Kode-kode ini membantu dalam mengidentifikasi dan mengelompokkan produk pangan berdasarkan kategori atau jenisnya, sehingga memudahkan proses pengawasan dan regulasi.</p>
                <p>Cek kode jenis pangan kamu disini?</p>
                <a href="https://ereg-rba.pom.go.id/front/jenispangan" class="btn btn-outline-danger">Klik Disini</a>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('assets/css/icons/usy.jpg') }}" class="img-fluid rounded" alt="Ilustrasi Jenis Pangan">
            </div>
        </div>
    </div>
</section>

@endsection

@section('css')
<style>
   .carousel-inner img {
       object-fit: cover;
   }
   .carousel-control-prev-icon,
   .carousel-control-next-icon {
       background-color: black;
       border-radius: 50%;
   }
</style>
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
          window.scrollTo({
            top: targetElement.offsetTop - document.querySelector('.navbar').offsetHeight,
            behavior: 'smooth'
          });
        }
      });
    }
  });
</script>
@endsection
