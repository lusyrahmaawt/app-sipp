<!-- resources/views/tambahjadwal.blade.php -->
@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Jadwal</h1>
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
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('admin.tambah') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Tambah Jadwal</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_kegiatan">Mulai Kegiatan</label>
                                    <input type="date" class="form-control" name="nama_kegiatan" id="nama_kegiatan" placeholder="Nama Kegiatan">
                                    @error('nama_kegiatan')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_kegiatan">Berakhir Kegiatan</label>
                                    <input type="date" class="form-control" name="tanggal_kegiatan" id="tanggal_kegiatan">
                                    @error('tanggal_kegiatan')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="waktu_kegiatan">Waktu Kegiatan</label>
                                    <input type="time" class="form-control" name="waktu_kegiatan" id="waktu_kegiatan">
                                    @error('waktu_kegiatan')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tempat_kegiatan">Tempat Kegiatan</label>
                                    <input type="text" class="form-control" name="tempat_kegiatan" id="tempat_kegiatan" placeholder="Tempat Kegiatan">
                                    @error('tempat_kegiatan')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
                                    @error('keterangan')
                                    <small>{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
