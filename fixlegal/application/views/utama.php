      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link scroll-page" href="#profile">Profile</a>
            <a class="nav-item nav-link scroll-page" href="#regulasi">Regulasi</a>
            <a class="nav-item nav-link scroll-page" href="#kerja">Naskah Kerjasama</a>
            <a class="nav-item nav-link scroll-page" href="#layanan">Layanan</a>
            </div>
        </div>
    </div>
</nav>

<!-- profile -->
<div id="profile">
  <!-- carousel -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="assets/imgs/tes.png" class="d-block w-100" alt="Legal Telkom University">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
    <!-- panel -->
    <div class="row justify-content-center">
        <div class="col-8 visi-misi">
            <div class="row">
                <div class="col-lg">
                    <h3>VISI</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Illo iste cupiditate rerum fuga itaque quia quasi quidem impedit recusandae aut!</p>
                </div>
                <div class="garis"></div>
                <div class="col-lg">
                    <h3>MISI</h3>
                    <p>lorem ipsumdac cabjasbcjksabcjlasbcj sahcbsahbchskabck hcvhda vchacba bahcbahscbsah vcashcvashkc scsccs</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div class="hias">
      <img src="assets/imgs/hias.png" alt="" style="width: 50px;">
    </div> -->
    <!-- sejarah -->
    <div class="row profile">
        <div class="col-md-6">
            <img src="assets/imgs/about.png" alt="sejarah" class="img-fluid imgp">
        </div>
        <div class="col-md-6 keterangan">
            <h3>Sejarah</h3>
            <p>Legal Telkom University adalah sebuah Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsum dicta explicabo velit, ab delectus fugiat molestias quis voluptate laboriosam porro.</p>
            <a href="<?= base_url('sejarah'); ?>" class="btn btn-danger button-more">SELENGKAPNYA</a>
            <img src="assets/imgs/hias.png" alt="" class="img-fluid hias">
        </div>
    </div>
    <!-- galeri -->
    <div class="row galeri">
        <div class="col-md-6 cargal">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-item active">
                    <img src="assets/imgs/about.png" class="img-fluid imgp" alt="gambar_1">
                </div>
                <div class="carousel-item">
                    <img src="assets/imgs/tel.jpeg" class="img-fluid imgp" alt="gambar_2">
                </div>
            </div>
        </div>
        <div class="col-md-6 keterangan">
            <h3>Galeri Kegiatan</h3>
            <p>Galeri kegiatan adalah kumpulan kegiatan Legal Telkom University 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.Odio obcaecati 
                dolorem a quaerat hic suscipit sequi modi velit facere alias?</p>
            <a href="<?= base_url('galeri'); ?>" class="btn btn-danger button-more">SELENGKAPNYA</a>
        </div>
    </div>

    <!-- Struktur Organisasi -->
    <div class="row so">
        <div class="col-md-6">
            <img src="assets/imgs/about.png" alt="sejarah" class="img-fluid imgp">
        </div>
        <div class="col-md-6 keterangan">
            <h3>struktur Organisasi</h3>
            <p>Legal Telkom University memiliki sebuah struktur organisasi yang trerdiri dari 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, assumenda! 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, ad?</p>
            <a href="<?= base_url('strukturorg'); ?>" class="btn btn-danger button-more">SELENGKAPNYA</a>
            <img src="assets/imgs/hias.png" alt="" class="img-fluid hias">
        </div>
    </div>
</div>

<!-- regulasi -->
<div id="regulasi" class="jumbotron jumbotron-fluid py-4" style="margin-top: 50px;">
    <div class="container">
        <h3>Regulasi</h3>
        <hr style="width: 12%; border-top: 2px solid white; margin-top: 10px;">
        <div class="row mx-auto">
            <?php $index = count($regulasi)-1; ?>
            <?php for ($a = 0; $a <= $index; $a ++) { ?>
                <div class="cads col-md-3">
                    <div class="content card" style="max-width: 15rem; min-height: 7rem;">
                        <a href="<?= base_url($regurl[$a]); ?>" class="btn my-auto btn-content">
                            <h5 class="icon"><?= $a+1 ?></h5>
                            <h5><?php echo $regulasi[$a] ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- naskah kerjasama -->
<div class="container naskah" id='kerja'>
  <div class="card-columns">
    <a href="<?= base_url('notaKesepahaman'); ?>" class="btn">
      <div class="card" id="isi">
        <img src="assets/imgs/about.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Nota Kesepahaman (MoU)</h5>
        </div>
      </div>
    </a>
    <a href="<?= base_url('relasiNota'); ?>" class="btn">
      <div class="card text-center" id="isi">
        <div class="card-body">
          <h5 class="card-title">Relasi Nota Kesepahaman Dan Perjanjian Kerjasama</h5>
        </div>
      </div>
    </a>
    <!-- Tengah -->
    <div class="card bg-danger text-white text-center" style="margin: 30px auto">
      <div class="card-body">
          <h3>Naskah Kerjasama</h3>
      </div>
    </div>
    <a href="<?= base_url('sinergiRelasi'); ?>" class="btn">
      <div class="card" id="isi">
        <img src="assets/imgs/about.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Sinergi Relasi Kerjasama</h5>
        </div>
      </div>
    </a>
    <!-- kanan -->
    <a href="<?= base_url('perjanjianKerjasama'); ?>" class="btn">
      <div class="card" id="isi">
        <img src="assets/imgs/about.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Perjanjian Kerjasama (MoA)</h5>
        </div>
      </div>
    </a>
    <a href="<?= base_url('KordinasiLaporan'); ?>" class="btn">
      <div class="card text-center" id="isi">
        <div class="card-body">
          <h5 class="card-title">Kordinasi Dan Laporan Kerjasama Berbasiskan Sistem Elektronik</h5>
        </div>
      </div>
    </a>
  </div>
</div>

<!-- pemberitahuan -->
<div class="carousel-inner">
  <div class="carousel-item active">
      <img src="assets/imgs/s.png" class="d-block w-100" alt="...">
  </div>
</div>


<!-- layanan -->
<div id="layanan" class="jumbotron jumbotron-fluid py-4" style="margin-top: 50px;">
    <div class="container">
        <h3>layanan</h3>
        <hr style="width: 12%; border-top: 2px solid white; margin-top: 10px;">
        <div class="row mx-auto">
            <?php $index = count($layanan)-1; ?>
            <?php for ($a = 0; $a <= $index; $a ++) { ?>
                <div class="cads col-md-3">
                    <div class="content card" style="max-width: 15rem; min-height: 7.7rem;">
                      <a href="<?= base_url($layurl[$a]); ?>" class="btn my-auto btn-content">
                            <h5 class="icon"><?= $a+1 ?></h5>
                            <h5><?php echo $layanan[$a] ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>