@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Buat Foto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/beranda">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/poto">Foto</a></li>
                        <li class="breadcrumb-item active">Buat Foto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Form Tambah Foto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.poto.storepoto') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="poto">Masukan Foto</label>
                                <input type="file" class="form-control @error('poto') is-invalid @enderror" id="poto" name="poto">
                                @error('poto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group mb-4">
                                <label for="kegiatan">Masukan Kegiatan</label>
                                <input type="text" class="form-control @error('kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan" value="{{ old('kegiatan') }}" placeholder="Masukan kegiatan foto">
                                @error('kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <!-- Placeholder to maintain alignment with the form -->
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
