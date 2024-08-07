@extends('layouts.layouts')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <section id="program" style="padding-top: 16rem; padding-bottom: 16rem;">
        <div class="container col-xl-9">
            <div class="text-center">
                <h1>Video Kegiatan CPPOB</h1>
            </div>

            <div class="row my-5" data-aos="zoom-in">
                @foreach ($videos as $video)
                    <div class="col-lg-4">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/{{ $video->youtube_code }}"
                                title="{{ $video->judul }}">
                            </iframe>
                        </div>
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
