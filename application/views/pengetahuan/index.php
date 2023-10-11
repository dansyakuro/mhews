<?php $this->load->view('header')?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <?php $this->load->view('pengetahuan/filter')?>
    <!-- Page content -->
    <div class="container-fluid" id="content">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group">
                    <input type="text" class="form-control custom-search-box" placeholder="Cari...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">Cari</button>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
            <li class="nav-item">
                <a class=" menu-button active " id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Kondisi Kewilayahan</a>
            </li>
            <li class="nav-item">
                <a class="menu-button" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Pemanfaatan Ruang</a>
            </li>
            <li class="nav-item">
                <a class="menu-button" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Risiko Bencana</a>
            </li>
            <li class="nav-item">
                <a class="menu-button" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Sejarah Kejadian Bencana</a>
            </li>
            <li class="nav-item">
                <a class="menu-button" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Sistem Peringatan Dini</a>
            </li>
            <li class="nav-item">
                <a class="menu-button" id="tab6-tab" data-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">Kesiapsiagaan Bencana</a>
            </li>
        </ul>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12">
                <!-- Tab content -->
                <div class="tab-content mt-3" id="myTabsContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <?php $this->load->view('pengetahuan/kondisi_kewilayahan')?>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                        <?php $this->load->view('pengetahuan/pemanfaatan_ruang')?>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                        <?php $this->load->view('pengetahuan/risiko_bencana')?>
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                        <?php $this->load->view('pengetahuan/sejarah_kejadian_bencana')?>
                    </div>
                    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                        <?php $this->load->view('pengetahuan/sistem_peringatan_dini')?>
                    </div>
                    <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                        <?php $this->load->view('pengetahuan/kesiapsiagaan_bencana')?>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<?php $this->load->view('footer')?>