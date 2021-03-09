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

<div id="layanan" class="jumbotron jumbotron-fluid py-4" style="margin-top: 50px;">
    <div class="container">
        <h3>Sinergi Relasi Kerjasama</h3>
        <hr style="width: 34%; border-top: 2px solid white; margin-top: 0;">
        <div class="row mx-auto">
            <?php $index = count($detailNaskahKerjasama)-1; ?>
            <?php for ($a = 0; $a <= $index; $a ++) { ?>
                <div class="cads col-md-3">
                    <div class="content card" style="max-width: 15rem; min-height: 7.7rem;">
                      <a href="<?= base_url('detailSinergiRelasi'); ?>" class="btn my-auto btn-content">
                            <h5 class="icon"><?= $a+1 ?></h5>
                            <h5><?php echo $detailNaskahKerjasama[$a] ?></h5>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>