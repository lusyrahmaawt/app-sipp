@extends('layouts.sidebar')
@section('content')

<section class="py-5" style="margin-top: 100px">
    <div class="container">
        <div class="container-fluid py-4">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('daftar.cppob.post') }}" method="POST">
                @csrf
                <input type="hidden" name="penjadwalan_id" value="{{ $penjadwalanId }}">
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="text-uppercase text-sm" style="font-weight: bold;">Pendaftaran CPPOB</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- Form Elements -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="nama_ukm" class="form-control-label">Nama UKM:</label>
                                            <input class="form-control" type="text" value="{{ old('nama_ukm') }}" id="nama_ukm" name="nama_ukm" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="nama_lengkap" class="form-control-label">Nama Lengkap:</label>
                                            <input class="form-control" type="text" value="{{ old('nama_lengkap') }}" id="nama_lengkap" name="nama_lengkap" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="alamat_lengkap" class="form-control-label">Alamat Lengkap:</label>
                                            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" required>{{ old('alamat_lengkap') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="alamat_produksi" class="form-control-label">Alamat Produksi:</label>
                                            <textarea class="form-control" id="alamat_produksi" name="alamat_produksi" required>{{ old('alamat_produksi') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="email_aktif" class="form-control-label">Email Aktif:</label>
                                            <input class="form-control" type="email" id="email_aktif" name="email_aktif" required value="{{ old('email_aktif') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="no_hp" class="form-control-label">No Whatsapp:</label>
                                            <input class="form-control" type="text" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="nomer_nik" class="form-control-label">NIK:</label>
                                            <input class="form-control" type="text" id="nomer_nik" name="nomer_nik" required value="{{ old('nomer_nik') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="nomer_npwp" class="form-control-label">NPWP:</label>
                                            <input class="form-control" type="text" id="nomer_npwp" name="nomer_npwp" required value="{{ old('nomer_npwp') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="jenisusaha" class="form-control-label">Pilih Jenis Usaha:</label>
                                            <select class="form-control" id="jenisusaha" name="jenisusaha" required>
                                                <option value="">Pilih Jenis Usaha</option>
                                                <option value="1">1. Makanan Ringan</option>
                                                <option value="2">2. Minuman</option>
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="jenisproduk" class="form-control-label">Pilih Produk:</label>
                                            <select class="form-control" id="jenisproduk" name="jenisproduk" required>
                                                <option value="">Pilih Produk</option>
                                                <option value="minuman">Minuman</option>
                                                <option value="frozenfood">Frozen Food</option>
                                                <option value="makanan_kemasan">Makanan Kemasan dalam "Pouch"</option>
                                                <option value="lainnya">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="namaproduk" class="form-control-label">Nama Produk:</label>
                                            <input class="form-control" type="text" id="namaproduk" name="namaproduk" required value="{{ old('namaproduk') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="no_nib" class="form-control-label">Nomor NIB:</label>
                                            <input class="form-control" type="text" id="no_nib" name="no_nib" required value="{{ old('no_nib') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="sibakul" class="form-control-label">ID Sibakul:</label>
                                            <input class="form-control" type="text" id="sibakul" name="sibakul" required value="{{ old('sibakul') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="kemasan" class="form-control-label">Pilih Kemasan:</label>
                                            <select class="form-control" id="kemasan" name="kemasan" required>
                                                <option value="">Pilih Kemasan</option>
                                                <option value="botol">Botol</option>
                                                <option value="kemasan_plastik">Kemasan Plastik</option>
                                                <option value="lainnya2">Lainnya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="form-group">
                                            <label for="tanggal_daftar" class="form-control-label">Tanggal Daftar:</label>
                                            <input type="date" id="tanggal_daftar" name="tanggal_daftar" required value="{{ old('tanggal_daftar') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
