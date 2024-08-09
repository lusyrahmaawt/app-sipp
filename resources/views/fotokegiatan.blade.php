@extends('layouts.layouts')

@section('content')
    <style>
        /* Mengatur tinggi gambar agar sama rata */
        .image-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            height: 300px;
            /* Anda dapat menyesuaikan tinggi sesuai kebutuhan */
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Menyesuaikan gambar agar sesuai dengan container */
        }
    </style>

    <section id="program" style="padding-top: 16rem; padding-bottom: 16rem;">
        <div class="container col-xl-9">
            <div class="text-center">
                <h1>Foto Kegiatan CPPOB</h1>
            </div>

            <div class="row py-5" data-aos="zoom-in-up">
                @foreach ($potos as $poto)
                    <div class="col-lg-4 h-100" data-aos="flip-up">
                        <a href="{{ asset('storage/poto/' . $poto->poto) }}" data-lightbox="roadtrip">
                            <div class="image-wrapper">
                                <img src="{{ asset('storage/poto/' . $poto->poto) }}" class="img-fluid">
                            </div>
                        </a>
                        <h6 class="text-center mb 2">{{ $poto->kegiatan }}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a.nav-link');

            for (const link of links) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                });
            }
        });
    </script>
@endsection
