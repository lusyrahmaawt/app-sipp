<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pendaftar CPPOB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pendaftar CPPOB</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.updatecppob', ['id' => $cppob->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Edit Pendaftar CPPOB</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_ukm">Nama UKM</label>
                                    <input type="text" class="form-control" name="nama_ukm" id="nama_ukm" value="{{ $cppob->nama_ukm }}" placeholder="Nama UKM">
                                    @error('nama_ukm')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" value="{{ $cppob->nama_lengkap }}" placeholder="Nama Lengkap">
                                    @error('nama_lengkap')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat_lengkap">Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" placeholder="Alamat Lengkap">{{ $cppob->alamat_lengkap }}</textarea>
                                    @error('alamat_lengkap')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat_produksi">Alamat Produksi</label>
                                    <textarea class="form-control" name="alamat_produksi" id="alamat_produksi" placeholder="Alamat Produksi">{{ $cppob->alamat_produksi }}</textarea>
                                    @error('alamat_produksi')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email_aktif">Email Aktif</label>
                                    <input type="email" class="form-control" name="email_aktif" id="email_aktif" value="{{ $cppob->email_aktif }}" placeholder="Email Aktif">
                                    @error('email_aktif')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $cppob->no_hp }}" placeholder="No HP">
                                    @error('no_hp')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nomer_nik">Nomer NIK</label>
                                    <input type="text" class="form-control" name="nomer_nik" id="nomer_nik" value="{{ $cppob->nomer_nik }}" placeholder="Nomer NIK">
                                    @error('nomer_nik')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nomer_npwp">Nomer NPWP</label>
                                    <input type="text" class="form-control" name="nomer_npwp" id="nomer_npwp" value="{{ $cppob->nomer_npwp }}" placeholder="Nomer NPWP">
                                    @error('nomer_npwp')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenisusaha" class="form-control-label">Pilih Jenis Usaha:</label>
                                            <select class="form-control" id="jenisusaha" name="jenisusaha" value="{{ $cppob->jenisusaha }}" placeholder="Enter Jenis Usaha" required>
                                                <option value="">Pilih Jenis Usaha</option>
                                                <option value="1">1. Makanan Ringan</option>
                                                <option value="2">2. Minuman</option>
                                            </select>
                                    @error('jenisusaha')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenisproduk" class="form-control-label">Pilih Produk:</label>
                                    <select class="form-control" id="jenisproduk" name="jenisproduk" value="{{ $cppob->jenisproduk }}" placeholder="Enter Jenis Produk" required>
                                        <option value="">Pilih Produk</option>
                                        <option value="minuman">Minuman</option>
                                        <option value="frozenfood">Frozen Food</option>
                                        <option value="makanan_kemasan">Makanan Kemasan dalam "Pouch"</option>
                                        <option value="lainnya">Lainnya</option>
                                    </select>
                                    @error('jenisproduk')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="namaproduk">Nama Produk</label>
                                    <input type="text" class="form-control" name="namaproduk" id="namaproduk" value="{{ $cppob->namaproduk }}" placeholder="Nama Produk">
                                    @error('namaproduk')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="no_nib">No NIB</label>
                                    <input type="text" class="form-control" name="no_nib" id="no_nib" value="{{ $cppob->no_nib }}" placeholder="No NIB">
                                    @error('no_nib')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sibakul">Sibakul</label>
                                    <input type="text" class="form-control" name="sibakul" id="sibakul" value="{{ $cppob->sibakul }}" placeholder="Sibakul">
                                    @error('sibakul')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kemasan" class="form-control-label">Pilih Kemasan:</label>
                                    <select class="form-control" id="kemasan" name="kemasan" value="{{ $cppob->kemasan }}" placeholder="Enter Kemasan" required>
                                        <option value="">Pilih Kemasan</option>
                                        <option value="botol">Botol</option>
                                        <option value="kemasan_plastik">Kemasan Plastik</option>
                                        <option value="lainnya2">Lainnya</option>
                                    </select>
                                    @error('kemasan')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_daftar">Tanggal Daftar</label>
                                    <input type="date" class="form-control" name="tanggal_daftar" id="tanggal_daftar" value="{{ $cppob->tanggal_daftar }}" placeholder="Tanggal Daftar">
                                    @error('tanggal_daftar')
                                        <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
            </form>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
