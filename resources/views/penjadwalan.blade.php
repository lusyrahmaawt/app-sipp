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
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Penjadwalan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Data Table -->
            <div class="row">
                <div class="col-12">
                    <a href="{{route('admin.tambahjadwal')}}" class="btn btn-primary mb-3">Tambah Data</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Penyuluhan</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mulai Kegiatan </th>
                                        <th>Berakhir Kegiatan</th>
                                        <th>Waktu Kegiatan</th>
                                        <th>Tempat Kegiatan</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jadwal as $jadwals)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $jadwals->nama_kegiatan }}</td>
                                        <td>{{ $jadwals->tanggal_kegiatan }}</td>
                                        <td>{{ $jadwals->waktu_kegiatan }}</td>
                                        <td>{{ $jadwals->tempat_kegiatan }}</td>
                                        <td>{{ $jadwals->keterangan }}</td>
                                        <td>
                                            <a href="{{ route('admin.editjadwal', ['id' => $jadwals->id]) }}" class="btn btn-primary">
                                                <i class="fas fa-pen"></i> Edit
                                            </a>
                                            <a data-toggle="modal" data-target="#modal-delete{{ $jadwals->id }}" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="modal-delete{{ $jadwals->id }}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Konfirmasi Hapus Jadwal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Apakah Anda yakin ingin menghapus jadwal "{{ $jadwals->keterangan }}"?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('admin.deletejadwal', ['id' => $jadwals->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
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
