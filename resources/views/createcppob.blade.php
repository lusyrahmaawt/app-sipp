@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pendaftar CPPOB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/beranda">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Pendaftar CPPOB</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.storecppob') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Tambah Pendaftar CPPOB</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama_ukm">Nama UKM</label>
                                        <input type="text" class="form-control" name="nama_ukm" id="nama_ukm" placeholder="Enter Nama UKM" required>
                                        @error('nama_ukm')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Enter Nama Lengkap" required>
                                        @error('nama_lengkap')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_lengkap">Alamat Lengkap</label>
                                        <textarea class="form-control" name="alamat_lengkap" id="alamat_lengkap" placeholder="Enter Alamat Lengkap" required></textarea>
                                        @error('alamat_lengkap')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat_produksi">Alamat Produksi</label>
                                        <textarea class="form-control" name="alamat_produksi" id="alamat_produksi" placeholder="Enter Alamat Produksi" required></textarea>
                                        @error('alamat_produksi')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email_aktif">Email Aktif</label>
                                        <input type="email" class="form-control" name="email_aktif" id="email_aktif" placeholder="Enter Email Aktif" required>
                                        @error('email_aktif')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="no_hp">No HP</label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Enter No HP" required>
                                        @error('no_hp')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nomer_nik">Nomer NIK</label>
                                        <input type="text" class="form-control" name="nomer_nik" id="nomer_nik" placeholder="Enter Nomer NIK" required>
                                        @error('nomer_nik')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="nomer_npwp">Nomer NPWP</label>
                                        <input type="text" class="form-control" name="nomer_npwp" id="nomer_npwp" placeholder="Enter Nomer NPWP" required>
                                        @error('nomer_npwp')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                        <div class="form-group">
                                            <label for="jenisusaha" class="form-control-label">Pilih Jenis Usaha:</label>
                                            <select class="form-control" id="jenisusaha" name="jenisusaha" placeholder="Enter Jenis Usaha" required>
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
                                            <select class="form-control" id="jenisproduk" name="jenisproduk" placeholder="Enter Jenis Produk" required>
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
                                        <input type="text" class="form-control" name="namaproduk" id="namaproduk" placeholder="Enter Nama Produk" required>
                                        @error('namaproduk')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="no_nib">No NIB</label>
                                        <input type="text" class="form-control" name="no_nib" id="no_nib" placeholder="Enter No NIB" required>
                                        @error('no_nib')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="sibakul">Sibakul</label>
                                        <input type="text" class="form-control" name="sibakul" id="sibakul" placeholder="Enter Sibakul" required>
                                        @error('sibakul')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="kemasan" class="form-control-label">Pilih Kemasan:</label>
                                        <select class="form-control" id="kemasan" name="kemasan" placeholder="Enter Kemasan" required>
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
                                        <input type="date" class="form-control" name="tanggal_daftar" id="tanggal_daftar" placeholder="Enter Tanggal Daftar" required>
                                        @error('tanggal_daftar')
                                            <small>{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
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
