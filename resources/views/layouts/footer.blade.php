<!-- resources/views/layouts/footer.blade.php -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('assets/css/icons/logobaru.png')}}" height="100" width="150" alt="">
                <h5>Siap Melayani Dengan Sepenuh Hati</h5>
                
            </div>
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="{{ url('/welcome') }}">Beranda</a></li>
                    <li><a href="{{ url('/berita') }}">Berita</a></li>
                    <li><a href="{{ url('/penjadwalan') }}">Penjadwalan</a></li>
                    <li><a href="{{ url('/kontak') }}">Kontak</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>Email: info@scheduler.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy;  Dinas Koperasi dan UKM DIY 2024</p>
            </div>
        </div>
    </div>
</footer>
