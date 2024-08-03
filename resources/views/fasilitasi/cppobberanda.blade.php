@extends('layouts.sidebar')
@section('content')

<section id="detail" style="margin-top: 100px" class="py-5"></section>
    <div class="container col-xl-9">
        <div class="row">
            <div class="mb-3">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item"><a href="/nibberanda">NIB</a></li>
                        <li class="breadcrumb-item"><a href="/halalberanda">Halal</a></li>
                        <li class="breadcrumb-item"><a href="/pirtberanda">PIRT</a></li>
                        <li class="breadcrumb-item active">CPPOB</li>
                    </ol>
                </div>
        </div>
        <img src="{{asset('assets/css/icons/1cppob.jpg')}}" class="img-fluid" alt="">

        </div>
    </div>

        <section id="join" class="py-5">
            <div class="container py-5"data-aos="zoom-out">
              <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5> Dokumen Persyaratan Permohonan Penerapan Izin CPPOB </h5>
                    </div>
                    <p> 1. Peta lokasi sarana produksi; </p>
                    <p> 2. Denah bangunan (lay out) sarana produksi;</p>
                    <p> 3. Panduan mutu meliputi dokumen yang memuat persyaratan untuk penerapan CPPOB di sarana produksi;</p>
                    <p> 4. Deskripsi Pangan Olahan; </p>
                    <p> 5. Alur proses produksi beserta penjelasannya;</p>
                </div>
                <div class="col-lg-6">
                  <img src="{{asset('assets/css/img/CPPOB.png')}}" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </section>
        <section id="join" class="py-5">
            <div class="container py-5"data-aos="zoom-out">
              <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5> Alur Pengajuan Izin CPPOB </h5>
                    </div>
                    <p> 1. Pendaftaran akun melalui laman resmi pelayanan publik BPOM (e-sertifikasi.pom.go.id).</p> 
                  <p> 2. Pastikan telah memiliki NIB dan telah memilih Perizinan Berusaha Untuk Menunjang Kegiatan Usaha (UMKU) layanan CPPOB pada akun Online Single Submission (OSS)</p>
                    <p> 3. Verifikasi data profil perusahaan oleh petugas BPOM </p>
                    <p> 4. Produsen mendapatkan informasi akun (username dan password) melalui email penanggung jawab jika telah sesuai/terverifikasi </p>
                    <p> 5. Produsen mengisi data dan mengunggah dokumen persyaratan</p>
                    <p> 6. Evaluasi dan verifikasi dokumen persyaratan oleh petugas BPOM</p>
                    <p> 7. Pembayaran PNBP sesuai dengan surat perintah bayar yang diterbitkan</p>
                    <p> 8. Pemeriksaan/audit sarana produksi terkait penerapan CPPOB</p>
                    <p> 9. Pemenuhan tindakan perbaikan (jika ada)</p>
                    <p> 10. Penerbitan Izin Penerapan CPPOB </p>
                </div>
                <div class="col-lg-6">
                  <img src="{{asset('assets/css/icons/Alur-Sertifikasi-CPPOB.jpg')}}" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </section>
        <section id="join" class="py-5">
            <div class="container py-5"data-aos="zoom-out">
              <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5> Biaya Layanan Izin Penerapan CPPOB </h5>
                    </div>
                    <p> Dasar hukum PP No. 32 Tahun 2017 tentang Jenis dan tarif atas Jenis PNBP yang berlaku pada Badan POM </p>
                    <p> Catatan : </p>
                    <p>Surat Perintah Bayar berlaku 7 hari kalender. Apabila dalam waktu 7 hari kalender tidak dilakukan proses pembayaran, maka permohonan dianggap batal dan dihapus dari sistem.</p>
                    <h5> Dokumen Informasi CPPOB </h5>
                    <body>
                        <div class="container" style="margin-top: 50px;">
                            <a href="https://drive.google.com/file/d/1FAK4qUt0U5_ErTcdhbxbLUm8rbYSIcUH/view" class="btn btn-outline-danger">Download Persyaratan</a>
                        </div>
                    </body>
                </div>
                <div class="col-lg-6">
                  <img src="{{asset('assets/css/icons/biaya.jpg')}}" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </section>

          <section id="join" class="py-5">
            <div class="container py-5">
              <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-3">
                    
                        
                  </div>
            </section>    
          

 @endsection