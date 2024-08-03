@extends('layouts.sidebar')

@section('content')
<body style="background-color: #f0f4f7;">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow p-4" style="border-radius: 15px; background-color: #ffffff;">
                    <h2 class="card-title text-center mb-4" style="color: #4a69bd; font-weight: bold;">Rincian Pendaftaran</h2>
                    
                    @if (session('success'))
                        <div class="alert alert-success mb-4" style="border-radius: 10px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <dl class="row">
                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Nama UKM:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nama_ukm }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Nama Lengkap:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nama_lengkap }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Alamat Lengkap:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->alamat_lengkap }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Alamat Produksi:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->alamat_produksi }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Email Aktif:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->email_aktif }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>No HP:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->no_hp }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Nomer NIK:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nomer_nik }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Nomer NPWP:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->nomer_npwp }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Jenis Usaha:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->jenisusaha }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Jenis Produk:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->jenisproduk }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Nama Produk:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->namaproduk }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>No NIB:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->no_nib }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Sibakul:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->sibakul }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Kemasan:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->kemasan }}</dd>

                        <dt class="col-sm-4" style="color: #4a69bd;"><strong>Tanggal Daftar:</strong></dt>
                        <dd class="col-sm-8">{{ $cppob->tanggal_daftar }}</dd>
                    </dl>
                    
                    <div class="text-center mt-4">
                        <a href="{{ route('beranda') }}" class="btn btn-primary" style="border-radius: 10px;">Kembali ke halaman utama</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
