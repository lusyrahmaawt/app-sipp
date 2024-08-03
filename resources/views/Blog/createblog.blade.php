<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Buat Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/beranda">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/blog">Blog</a></li>
                        <li class="breadcrumb-item active">Buat Artikel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <form action="{{ route('admin.blog.storeblog') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label for="judul">Masukan Judul Kegiatan</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}">
            @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label for="image">Pilih Photo Kegiatan</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label for="desc">Artikel Berita</label>
            <textarea name="desc" id="summernote" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') }}</textarea>
            @error('desc')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<!-- /.content-wrapper -->

<!-- Include Summernote CSS/JS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300, // Set the height of the editor
            toolbar: [
                // Customize your toolbar
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });
</script>
@endsection
