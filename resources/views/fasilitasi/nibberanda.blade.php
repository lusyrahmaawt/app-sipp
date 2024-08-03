@extends('layouts.sidebar')
@section('content')

<section id="detail" style="margin-top: 100px" class="py-5"></section>
    <div class="container col-xl-9">
        <div class="row">
            <div class="mb-3">
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                    <li class="breadcrumb-item active">NIB</li>
                    <li class="breadcrumb-item"><a href="/halalberanda">Halal</a></li>
                    <li class="breadcrumb-item"><a href="/pirtberanda">PIRT</a></li>
                    <li class="breadcrumb-item"><a href="/cppobberanda">CPPOB</a></li>
                </ol>
            </div>
        </div>
        <img src="{{asset('assets/css/icons/oss1.png')}}" class="img-fluid" alt="">
        </div>
    </div>

        <section id="join" class="py-5">
            <div class="container"data-aos="zoom-out">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5> Apa itu NIB (Nomor Induk Berusaha)? </h5>
                    </div>
                    <p> Nomor Induk Berusaha (NIB) adalah identifikasi berusaha yang diberikan kepada setiap perusahaan yang ingin beroperasi di Indonesia. Dengan NIB, perusahaan dapat melakukan berbagai kegiatan bisnis secara legal. NIB adalah bagian dari upaya Pemerintah Indonesia untuk menciptakan iklim bisnis yang lebih ramah investasi dan mengurangi birokrasi yang berbelit.</p>
                </div>
                <div class="col-lg-6">
                  <img src="{{asset('assets/css/icons/usy.jpg')}}" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </section>
                    <h3> Bagaimana cara mendapatkan NIB? </h3>
          <div class="card mb-3">
            <img src="{{asset('assets/css/icons/alur-nib.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Manfaat NIB</h5>
              <p class="card-text">1. Sederhana dan Efisien: </p>
                <p> NIB menggabungkan berbagai izin dan dokumen yang sebelumnya diperlukan menjadi satu nomor tunggal. Ini mempersederhanakan proses perizinan dan membuatnya lebih efisien.</p>
                <p> 2. Kemudahan Investasi: </p> 
                <p> NIB membuka pintu bagi investor asing dan lokal untuk lebih mudah masuk ke pasar Indonesia. Hal ini berpotensi meningkatkan investasi dan menciptakan lapangan kerja baru.</p>
                <p> 3. Peluang Bisnis yang Lebih Luas: </p> 
                <p> Dengan perizinan yang lebih sederhana, perusahaan memiliki kesempatan untuk menjelajahi peluang bisnis yang lebih luas di Indonesia.</p>
                <p> 4. Transparansi: </p> 
                <p> NIB juga meningkatkan transparansi dalam berbisnis dengan menyediakan basis data publik yang mencakup informasi tentang perusahaan dan kegiatan bisnisnya.</p>
                <body>
                    <div class="container" style="margin-top: 50px;">
                        <a href="https://oss.go.id/" class="btn btn-outline-danger">Daftar Sekarang</a>
                    </div>
                </body>
            </div>
          </div>
         

 @endsection