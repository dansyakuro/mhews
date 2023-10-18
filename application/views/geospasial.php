<div class="w-100">
    <?php $this->load->view('header'); ?>
    <div id="map"></div>
    <form class="form-inline my-2 my-lg-0 mr-5 float-right">
      <input class="form-control mr-sm-2" type="search" placeholder="Type Provinces, District, Sub-District, ..." aria-label="Search">
    </form>
    
    <button class="btn btn-layer" type="button" onclick="btnLayerServices(this)">
        <img id="arrow-layer" class="arrow-layer" src="<?=base_url()?>assets/images/geospasial/arrow-layer.png">
    </button>
    <div id="layer-services" class="">
        <h3 class="text-center py-3">Layer Services</h3>
        <div class="layer-services-input d-flex justify-content-around">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layer" id="layer1" value="Road" onclick="setLayer(this.value)" checked>
                <label class="form-check-label" for="layer1">Road</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layer" id="layer2" value="Satelite" onclick="setLayer(this.value)">
                <label class="form-check-label" for="layer2">Satelite</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="layer" id="layer3" value="Terrain" onclick="setLayer(this.value)">
                <label class="form-check-label" for="layer3">Terrain</label>
            </div>
        </div>
        <div class="layer-services-input">
            <div class="row">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana1" value="Banjir">
                        <label class="form-check-label" for="bencana1">Banjir</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana2" value="Banjir Bandang">
                        <label class="form-check-label" for="bencana2">Banjir Bandang</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana3" value="Cuaca Ekstrim">
                        <label class="form-check-label" for="bencana3">Cuaca Ekstrim</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana4" value="Gelombang Ekstrim & Abrasi">
                        <label class="form-check-label" for="bencana4">Gelombang Ekstrim & Abrasi</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana5" value="Gempa Bumi">
                        <label class="form-check-label" for="bencana5">Gempa Bumi</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana6" value="Kebakaran Hutan & Lahan">
                        <label class="form-check-label" for="bencana6">Kebakaran Hutan & Lahan</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana7" value="Kekeringan">
                        <label class="form-check-label" for="bencana7">Kekeringan</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana8" value="Leturan Gunung Api">
                        <label class="form-check-label" for="bencana8">Leturan Gunung Api</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana9" value="Tanah Longsor">
                        <label class="form-check-label" for="bencana9">Tanah Longsor</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana10" value="Tsunami">
                        <label class="form-check-label" for="bencana10">Tsunami</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana11" value="Likuefaksi">
                        <label class="form-check-label" for="bencana11">Likuefaksi</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bencana" id="bencana12" value="Multi Bahaya">
                        <label class="form-check-label" for="bencana12">Multi Bahaya</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="layer-services-input">
            <div class="row">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="level1" value="Bahaya">
                        <label class="form-check-label" for="level1">Bahaya</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="level2" value="Kerentanan">
                        <label class="form-check-label" for="level2">Kerentanan</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="level3" value="Kapasitas">
                        <label class="form-check-label" for="level3">Kapasitas</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="level" id="level4" value="Risiko">
                        <label class="form-check-label" for="level4">Risiko</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="layer-services-input">
            <div class="row">
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon1" value="Topografi">
                        <label class="form-check-label" for="ikon1">Topografi</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon2" value="Hilshade">
                        <label class="form-check-label" for="ikon2">Hilshade</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon3" value="Fault">
                        <label class="form-check-label" for="ikon3">Fault</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon4" value="Kepadatan Penduduk">
                        <label class="form-check-label" for="ikon4">Kepadatan Penduduk</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon5" value="Jalur Rel">
                        <label class="form-check-label" for="ikon5">Jalur Rel</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon6" value="Jembatan">
                        <label class="form-check-label" for="ikon6">Jembatan</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon7" value="Jalan">
                        <label class="form-check-label" for="ikon7">Jalan</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon8" value="Pasar">
                        <label class="form-check-label" for="ikon8">Pasar</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon9" value="Masjid">
                        <label class="form-check-label" for="ikon9">Masjid</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon10" value="Kelenteng">
                        <label class="form-check-label" for="ikon10">Kelenteng</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon11" value="Pura">
                        <label class="form-check-label" for="ikon11">Pura</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon12" value="Station">
                        <label class="form-check-label" for="ikon12">Station</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon13" value="Terminal">
                        <label class="form-check-label" for="ikon13">Terminal</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon14" value="Sungai 250K">
                        <label class="form-check-label" for="ikon14">Sungai 250K</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon15" value="Batas DAS">
                        <label class="form-check-label" for="ikon15">Batas DAS</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon16" value="Batas Admin">
                        <label class="form-check-label" for="ikon16">Batas Admin</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon17" value="Bathymetry">
                        <label class="form-check-label" for="ikon17">Bathymetry</label>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="ikon" id="ikon18" value="Station">
                        <label class="form-check-label" for="ikon18">Data Pasoet</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>