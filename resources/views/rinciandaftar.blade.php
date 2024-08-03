@extends('layouts.sidebar')

@section('content')
<body style="background-color: #8ca6ee;"> <!-- Atur latar belakang body -->
    <div class="container mt-5"> <!-- Atur margin top menggunakan Bootstrap -->
        <div class="row justify-content-center"> <!-- Atur konten ke tengah menggunakan Bootstrap -->
            <div class="col-md-8 col-lg-6"> <!-- Menambahkan breakpoint untuk layar lebih besar -->
                <div class="card shadow p-4"> <!-- Tambahkan shadow dan padding menggunakan Bootstrap -->
                    <h2 class="card-title text-center mb-4">Rincian Pendaftaran</h2> <!-- Tambahkan margin bawah -->
                    
                    @if (session('success'))
                        <div class="alert alert-success mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <dl class="row"> <!-- Menggunakan definition list untuk format yang lebih rapi -->
                        <dt class="col-sm-4"><strong>Nama UKM:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nama_ukm }}</dd>

                        <dt class="col-sm-4"><strong>Nama Lengkap:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nama_lengkap }}</dd>

                        <dt class="col-sm-4"><strong>Alamat Lengkap:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->alamat_lengkap }}</dd>

                        <dt class="col-sm-4"><strong>Alamat Produksi:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->alamat_produksi }}</dd>

                        <dt class="col-sm-4"><strong>Email Aktif:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->email_aktif }}</dd>

                        <dt class="col-sm-4"><strong>No HP:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->no_hp }}</dd>

                        <dt class="col-sm-4"><strong>Nomer NIK:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nomer_nik }}</dd>

                        <dt class="col-sm-4"><strong>Nomer NPWP:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nomer_npwp }}</dd>

                        <dt class="col-sm-4"><strong>Jenis Usaha:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->jenisusaha }}</dd>

                        <dt class="col-sm-4"><strong>Jenis Produk:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->jenisproduk }}</dd>

                        <dt class="col-sm-4"><strong>Nama Produk:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->namaproduk }}</dd>

                        <dt class="col-sm-4"><strong>No NIB:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->no_nib }}</dd>

                        <dt class="col-sm-4"><strong>Sibakul:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->sibakul }}</dd>

                        <dt class="col-sm-4"><strong>Kemasan:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->kemasan }}</dd>

                        <dt class="col-sm-4"><strong>Tanggal Daftar:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->tanggal_daftar }}</dd>
                    </dl>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('beranda') }}" class="btn btn-primary">Kembali ke halaman utama</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
@endsection
