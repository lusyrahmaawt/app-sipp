<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIPP | Register </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte/plugins/fontawesome-free/css/all.min.css' )}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{ route('login') }}" class="h1"><b>SIPP</b>Diskop</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Halaman Register</p>

      <form action="{{ route('register-proses') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name = "nama" class="form-control" placeholder="Nama Lengkap" value="{{ old('nama') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          @error('nama')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="email" name = "email" class="form-control" placeholder="Email" value="{{ old('email') }}">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
          @error('email')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="password"  name = "password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
          @error('password')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="text"  name = "nik" class="form-control" placeholder="Nomor Induk Kependudukan">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
          @error('nik')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="text"  name = "nama_usaha" class="form-control" placeholder="Nama Usaha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
          @error('nama_usaha')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="text"  name = "jenis_usaha" class="form-control" placeholder="Jenis Usaha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
          @error('jenis_usaha')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="text"  name = "alamat" class="form-control" placeholder="Alamat">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
          @error('alamat')
              <small>{{ $message }}</small>
          @enderror
        <div class="input-group mb-3">
          <input type="text"  name = "no_whatsapp" class="form-control" placeholder="No Whatsapp">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          </div>
          @error('no_whatsapp')
              <small>{{ $message }}</small>
          @enderror
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('lte/plugins/jquery/jquery.min.js' )}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js' )}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte/dist/js/adminlte.min.js' )}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($message = Session::get('success'))
    <script>
      Swal.fire("{{ $message }}");
      </script>
@endif 
@if($message = Session::get('failed'))
    <script>
      Swal.fire("{{ $message }}");
      </script>
@endif 
</body>
</html>