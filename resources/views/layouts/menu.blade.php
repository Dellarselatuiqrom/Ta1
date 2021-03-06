<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container">
    <a class="navbar-brand" href="/">Pomato Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="mr-auto navbar-nav"></ul>
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('homeindex') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('homeproduk') }}">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('homekategori') }}">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('homekontak') }}">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('homeabout') }}">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
