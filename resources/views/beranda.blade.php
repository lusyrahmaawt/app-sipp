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
             <a class="nav-link active" href="nib">Pembuatan NIB</a>
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
               <a class="nav-link active" href="halal">Sertifikasi Halal</a>
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
               <a class="nav-link active" href="pirt">Fasilitasi P-IRT</a>
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
               <a class="nav-link active" href="cppob">Fasilitasi MD CPPOB</a>
         <img src="{{asset('assets/css/icons/bpom.png')}}" height="55" width="55" alt="">
       </div>
     </div>
     </div>
     </li>
     </ul>
</section>
{{-- jadwal --}}
<section id="jadwal">
 <div class="container py-4"data-aos="zoom-out">
         <h2 class="text-center"> Data Jadwal Pendaftaran </h2>
<table class="table">
 <thead>
   <tr>
     <th scope="col">No</th>
     <th scope="col">Judul</th>
     <th scope="col">Jenis</th>
     <th scope="col">Mulai</th>
     <th scope="col">Berakhir</th>
     <th scope="col">Daftar</th>
   </tr>
 </thead>
 <tbody>
   <tr>
     <th scope="row">1</th>
     <td>Sertifikasi Halal Reguler
     <p class="mb-3 text-secondary">Hotel Tara</p></td>
     <td>Penyuluhan</td>
     <td>15 Agustus 2024</td>
     <td>18 Agustus 2024</td>
     <td>
       <a class="btn btn-outline-danger" href="{{ route('register') }}">Daftar Sekarang</a>
   </td>
   </tr>
   <tr>
     <th scope="row">2</th>
     <td>Bimtek CPPOB
       <p class="mb-3 text-secondary">Fave Hotel</p></td>
     <td>Penyuluhan</td>
     <td>25 Agustus 2024</td>
     <td>27 Agustus 2024</td>
     <td>
           <a href="https://e-sertifikasi.pom.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
   </td>
   </tr>
   <tr>
     <th scope="row">3</th>
     <td>Sertifikasi PIRT
       <p class="mb-3 text-secondary">Hotel Ros In</p></td>
     <td>Penyuluhan</td>
     <td>01 September 2024</td> 
     <td>02 September 2024</td>
     <td>
           <a href="https://sppirt.pom.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
   </td>
   </tr>
   <tr>
     <th scope="row">4</th>
     <td>Pendampingan NIB
       <p class="mb-3 text-secondary">Diskop DIY</p></td>
     <td>Bimtek</td>
     <td>15 September 2024</td>
     <td>18 September 2024</td>
     <td>
           <a href="https://oss.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
   </td>
   </tr>
 </tbody>
</table>
 </div>
</section>
{{-- jadwal --}}

{{-- video --}}
<section id="umku" style="margin-top: 100px" class="py-5">
   <div class="container py-5" data-aos="zoom-up">
       <div class="row d-flex align-items-center">
           <div class="col-lg-6">
               <h1 class="fw-bold mb-3">Apa itu PB-UMKU?</h1>
               <p class="text-secondary">Perizinan Berusaha Untuk Menunjang Kegiatan Usaha (PB UMKU) adalah perizinan yang diperlukan bagi kegiatan usaha dan/atau produk pada saat pelaksanaan tahap operasional dan/atau komersial.

                 Jenis PB UMKU sangat bervariasi, antara lain dalam bentuk Izin, Persetujuan, Penetapan, Pengesahan, Penunjukan, Registrasi, Rekomendasi, Sertifikat, Sertifikasi, Konsultasi, dan Surat Keterangan.
                 
                 PB UMKU tidak termasuk izin yang sifatnya transaksional (berlaku hanya untuk sekali kegiatan), seperti Izin Terbang untuk Pesawat, Pilot, Pramugari/a dan Persetujuan Impor/Ekspor.</p>
               <p>Belum memiliki NIB?</p>
               <a href="https://oss.go.id/" class="btn btn-outline-danger">Klik Disini</a>
           </div>
           <div class="col-lg-6">
               <img src="{{asset('assets/css/img/meklay-umku.jpg')}}" class="img-fluid" alt="">
           </div>
       </div>
   </div>
</section>

<section id="umku">
   <div class="container py-4" data-aos="flip-up">
       <div class="header-akun text-center">
           <div class="col-lg-6 mx-auto">
               <div class="d-flex align-items-center mb-3">
                   <div class="stripe me-2"></div>
                   <h3>Cara Membuat PB-UMKU</h3>
               </div>
           </div>
           <div id="carouselExample" class="carousel slide">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="{{asset('assets/css/img/umku1.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/img/umku2.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/img/umku3.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/img/umku4.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/img/umku5.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/img/umku6.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
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
</section>


{{-- join --}}
<section id="akun" style="margin-top: 100px" class="py-5">
 <div class="container py-4" data-aos="flip-up">
     <div class="header-akun text-center">
         <div class="col-lg-6 mx-auto">
             <div class="d-flex align-items-center mb-3">
                 <div class="stripe me-2"></div>
                 <h3>Cara Registrasi Akun</h3>
             </div>
         </div>
         <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img src="{{ asset('assets/css/img/1.png') }}" class="d-block w-100 img-fluid" alt="Gambar 1">
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('assets/css/img/dafta.png') }}" class="d-block w-100 img-fluid" alt="Gambar 2">
                 </div>
                 <div class="carousel-item">
                     <img src="{{ asset('assets/css/img/3.png') }}" class="d-block w-100 img-fluid" alt="Gambar 3">
                 </div>
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
</section>

<section id="akun" style="margin-top: 100px" class="py-5">
   <div class="container py-4" data-aos="flip-up">
       <div class="header-akun text-center">
           <div class="col-lg-6 mx-auto">
               <div class="d-flex align-items-center mb-3">
                   <div class="stripe me-2"></div>
                   <h3>Cara Melengkapi Profile Perusahaan</h3>
               </div>
               <p class="text-secondary">Gambar ini merupakan cara melengkapi akun e-registrasi!</p>
               <p class="text-secondary">Scroll gambar ke samping dan cermatilah setiap langkahnya</p>
           </div>
           <h5>Langkah 1 - 3 (Melengkapi Data Industri dan Penanggung Jawab)</h5>
           <div id="carouselExampleFade" class="carousel slide carousel-fade">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="{{asset('assets/css/icons/0.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/data.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/3.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
           </div>
           <h5>Langkah 4 - 6 (Daftar Pabrik dan Bentuk Sediaan)</h5>
           <div id="carouselExampleIndicators" class="carousel slide">
               <div class="carousel-indicators">
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="{{asset('assets/css/icons/4.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/6.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/7.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
           </div>
           <h5>Langkah 7 - 10 (Sediaan Pabrik dan Daftar Kantor)</h5>
           <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="{{asset('assets/css/icons/8.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/9.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/11.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/12.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
           </div>
           <h5>Langkah 11 - 14 (Mengisi Form Data Kantor/Perusahaan)</h5>
           <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                   <div class="carousel-item active" data-bs-interval="10000">
                       <img src="{{asset('assets/css/icons/14.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item" data-bs-interval="2000">
                       <img src="{{asset('assets/css/icons/15.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/16.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/17.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
           </div>
           <h5>Langkah 15 - Selesai (Mengisi Form Data Direksi dan Form Ijin)</h5>
           <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="{{asset('assets/css/icons/18.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/19.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/20.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{asset('assets/css/icons/21.png')}}" class="d-block w-100 img-fluid" alt="...">
                   </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
               </button>
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
