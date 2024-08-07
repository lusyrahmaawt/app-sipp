@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="p-4">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="font-weight-bold mb-3">Selamat datang di Dashboard Admin</h1>
                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card shadow-sm rounded-3 border-0" style="border-radius: 18px;">
                                        <img src="{{ asset('assets/img/foto_artikel.jpg') }}" class="card-img-top"
                                            style="height: 200px; object-fit: cover; border-top-left-radius: 18px; border-top-right-radius: 18px;"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Blog Artikel</h5>
                                            <p class="card-text">Atur dan kelola artikel</p>
                                            <a href="{{ route('admin.blog') }}"
                                                class="btn btn-primary btn-block font-weight-bold"
                                                style="border-radius: 8px;">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card shadow-sm rounded-3 border-0" style="border-radius: 18px;">
                                        <img src="{{ asset('assets/img/video.jpeg') }}" class="card-img-top"
                                            style="height: 200px; object-fit: cover; border-top-left-radius: 18px; border-top-right-radius: 18px;"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Video Kegiatan</h5>
                                            <p class="card-text">Atur dan kelola video</p>
                                            <a href="{{ route('admin.video') }}"
                                                class="btn btn-primary btn-block font-weight-bold"
                                                style="border-radius: 8px;">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card shadow-sm rounded-3 border-0" style="border-radius: 18px;">
                                        <img src="{{ asset('assets/img/foto.jpg') }}" class="card-img-top"
                                            style="height: 200px; object-fit: cover; border-top-left-radius: 18px; border-top-right-radius: 18px;"
                                            alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Foto Kegiatan</h5>
                                            <p class="card-text">Atur dan kelola Foto</p>
                                            <a href="{{ route('admin.poto') }}"
                                                class="btn btn-primary btn-block font-weight-bold"
                                                style="border-radius: 8px;">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.card -->
        </div>
    </div>
    <!-- /.row (main row) -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
