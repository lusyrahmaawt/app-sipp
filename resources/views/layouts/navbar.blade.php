<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow'}}">
  <div class="container">
      <a class="navbar-brand" href="#">
          <img src="{{ asset('assets/css/icons/diskop.png') }}" alt="" width="80" height="60">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="welcome">Beranda</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="berita">Berita</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="penjadwalan">Penjadwalan</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="kontak">Kontak</a>
              </li>
          </ul>
          <div class="d-flex ms-auto">
              @auth
              <form action="/register" method="get" class="ms-auto">
                  @csrf
                  <button class="btn btn-danger" type="submit">Register</button>
              </form>
              @else
              <form action="/register" method="get" class="ms-auto">
                  <button class="btn btn-danger" type="submit">Register</button>
              </form>
              @endauth
          </div>
      </div>
  </div>
</nav>