<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('assets/css/icons/logobaru.png') }}" height="100" width="150" alt="Logo">
                <h5>Siap Melayani Dengan Sepenuh Hati</h5>
            </div>
            <div class="col-md-4 footer-items">
                <h4>Quick Links</h4>
                <div class="border"></div>
                <ul>
                    <li><a href="{{ url('#welcome') }}">Beranda</a></li>
                    <li><a href="{{ url('#berita') }}">Berita</a></li>
                    <li><a href="{{ url('#penjadwalan') }}">Penjadwalan</a></li>
                    <li><a href="{{ url('#konsultasi') }}">Konsultasi</a></li>
                </ul>
            </div>
            <div class="col-md-4 footer-items">
                <h4>Contact Us</h4>
                <div class="border"></div>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i> Jl. HOS Cokroaminoto No.162, Tegalrejo, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55244</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> 1234567890</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> diskopukm.com</li>
                </ul>
                <div class="social-media">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="https://wa.me/+6282121044424" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy; Dinas Koperasi dan UKM DIY 2024</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
