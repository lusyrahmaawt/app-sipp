@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Edit Video</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/beranda">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/video">Video</a></li>
                        <li class="breadcrumb-item active">Edit Video</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <form action="{{ route('admin.video.updatevideo', $video->id) }}" method="POST">
        @csrf
        @method('POST') <!-- Menggunakan POST jika rute hanya mendukung POST -->
        
        <div class="form-group mb-4">
            <label for="judul">Masukan Judul Video</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $video->judul) }}">
            @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <div class="form-group mb-4">
            <label for="youtube_code">Masukan Kode Embed YouTube</label>
            <input type="text" class="form-control @error('youtube_code') is-invalid @enderror" name="youtube_code" value="{{ old('youtube_code', $video->youtube_code) }}">
            @error('youtube_code')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    
<!-- /.content-wrapper -->
@endsection
