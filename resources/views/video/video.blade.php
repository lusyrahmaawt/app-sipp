<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Halaman Video Kegiatan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Video Kegiatan</li>
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
                        <a href="{{ route('admin.video.createvideo') }}" class="btn btn-primary mb-3">Buat Video</a>

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle me-2" style="font-size: 1.5rem;"></i>
                                    <strong class="me-2">Success:</strong> {{ session('success') }}
                                </div>
                            </div>
                        @endif

                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Video</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($videos as $video)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>
                                                        {{ $video->judul }}
                                                    </td>
                                                    <td>
                                                        <iframe height="150"
                                                            src="https://www.youtube.com/embed/{{ $video->youtube_code }}"
                                                            title="YouTube video player" frameborder="0"
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                            referrerpolicy="strict-origin-when-cross-origin"
                                                            allowfullscreen></iframe>

                                                    </td>
                                                    <td>
                                                        <a href ="{{ route('admin.video.editvideo', ['id' => $video->id]) }}"
                                                            class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                                        <a data-toggle="modal"
                                                            data-target="#modal-delete{{ $video->id }}"
                                                            class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                                                    </td>
                                                    <div class="modal fade" id="modal-delete{{ $video->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Apakah kamu yakin ingin menghapus video
                                                                        <b>{{ $video->judul }}</b></p>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <form
                                                                        action="{{ route('admin.video.destroyvideo', ['id' => $video->id]) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="button" class="btn btn-default"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Ya,
                                                                            Hapus</button>
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
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Video</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach ($videos as $video)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                        <td>
                                            {{ $video->judul }}
                                        </td>
                                        <td>
                                            <iframe height="150" src="https://www.youtube.com/embed/VIDEO_ID{{ $video->youtube_code }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                            {{-- <iframe height="150" src="https://www.youtube.com/embed/{{ $video->youtube_code }}" 
                                                title="YouTube video player" frameborder="0" 
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                referrerpolicy="strict-origin-when-cross-origin" 
                                                allowfullscreen></iframe> --}}
                                            
                                        </td>
                                            <td>
                                                <a href ="{{ route('admin.video.editvideo', ['id'=> $video->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                                <a data-toggle="modal" data-target="#modal-delete{{ $video->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                                            </td>
                                        <div class="modal fade" id="modal-delete{{ $video->id }}">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Apakah kamu yakin ingin menghapus video <b>{{ $video->judul }}</b></p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="{{ route('admin.video.destroyvideo', ['id' => $video->id]) }}" method="POST">
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
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
