@extends('layouts.layouts')

@section('content')
<section id="hero" class="px-0">
 <div class="container text-center text-white" data-aos="fade-up">
   <div class="hero-tittle">
   <div class="hero-text">Selamat Datang <br> Di Sistem Informasi Penjadwalan Penyuluhan CPPOB</div>
   <h4> Dinas Koperasi dan UKM Daerah Istimewa Yogyakarta</h4>
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

{{-- berita --}}
<section id="berita">
 <div class="container py-5" data-aos="flip-up">
   <div class="header-berita text-center">
     <h2 class="fw-bold"> Berita Kegiatan Dinas Koperasi dan UMKM DIY</h2>
   </div>
   <div class="row">
     <div class="col-lg-4">
       <div class="card border-0">
        <img src="{{asset('assets/css/img/bakpia.jpeg')}}" class="img-fluid" alt="">
         <div class="konten-berita">
           <p class="mb-3 text-secondary">27/05/2024</p>
           <h4 class="fw-bold mb-3">Workshop Membuat Bakpia</h4>
           <p class="text-secondary">#UmkmNaikKelas</p>
           <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
         </div>
       </div>
     </div>
     <div class="col-lg-4">
       <div class="card border-0">
        <img src="{{asset('assets/css/img/pasar.jpeg')}}" class="img-fluid" alt="">
         <div class="konten-berita">
           <p class="mb-3 text-secondary">27/05/2024</p>
           <h4 class="fw-bold mb-3">Sibakul Jogja Jelajah Nusantara</h4>
           <p class="text-secondary">#UmkmNaikKelas</p>
           <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
         </div>
       </div>
     </div>
     <div class="col-lg-4">
       <div class="card border-0">
        <img src="{{asset('assets/css/img/md22.jpeg')}}" class="img-fluid" alt="">
         <div class="konten-berita">
           <p class="mb-3 text-secondary">27/05/2024</p>
           <h4 class="fw-bold mb-3">Bimtek CPPOB tahun 2024</h4>
           <p class="text-secondary">#UmkmNaikKelas</p>
           <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
         </div>
       </div>
     </div>
   </div>
   <div class="footer-berita text-center py-3">
     <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
   </div>
 </div>
</section>
{{-- berita --}}
{{-- join --}}
<section id="join" class="py-5">
 <div class="container py-5"data-aos="zoom-up">
   <div class="row d-flex align-items-center">
     <div class="col-lg-6">
       <div class="d-flex align-items-center mb-3">
         <div class="stripe me-2"></div>
         <h5> Daftar Fasilitasi MD CPPOB </h5>
         </div>
         <h1 class="fw-bold mb-3">Cara Produksi Pangan Olahan yang Baik (CPPOB) </h1>
         <p class="text-secondary mb-3">Cara Produksi Pangan Olahan yang Baik (CPPOB) adalah pedoman yang menjelaskan bagaimana memproduksi Pangan Olahan agar aman, bermutu, dan layak untuk dikonsumsi. Sesuai dengan Peraturan Badan Pengawas Obat Dan Makanan Nomor 22 Tahun 2021 tentang Tata Cara Penerbitan Izin Penerapan Cara Produksi Pangan Olahan Yang Baik, produsen Pangan Olahan wajib memiliki Izin Penerapan CPPOB sebagai pemenuhan persyaratan Keamanan Pangan. Untuk produsen yang memproduksi Pangan Olahan risiko tinggi, pemenuhan persyaratan keamanan pangan dibuktikan melalui Izin Penerapan PMR.</p>
         <body>
            <div class="container" style="margin-top: 50px;">
                <a href="https://e-sertifikasi.pom.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
            </div>
        </body>
     </div>
     <div class="col-lg-6">
       <img src="{{asset('assets/css/img/CPPOB.png')}}" class="img-fluid" alt="">
     </div>
   </div>
 </div>
</section>
{{-- join --}}

<section id="penjadwalan" style="margin-top: 100px" class="py-5">
    <div class="container py-4" data-aos="flip-up">
      <div class="header-berita text-center">
            <h3> Data Jadwal Pendaftaran </h3>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Jenis</th>
        <th scope="col">Mulai</th>
        <th scope="col">Berakhir</th>
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
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Bimtek CPPOB
          <p class="mb-3 text-secondary">Fave Hotel</p></td>
        <td>Penyuluhan</td>
        <td>25 Agustus 2024</td>
        <td>27 Agustus 2024</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sertifikasi PIRT
          <p class="mb-3 text-secondary">Hotel Ros In</p></td>
        <td>Penyuluhan</td>
        <td>01 September 2024</td>
        <td>02 September 2024</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Pendampingan NIB
          <p class="mb-3 text-secondary">Diskop DIY</p></td>
        <td>Bimtek</td>
        <td>15 September 2024</td>
        <td>18 September 2024</td>
      </tr>
    </tbody>
  </table>
    </div>
    </div>
  </section>
  


{{-- video --}}
<section id="video" class="py-5">
 <div class="container py-5">
   <div class="text-center">
     <iframe width="600" height="315" src="https://www.youtube.com/embed/1DJmbTObYgk?si=lEWoskjluqy810Me" 
     title="YouTube video player" frameborder="0" 
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
     allowfullscreen></iframe>
   </div>
 </div>
</section>

<section id="video_youtube" class="py-5">
 <div class="container py-5">
   <div class="header-berita text-center">
     <h2 class="fw-bold">Video Kegiatan CPPOB </h2>
   </div>
 <div class="row py-5">
   <div class="col-lg-4">
     <iframe width="300" height="215" src="https://www.youtube.com/embed/1DJmbTObYgk?si=lEWoskjluqy810Me" 
     title="YouTube video player" frameborder="0" 
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
     allowfullscreen></iframe>
   </div>
   <div class="col-lg-4">
     <iframe width="300" height="215" src="https://www.youtube.com/embed/1DJmbTObYgk?si=lEWoskjluqy810Me" 
     title="YouTube video player" frameborder="0" 
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
     allowfullscreen></iframe>
   </div>
   <div class="col-lg-4">
     <iframe width="300" height="215" src="https://www.youtube.com/embed/1DJmbTObYgk?si=lEWoskjluqy810Me" 
     title="YouTube video player" frameborder="0" 
     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" 
     allowfullscreen></iframe>
   </div>
 </div>

 <div class="footer-berita text-center">
   <a href="" class="btn btn-outline-danger"> Video Lainnya</a>
 </div>
 </div>
</section>  
@endsection


     {{-- video --}}


