<!-- resources/views/users/index.blade.php -->
@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{route('admin.user.update', ['id' =>$data->id] )}}" method="POST">
                    @csrf
                    @method('PUT')
              <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                  <!-- general form elements -->
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Form Tambah User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ $data->email}}" placeholder="Enter email">
                          @error('email')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="{{ $data->name}}" placeholder="Enter name">
                          @error('nama')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                          @error('password')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">NIK</label>
                          <input type="text" class="form-control" name="nik" id="exampleInputPassword1" value="{{ $data->nik}}" placeholder="Nomor Induk Kependudukan">
                          @error('nik')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Usaha</label>
                          <input type="text" class="form-control" name="nama_usaha" id="exampleInputPassword1" value="{{ $data->nama_usaha}}" placeholder="Nama Usaha">
                          @error('nama_usaha')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Jenis Usaha</label>
                          <input type="jenis_usaha" class="form-control" name="jenis_usaha" id="exampleInputPassword1" value="{{ $data->jenis_usaha}}" placeholder="Jenis Usaha">
                          @error('jenis_usaha')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Alamat Usaha</label>
                          <input type="text" class="form-control" name="alamat_usaha" id="exampleInputPassword1" value="{{ $data->alamat_usaha}}"placeholder="Alamat Usaha">
                          @error('alamat_usaha')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">No Whatsapp</label>
                          <input type="tel" class="form-control" name="no_whatsapp" id="exampleInputPassword1" placeholder="No Whatsapp">
                          @error('no_whatsapp')
                          <small>{{ $message }}</small>
                          @enderror
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
    
      
                </div>
                <!--/.col (left) -->
              </div>
                </form>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
