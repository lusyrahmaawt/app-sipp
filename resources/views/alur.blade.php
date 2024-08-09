@extends('layouts.layouts')

@section('content')
<section id="alur" class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center">
            <h2 class="fw-bold mb-5">Alur Pendaftaran CPPOB</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12 mb-4">
                <img src="{{ asset('assets/css/img/alur1.png') }}" class="img-fluid rounded shadow-lg" alt="CPPOB" style="width: 100%; height: auto;">
            </div>
            <div class="col-md-12 mb-4">
                <img src="{{ asset('assets/css/img/alur2.png') }}" class="img-fluid rounded shadow-lg" alt="CPPOB" style="width: 100%; height: auto;">
            </div>
        </div>
    </div>
</section>
@endsection
