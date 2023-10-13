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
        <div class="sidebar">
            <button class="btn header-btn-menu" type="button" onclick="btnMenu()">
                <img src="<?=base_url()?>assets/images/landing/btn-menu.png">
            </button>
            <div id="custom-sidebar-back" class="d-none" onclick="btnMenu()"></div>
            <div id="custom-sidebar" class="d-none">
                <a style="display:flex; justify-content: space-between; align-items:center; padding-left:20px; padding-top:10px;">
                    <b>Menu</b>
                    <button type="button" onclick="btnMenu()" class="close pr-3 text-white" style="font-size: 30px;" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </a>
                <hr style="background-color: #fff">
                <a class="dropdown-item" href="<?= site_url('home'); ?>">Beranda</a>
                <a class="dropdown-item" href="<?= site_url('repository'); ?>">Repositori</a>
                <a class="dropdown-item" href="<?= site_url('pengetahuan'); ?>">Pengetahuan</a>
                <a class="dropdown-item" href="<?= site_url('geospasial'); ?>">Geospasial</a>
                <a class="dropdown-item" href="#">Tentang</a>
                <a class="dropdown-item" href="#">Pembelajaran</a>
                <a class="dropdown-item" href="#">Forum Diskusi</a>
                <a class="dropdown-item" href="#">FAQ</a>
                <a class="dropdown-item" href="#">Log in</a>
            </div>
        </div>
    </div>
</div>