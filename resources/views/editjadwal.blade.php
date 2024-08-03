<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Penjadwalan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Jadwal</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('admin.updatejadwal', ['id' =>$jadwal->id] )}}" method="POST">
                    @csrf
                    @method('PUT')
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Tambah Penyuluhan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_kegiatan">Mulai Kegiatan</label>
                                <input type="date" class="form-control" name="nama_kegiatan" id="nama_kegiatan" value="{{ $jadwal->nama_kegiatan}}" placeholder="Nama Kegiatan">
                                @error('nama_kegiatan')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tanggal_kegiatan">Berakhir Kegiatan</label>
                                <input type="date" class="form-control" name="tanggal_kegiatan" id="tanggal_kegiatan" placeholder="Tanggal Kegiatan">
                                @error('tanggal_kegiatan')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="waktu_kegiatan">Waktu Kegiatan</label>
                                <input type="time" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan" placeholder="Waktu Kegiatan">
                                @error('waktu_kegiatan')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tempat_kegiatan">Tempat Kegiatan</label>
                                <input type="text" class="form-control" name="tempat_kegiatan" id="tempat_kegiatan" value="{{ $jadwal->tempat_kegiatan}}" placeholder="Tempat Kegiatan">
                                @error('tempat_kegiatan')
                                <small>{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ $jadwal->keterangan}}" placeholder="Keterangan">
                                @error('keterangan')
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
