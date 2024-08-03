<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Halaman Blog Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('admin.blog.createblog') }}" class="btn btn-primary mb-3">Buat Artikel</a>

                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-2" style="font-size: 1.5rem;"></i>
                            <strong class="me-2">Success:</strong> {{ session('success') }}
                        </div>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($artikels as $artikel)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>
                                        <img src="{{ asset('storage/artikel/'.$artikel->image) }}" height="100" alt="">
                                    </td>
                                        <td>
                                            {{ $artikel->judul }}
                                        </td>
                                            <td>
                                                <a href ="{{ route('admin.blog.editblog', ['id'=> $artikel->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                                <a data-toggle="modal" data-target="#modal-delete{{ $artikel->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal-delete{{ $artikel->id }}">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Apakah kamu yakin ingin menghapus artikel <b>{{ $artikel->judul }}</b></p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="{{ route('admin.blog.destroy', ['id' => $artikel->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                                                    </form>
                                                </div>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                          </div>
                                            </form> 
                                </tr>                       
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
