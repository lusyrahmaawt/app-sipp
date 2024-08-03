@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Edit Poto</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.poto') }}">Poto</a></li>
                        <li class="breadcrumb-item active">Edit Poto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title mb-0">Edit Poto</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.poto.updatepoto', $poto->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Menggunakan PUT untuk update -->
                            
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
                                <label for="kegiatan">Masukan Keterangan</label>
                                <input type="text" class="form-control @error('kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan" value="{{ old('kegiatan', $poto->kegiatan) }}" placeholder="Masukan keterangan foto">
                                @error('kegiatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-4">
                                <label>Gambar Saat Ini</label>
                                <div>
                                    <img src="{{ asset('storage/poto/' . $poto->poto) }}" alt="Current Image" class="img-fluid" style="max-height: 200px; object-fit: cover;">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.poto') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
