<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Edit Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/beranda">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
                        <li class="breadcrumb-item active">Edit Artikel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <form action="{{ route('admin.blog.updateblog', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="judul">Masukan Judul Kegiatan</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $artikel->judul) }}">
            @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="image">Pilih Photo Kegiatan</label>
            <input type="hidden" name="old_name" value="{{ $artikel->image }}">
            <div>
                <img src="{{ asset('storage/artikel/' .$artikel->image) }}" class="col-lg-4" alt="">
            </div>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="desc">Artikel Berita</label>
            <textarea name="desc" id="summernote" class="form-control @error('desc') is-invalid @enderror">
                {!! $artikel->desc !!}
            </textarea>
            @error('desc')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
</div>
<!-- /.content-wrapper -->
@endsection
