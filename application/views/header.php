<div class="row mx-0 pt-4">
    <div class="col-9 col-lg-8">
        <div class="d-flex flex-row p-3">
            <img class="header-logo" src="<?=base_url()?>assets/images/landing/logo.png">
            <div class="d-flex flex-column justify-content-center pl-3">
                <h5 class="header-logo-text">MANAJEMEN PENGETAHUAN KEBENCANAAN</h5>
                <h6 class="header-logo-sub-text">Multi Hazard Early Warning System</h6>
            </div>
        </div>
    </div>
    <div class="col-3 col-lg-4 d-flex align-items-center justify-content-end">
        <div class="dropdown">
            <button class="btn header-btn-menu" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?=base_url()?>assets/images/landing/btn-menu.png">
            </button>
            <div class="dropdown-menu dropdown-menu-right custom-dropdown" aria-labelledby="dropdownMenuButton">
                <a style="padding-left:20px;">
                    <b>Menu</b>
                    <button type="button" class="close pr-3 text-white" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </a>
                <hr style="background-color: #fff">
                <a class="dropdown-item" href="<?= site_url('home'); ?>">Beranda</a>
                <a class="dropdown-item" href="<?= site_url('repository'); ?>">Repositori</a>
                <a class="dropdown-item" href="<?= site_url('pengetahuan'); ?>">Pengetahuan</a>
                <a class="dropdown-item" href="#">Geospasial</a>
                <a class="dropdown-item" href="#">Tentang</a>
                <a class="dropdown-item" href="#">Pembelajaran</a>
                <a class="dropdown-item" href="#">Forum Diskusi</a>
                <a class="dropdown-item" href="#">FAQ</a>
                <a class="dropdown-item" href="#">Log in</a>
            </div>
        </div>
    </div>
</div>