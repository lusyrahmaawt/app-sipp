<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pendaftar CPPOB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftar CPPOB</li>
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
                    <a href="{{route('admin.createcppob') }}" class="btn btn-primary mb-3">Tambah Data</a>
                    <a href="{{route('admin.exportPdf') }}?export=pdf" class="btn btn-danger ml-3 mb-3">Export PDF</a>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Pendaftar CPPOB</h3>
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
                                        <th>Nama UKM</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat Lengkap</th>
                                        <th>Alamat Produksi</th>
                                        <th>Email Aktif</th>
                                        <th>No HP</th>
                                        <th>Nomer NIK</th>
                                        <th>Nomer NPWP</th>
                                        <th>Jenis Usaha</th>
                                        <th>Jenis Produk</th>
                                        <th>Nama Produk</th>
                                        <th>No NIB</th>
                                        <th>Sibakul</th>
                                        <th>Kemasan</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cppob as $c)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $c->nama_ukm }}</td>
                                                <td>{{ $c->nama_lengkap }}</td>
                                                <td>{{ $c->alamat_lengkap }}</td>
                                                <td>{{ $c->alamat_produksi }}</td>
                                                <td>{{ $c->email_aktif }}</td>
                                                <td>{{ $c->no_hp }}</td>
                                                <td>{{ $c->nomer_nik }}</td>
                                                <td>{{ $c->nomer_npwp }}</td>
                                                <td>{{ $c->jenisusaha }}</td>
                                                <td>{{ $c->jenisproduk }}</td>
                                                <td>{{ $c->namaproduk }}</td>
                                                <td>{{ $c->no_nib }}</td>
                                                <td>{{ $c->sibakul }}</td>
                                                <td>{{ $c->kemasan }}</td>
                                                <td>{{ $c->tanggal_daftar }}</td>
                                    
                                            <td>
                                                <a href ="{{ route('admin.editcppob', ['id'=> $c->id]) }}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                                                <a data-toggle="modal" data-target="#modal-delete{{ $c->id }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="modal-delete{{ $c->id }}">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <p>Apakah kamu yakin ingin menghapus data pendaftar <b>{{ $c->nama_ukm }}</b></p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                    <form action="{{ route('admin.deletecppob', ['id' => $c->id]) }}" method="POST">
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
                                          <!-- /.modal -->
                                    @endforeach
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
