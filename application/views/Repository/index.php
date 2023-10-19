<?php $this->load->view('header')?>
    <div class="hero-repo d-flex flex-row" style="display: flex; flex-direction: row">
        <img src="<?=base_url()?>assets/images/repository/Union.png" style="height: 58px;">
        <h2 style="background-color: blue;
                    margin-top: 2px;
                    border-radius: 85px 1px;
                    width: 100%;
                    text-align: center;
                    color: #fff;
                    height: 70px;
                    line-height: 70px;
                    font-weight: 700;
                    font-size: 40px;">Repositori DKMS</h2>
        <img src="<?=base_url()?>assets/images/repository/Union.png" style="height: 68px; transform:rotate(180deg)">
    </div>
    
    <div class="xtrp">
    <p>Repository DKMS (Disaster Knowledge Management System) adalah tempat penyimpanan dan pengelolaan dokumen pengetahuan kebencanaan, terutama yang mendukung operasionalisasi pengetahuan MHEWS (Multi-Hazards Early Warning System) di Indonesia.</p>
    </div>
    
        <div class="row">
            <div class="col-md-1">
                <!-- Sidebar -->
    <?php $this->load->view('Repository/repofilter')?>
            </div>
            <div class="col-md-11">
            <div class="artikel">
        <h2 class="txArtikel text-center">Daftar Artikel</h2>
        <span class="txArtikel2">Repositori Pengetahuan Bencana</span>
        <div class="search-box d-flex flex-row">
            <input type="search" id="search-box" placeholder="Cari..." style="font-size:medium"/>
            <label for="search-box" style="color: #F28920; margin-left: 70px;"><i data-feather="search"></i></label>
            <button type="button" class="btn btn1" id="">Filter<img class="imgFiltr" src="<?= base_url() ?>assets/images/repository/filter.png"></button>    
        </div>
    </div>
    <div class="card d-flex" style="top: 50px; width: 50rem; margin-left: 280px">
        <div class="card-body">
            <p class="card-title">Kajian Resiko Bencana Kabupaten Kulonprogo</p>
            <div class="d-flex flex-row">
                <img style="width: 38px;" src="<?= base_url() ?>assets/images/repository/warning.png">
                <div class="d-flex flex-column" style="margin-left: 5px;">
                    <span class="haz">Hazard</span>
                    <span class="tsu">Tsunami</span>
                </div>
                <img style="width: 38px; margin-left: 450px;" src="<?= base_url() ?>assets/images/repository/language.png">
                <span class="haz" style="margin-left: 5px; margin-top: 5px">Sumber</span>
            </div>
            <div class="d-flex flex-row" style="margin-top: 20px">
                <img style="width: 38px;" src="<?= base_url() ?>assets/images/repository/location.png">
                <div class="d-flex flex-column" style="margin-left: 5px;">
                    <span class="haz">Location</span>
                    <span class="tsu">Kabupaten Kulon Progo</span>
                </div>
                <img style="width: 38px; margin-left: 407px;" src="<?= base_url() ?>assets/images/repository/grid.png">
                <div class="d-flex flex-column" style="margin-left: 5px;">
                    <span class="haz">Category</span>
                    <span class="tsu">Pengetahuan Resiko</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card d-flex" style="top: 70px; width: 50rem; margin-left: 280px;">
        <div class="card-body">
            <p class="card-title">Kajian Resiko Bencana Kota Ambon</p>
            <div class="d-flex flex-row">
                <img style="width: 38px;" src="<?= base_url() ?>assets/images/repository/warning.png">
                <div class="d-flex flex-column" style="margin-left: 5px;">
                    <span class="haz">Hazard</span>
                    <span class="tsu">Tsunami</span>
                </div>
                <img style="width: 38px; margin-left: 450px;" src="<?= base_url() ?>assets/images/repository/language.png">
                <span class="haz" style="margin-left: 5px; margin-top: 5px">Sumber</span>
            </div>
            <div class="d-flex flex-row" style="margin-top: 20px">
                <img style="width: 38px;" src="<?= base_url() ?>assets/images/repository/location.png">
                <div class="d-flex flex-column" style="margin-left: 5px;">
                    <span class="haz">Location</span>
                    <span class="tsu">Kabupaten Kulon Progo</span>
                </div>
                <img style="width: 38px; margin-left: 407px;" src="<?= base_url() ?>assets/images/repository/grid.png">
                <div class="d-flex flex-column" style="margin-left: 5px;">
                    <span class="haz">Category</span>
                    <span class="tsu">Pengetahuan Resiko</span>
                </div>
            </div>
        </div>
    </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination d-flex"  style="margin-top: 120px; margin-left: 460px; text-align: center;">
                <li class="page-item">
                <svg class="page-link" xmlns="http://www.w3.org/2000/svg" width="24" height="30" viewBox="0 0 24 30" fill="none">
                    <path d="M0 14.9999L24 0.599901V29.3999L0 14.9999Z" fill="#B7B7B7"/>
                </svg>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item"><a class="page-link" href="#">10</a></li>
                    <li class="page-item">
                    <svg class="page-link" xmlns="http://www.w3.org/2000/svg" style="transform: rotate(180deg);" width="24" height="30" viewBox="0 0 24 30" fill="none">
                        <path d="M0 14.9999L24 0.599901V29.3999L0 14.9999Z" fill="#B7B7B7"/>
                    </svg>
                </li>
            </ul>
        </nav>

            </div>
        </div>
    </div>
 
<?php $this->load->view('footer')?>