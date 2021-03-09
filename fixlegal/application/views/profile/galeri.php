        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link scroll-page" href="<?= base_url('#profile'); ?>">Profile</a>
                <a class="nav-item nav-link scroll-page" href="<?= base_url('#regulasi'); ?>">Regulasi</a>
                <a class="nav-item nav-link scroll-page" href="<?= base_url('#kerja'); ?>">Naskah Kerjasama</a>
                <a class="nav-item nav-link scroll-page" href="<?= base_url('#layanan'); ?>">Layanan</a>
            </div>
        </div>
    </div>
</nav>

<div class="carousel-inner">
  <div class="carousel-item active">
      <img src="assets/imgs/s.png" class="d-block w-100" alt="...">
  </div>
</div>

<div class="container my-3" >
    <div class="row mx-auto">
        <?php $index = count($galeri)-1; ?>
        <?php for ($a = 0; $a <= $index; $a ++) { ?>
            <div class="cards col-md-6">
                <div class="card kegiatan">
                    <a href="#" class="btn my-auto btn-content" id="detail_kegiatan">
                        <img src="assets/imgs/tel.jpeg" class="card-img-top" alt="..." style="border-radius: 10px; margin-top: 5px;">
                        <div class="card-body">
                            <h5 class="card-title kegiatan_title"><?php echo $galeri[$a] ?></h5>
                        </div>
                        <div class="card-footer foot">
                            <h6><?php echo $tanggal[$a] ?></h6>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>