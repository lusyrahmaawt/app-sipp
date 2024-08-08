<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Data Pendaftar CPPOB</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.pendaftarcppob') }}">Home</a></li>
                            <li class="breadcrumb-item active">Detail Pendaftar CPPOB</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <table>
                            <tr>
                                <th>Nama UKM</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->nama_ukm }}</td>
                            </tr>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Lengkap</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->alamat_lengkap }}</td>
                            </tr>
                            <tr>
                                <th>Alamat Produksi</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->alamat_produksi }}</td>
                            </tr>
                            <tr>
                                <th>Email Aktif</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->email_aktif }}</td>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->no_hp }}</td>
                            </tr>
                            <tr>
                                <th>No. NIK</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->nomer_nik }}</td>
                            </tr>
                            <tr>
                                <th>No. NPWP</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->nomer_npwp }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Usaha</th>
                                <th class="px-3">:</th>
                                <td>
                                    @if ($cppob->jenisusaha == '1')
                                        Makanan Ringan
                                    @else
                                        Minuman
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Kategori Produk</th>
                                <th class="px-3">:</th>
                                <td>
                                    @switch($cppob->jenisproduk)
                                        @case('Minuman')
                                            Minuman
                                        @break

                                        @case('Frozen Food')
                                            Frozen Food
                                        @break

                                        @case('Makanan Kemasan dalam "Pouch"')
                                            Makanan Kemasan dalam "Pouch"
                                        @break

                                        @case('Lainnya')
                                            Lainnya
                                        @break

                                        @default
                                            Tidak Diketahui
                                    @endswitch
                                </td>
                            </tr>
                            <tr>
                                <th>Nama Produk</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->namaproduk }}</td>
                            </tr>
                            <tr>
                                <th>No. NIB</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->no_nib }}</td>
                            </tr>
                            <tr>
                                <th>Sibakul</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->sibakul }}</td>
                            </tr>
                            <tr>
                                <th>Kategori Produk</th>
                                <th class="px-3">:</th>
                                <td>
                                    @switch($cppob->jenisproduk)
                                        @case('botol')
                                            Botol
                                        @break

                                        @case('kemasan_plastik')
                                            Kemasan Plastik
                                        @break

                                        @case('lainnya2')
                                            Lainnya
                                        @break

                                        @default
                                            Tidak Diketahui
                                    @endswitch
                                </td>
                            </tr>
                            <tr>
                                <th>Tanggal Daftar</th>
                                <th class="px-3">:</th>
                                <td>{{ $cppob->tanggal_daftar }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
