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

<div class="container">
    <div class="row mx-auto">
        <?php $index = count($wklrektor)-1; ?>
        <?php for ($a = 0; $a <= $index; $a ++) { ?>
            <div class="cads col-md-6">
                <div class="card kegiatan">
                    <a href="<?= base_url('detailwklrektor'); ?>" class="btn my-auto btn-content">
                        <img src="assets/imgs/tel.jpeg" class="card-img-top" alt="..." style="border-radius: 10px; margin-top: 5px;">
                        <div class="card-body">
                            <h5 class="card-title"><?= $wklrektor[$a] ?></h5>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>