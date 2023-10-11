<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="<?=base_url()?>assets/images/landing/logo_header.png" alt="Logo" width="685" height="150">
            </a>

            <!-- Toggler button for mobile -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                <div class="dropdown">
                    <button class="btn custom-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right custom-dropdown" aria-labelledby="dropdownMenuButton">
                         
                    <a style="padding-left:20px; border: bottom 1px;"><b>Menu</b><hr style="background-color: #fff"></a>  
                    <a class="dropdown-item" href="#">Beranda</a>
                    <a class="dropdown-item" href="#">Repositori</a>
                    <a class="dropdown-item" href="<?php echo site_url('pengetahuancontroller/tampilkan_pengetahuan'); ?>">Pengetahuan</a>
                    <a class="dropdown-item" href="#">Geospasial</a>
                    <a class="dropdown-item" href="#">Tentang</a>
                    <a class="dropdown-item" href="#">Pembelajaran</a>
                    <a class="dropdown-item" href="#">Forum Diskusi</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                    <a class="dropdown-item" href="#">Log in</a>
                 </div>
                 </div>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
        <nav id="sidebar" class="bg-light1">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <h4>DKMS</h4>
                    </a>
                </li>
                
                <li class="nav-item sidebar-dropdown">
                        <a class="nav-link"><img src="<?=base_url()?>assets/images/landing/iconprovinsi.png" alt="Icon">PROVINSI <img src="<?=base_url()?>assets/images/landing/iconpanah.png" style="padding-left:17px;" alt="Icon"></a>
                        <ul class="dropdown-list">
                            <li><a href="#" class="custom-link"style="font-size:24px">DIY</a></li>
                        </ul>
                    </li>
                <li class="nav-item sidebar-dropdown">
                        <a class="nav-link"><img src="<?=base_url()?>assets/images/landing/iconkabupaten.png" alt="Icon">KABUPATEN/KOTA <img src="<?=base_url()?>assets/images/landing/iconpanah.png" style="padding-left:10px;" alt="Icon"></a>
                        <ul class="dropdown-list">
                            <li><a href="#" class="custom-link"style="font-size:24px">Kulon Progo</a></li>
                        </ul>
                    </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconringkasan.png" alt="Icon">RINGKASAN
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconanalisis.png" alt="Icon">ANALISIS
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconsumber.png" alt="Icon">SUMBER
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconperbandingan.png" alt="Icon">PERBANDINGAN
                    </a>
                </li>
                <br>
                <li class="nav-item">
                <a class="nav-link active" href="#">
                        <b> LAPORKAN</b>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconemail.png" alt="Icon">EMAIL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconpdf.png" alt="Icon">PDF
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconexcel.png" alt="Icon">EXCEL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="<?=base_url()?>assets/images/landing/iconinfografis.png" alt="Icon">INFOGRAFIS
                    </a>
                </li>
            </ul>
        </nav>

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
    <!-- Tab content -->
    <div class="tab-content mt-3" id="myTabsContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
        <br>

<h5><b>Demografi</b></h5>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Luas Kecamatan</th>
            <th>Jumlah Laki-laki</th>
            <th>Jumlah Perempuan</th>
            <th>Total Penduduk</th>
            <th>Total Kepadatan/KM</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Galur</td>
            <td>33.56</td>
            <td>29.120.00</td>
            <td>14.712.00</td>
            <td>29.120.00</td>
            <td>868.00</td>
            
        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
    </tbody>
</table>
<br>
<h5><b>Topografi</b></h5>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Lokasi</th>
            <th>Ketinggian</th>
            <th>Kemiringan</th>
            <th>Presentase</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Bagian Utara</td>
            <td>500-1000</td>
            <td> 16&deg; - 40&deg;</td>
            <td>18.30</td>
            <td>Meliputi Kecamatan/Kapanewon ; Girimulyo, Nanggulan, Kalibawang dan Samigaluh.</td>
           
            
        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
    </tbody>
</table>

<br>
<h5><b>Hidrologi</b></h5>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Daerah Aliran Sungai</th>
            <th>Luas DAS(ha)</th>
            <th>Sub DAS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Bogowonto</td>
            <td>2.509.931.00</td>
            <td>Dekso</td>
           
            
        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
    </tbody>
</table>

<br>
<h5><b>Berdasarkan Sungai</b></h5>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Sungai</th>
            <th>Panjang (Km)</th>
            <th>Lebar(m)</th>
            <th>Kedalaman(m)</th>
            <th>Debit(m3/detik)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Progo</td>
            <td>56.70</td>
            <td>650.00</td>
            <td>6.00</td>
            <td>1500.00</td>
           
            
        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
    </tbody>
</table>

<br>
<h5><b>Geologi</b></h5>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Endapan Gunung Api</th>
            <th>Batuan Sedimen</th>
            <th>Batuan Gunung Api</th>
            <th>Kedalaman(m)</th>
            <th>Debit(m3/detik)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>550.00</td>
            <td>4.230.00</td>
            <td>0.00</td>
            <td>2.600.00</td>
            <td>7.372.00</td>
        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
    </tbody>
</table>

<br>
<h5><b>Iklim dan Curah Hujan </b></h5>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Kecamatan</th>
            <th>Curah Hujan</th>
            <th>Hari Hujan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Temon</td>
            <td>175</td>
            <td>9</td>

        </tr>
        <!-- Tambahkan baris data sesuai kebutuhan -->
    </tbody>
</table>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        <h5><b>Kawasan Perkantoran</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Peta/Gambar</th>
                        <th>Judul</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
             

                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <br>
            <h5><b>Kawasan Rawan Bencana</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Peta/Gambar</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td >1</td>
                    <td><img src="<?=base_url()?>assets/images/landing/pengetahuan/banjirkulon.png" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 141px; height: 200px;"></td>
                    <td >Peta Bahaya Banjir Kabupaten Kulonprogo</td>

                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>

            <br>
            <h5><b>Kawasan Rawan Bencana</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Peta/Gambar</th>
                        <th>Jumlah Laki-laki</th>
                        <th>Jumlah Perempuan</th>
                        <th>Total Penduduk</th>
                        <th>Kepadatan/km</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td >1</td>
                    <td >Temon</td>
                    <td><img src="<?=base_url()?>assets/images/landing/pengetahuan/petateman.png" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 141px; height: 200px;"></td>
                    <td >29.120.00</td>
                    <td >14.712.00</td>
                    <td >29.120.00</td>
                    <td >868.00</td>

                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>

            
        </div>
        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
        <h5><b>Profil Risiko Wilayah</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Bahaya</th>
                        <th>Tingkat Bahaya</th>
                        <th>Indeks Bahaya</th>
                        <th>Tingkat Kerentanan</th>
                        <th>Index Kerentanan</th>
                        <th>Tingkat Risiko</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Abrasi</td>
                        <td>Tinggi</td>
                        <td>0.69</td>
                        <td>Sedang</td>
                        <td>0.56</td>
                        <td>Rendah</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>

            <br>
            <h5><b>Peta Bahaya, Kerentanan, Kapasitas, Risiko</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Bencana</th>
                        <th>Kab/Kota</th>
                        <th>Dokumen KRB</th>
                        <th>Total Bahaya</th>
                        <th>Total Terpapar</th>
                        <th>Total Kerugian</th>
                        <th>Total Lingkungan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Gempa Bumi</td>
                        <td>Kepulauan <br>Tanimbar</td>
                        <td><button class="btn btn-info custom-button">VIEW</button></td>
                        <td>Sedang</td>
                        <td>446.579</td>
                        <td>Rendah</td>
                        <td>0</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>

            <br>

            <h5><b>Jiwa Terpapar</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Desa</th>
                        <th>Jenis Bahaya</th>
                        <th>Luas Bahaya</th>
                        <th>Jumlah Terpapar</th>
                        <th>Kerugian Fisik</th>
                        <th>Kerugian Ekonomi</th>
                        <th>Kerusakan Lingkungan (Ha)</th>
                        <th>Kelas Kerentanan</th>
                        <th>Kelas Kapasitas</th>
                        <th>Kelas Risiko</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Galur</td>
                        <td>Banaran</td>
                        <td>Tsunami</td>
                        <td>868,86</td>
                        <td>4.856,00</td>
                        <td>42.616,00</td>
                        <td>70.939.00</td>
                        <td>0.12</td>
                        <td>Sedang</td>
                        <td>Sedang</td>
                        <td>Tinggi</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
        <h5><b>Data Sejarah Kejadian Tsunami</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Tanggal</th>
                        <th>Pukul</th>
                        <th>Mag.Gempa</th>
                        <th>Volume(Tekanan)</th>
                        <th>Sumber</th>
                        <th>Lat</th>
                        <th>Long</th>
                        <th>Korban Meninggal</th>
                        <th>Catatan Pengamatan</th>
                        <th>Referensi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
        <h5><b>Konsep Mengenai Indonesia-Tsunami Early Warning System (INA TEWS)</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width:100px;">Kode Tampilan</th>
                        <th>Gambar</th>
                        <th>Penjelasan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td >1</td>
                    <td >Latar Belakang</td>
                    <td ><img src="<?=base_url()?>assets/images/landing/pengetahuan/LB1.png" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 140px; height: 80px;"></td>
                    <td >Gempa bumi dan tsunami 26 Desember 2004, Di penghujung tahun 2004, tepatnya pada hari Minggu, 26 Desember 2004, Indonesia dan delap
                    an negara lainnya di kawasan Samudera India dilanda bencana tsunami sangat hebat. Tsunami tersebut telah merenggut lebih dari seperempat juta jiwa pada beberapa negara
                    Asia. Tsunami ditimbulkan oleh gempabumi berkekuatan 9,3 SR yang berpusat di 3,3 LU - 95,98 BT Gempa tersebut telah menimbulkan getaran kuat dan patahan sepanjang ± 
                    1200 km yang membentang dari Aceh sampai ke Andaman dan Afrika yang meliputi : Indonesia, Malaysia, Thailand, Myanmar, Bangladesh, Srilangka, India, Maladewa, Somalia
                    dan Kenya. Tragedi tsunami akhir ahun 2004 tersebut telah meninggalkan kesedihan dan penderitaan luar biasa bagi masyarakat Provinsi Aceh dan Sumatera Utara khususnya
                    dan bangsa Indonesia pada umumnya. Merujuk data dari BNPB, 173.741 jiwa meninggal dan 116.368 orang dinyatakan hilang, sedangkan di Sumatera Utara 240 orang tewas, 
                    Tsunami aceh mengakibatkan ribuan rumah dan bangunan rusak, dan menyebabkan hampir setengah juta orang jadi pengungsi.</td>

                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Alat-alat yang digunakan untuk pantauan Tsunami (nama alat, penjelasan, fungsi/cara kerja, sebaran)</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th >Nama Alat</th>
                        <th>Penjelasan</th>
                        <th>Fungsi</th>
                        <th style="width:400px;">Cara Kerja</th>
                        <th >Sebaran Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td >1</td>
                    <td >Jaringan Buoy</td>
                    <td >Buoy merupakan alat ukur ketinggian tsunami di laut lepas</td>
                    <td >alat ini dikenal dengan tsunameter atau alat pengukur tsunami</td>
                    <td>alat ini terdiri atas dua bagian yang terpisah, satu ditempatkan di dasar laut yang disebut dengan Ocean Boottom Unit (OBU) Unit pengukuran bawah air ini mampu mendeteksi perubahan tekanan
                         air saat tsunami lewat. Setelah mendektesi tsunami, ,mengirimkan data ke komponen lainnya yang disebut buoy. yang mengapung di permukaan laut di dekatnya. komponen ini mengapung di permuk
                         aan laut berfungsu untuk mengukur naik turunnya permukaan air. Buoy mengirimkan data dari OBU lewat komunikasi satelit ke pusat kontrol di BPPT untuk selanjutnya diteruskan ke BMKG. Buoy 
                         dilengkapi dengan unit GPS berketepatan tinggi, yang mengukur gerakan permukaan air laut dan mampu mendeteksi tsunami yang lewat. Saat tsunami terjadi, alat ini alan segera merekam tsunami
                        dan mengirim datanya. Data dari Buoy berfungsi untuk menentukan apakah tsunami telah terbentuk</td>
                        <td></td>
                    </tr>
                    <tr>
                    <td >2</td>
                    <td >Jaringan Tide Gauge</td>
                    <td >merupakan alat pengukur pasang surut air laut</td>
                    <td >tsunami menyebabkan perubahan muka air laut, dan fungsi tide gauge ini merekam perubahan muka air laut tersebut</td>
                    <td >pengoperasian tida gauge dilakukan oleh BIG dan data secara real time juga diterima oleh BMKG. Data tersebut berfungsi untuk memverifikasi bahwa tsunami telah tiba di pantai. BIG bertanggung 
                        jawab untuk instalasi dan pengoperasian tide gauge serta jaringan GPS</td>
                    <td >alat ini ditempatkan di pantai sebagai alat komunkasi bahwa tsunami sudah tiba 
                        di pantai atau tsunami sudah reda</td>
                        
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
            <h5><b>Arti Rambu Bencana (Pengenalan Rambu, Makna Rambu dan Fungsi Rambu)</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Arti Rambu</th>
                        <th style="width:300px;">Tujuan</th>
                        <th>Informasi Bencana</th>
                        <th>Makna Rambu</th>
                        <th>Lokasi Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td >1.</td>
                    <td >Keterangan yang ditempatkan atau dipasang di kawasan rawan bencana, berupa lambang, huruf, angka, kalimat, dan/atau perpaduannya, yang beerfungsi untuk
                         menjelaskan atau memberi petunjuk, peringatan, dan larangan bagi setiap orang yang berada di kawasan rawan bencan</td>
                         <td >1. Sebagai petunjuk kepada masyarakat untuk meningkatkan kewaspadaan terhadap risiko bencana di dalam kawasan rawan bencana ; 
                            2. Standarisasi pedoman terhadap rambu dan papan informasi bencana ; 
                            3.Informasi petunjuk, peringatan, dan larangan kepada masyarakat tentyang risiko bencana di dalam kawasan rawan bencana; dan
                             4. Peningkatan kewaspadaan masyarakat terhadap risiko bencana di dalam kawasan rawan bencana.</td>
                        <td>Papan Informasi Bencana berisi informasi mengenai kawasan rawan bencana atau bahayanya, informasi kejadian bencana yang pernah
                             terjadi serta lokasi tempat kumpul sementara atau tempat pengungsian</td>
                        <td>Petunjuk tempat sementara</td>
                    <td ><img src="<?=base_url()?>assets/images/landing/pengetahuan/PetunjukTempatSementara.png" style="width:80px;height:87px;" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 140px; height: 80px;"></td>
                    </tr>
                    <tr>
                    <td >2.</td>
                    <td ></td>
                    <td ></td>
                    <td></td>
                    <td>Petunjuk tempat pengungsian</td>
                    <td ><img src="<?=base_url()?>assets/images/landing/pengetahuan/PetunjukTempatPengungsian.png" style="width:80px;height:87px;" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 140px; height: 80px;"></td>
                    </tr>
                    <tr>
                    <td >3.</td>
                    <td ></td>
                    <td></td>
                    <td></td>
                    <td>Petunjuk Lokasi Posko</td>
                    <td ><img src="<?=base_url()?>assets/images/landing/pengetahuan/PetunjukLokasiPosko.png" style="width:80px;height:87px;" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 140px; height: 80px;"></td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Sebaran Lokasi TES (Tempat Evakausi Sementara) dan TEA (Tempat Evakuasi Akhir)</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Lokasi</th>
                        <th>Sektor</th>
                        <th>Tempat Evaluasi Akhir</th>
                        <th>Zona</th>
                        <th>Tempat Evaluasi Awal/Akhir</th>
                        <th>Jalur/Jalan</th>
                        <th>Jumlah Penduduk</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>A</td>
                        <td>A</td>
                        <td>TEA Desa Janten, Temon</td>
                        <td>Zona 1</td>
                        <td>TES Desa Jangkaran, Temon</td>
                        <td>Jalan Desa Jangkaran</td>
                        <td>7.192.00</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>

            <br>
            <h5><b>Peta Evakuasi Bahaya Tsunami</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Peta Evakuasi Kecamatan Panjatan</td>
                        <td><img src="<?=base_url()?>assets/images/landing/pengetahuan/EvakuasiPanjatan.png" style="width:80px;height:87px;" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 100px; height: 71px;"></td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Desa Tangguh Bencana</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Judul</th>
                        <th>Peta/Gambar</th>
                        <th>Rekomendasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>example</td>
                        <td>example</td>
                        <td><img src="<?=base_url()?>assets/images/landing/pengetahuan/EvakuasiPanjatan.png" style="width:80px;height:87px;" alt="Deskripsi Gambar Anda" class="img-fluid" style="width: 100px; height: 71px;"></td>
                        <td>example</td>
                        <td>example</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Struktur SKPDB</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Fungsi</th>
                        <th>Tugas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Komando, kendali, koordinasi, Komunikasi dan Informasi</td>
                        <td>Menetapkan tindakan strategis dan taktis, mengorganisasikan, melaksanakan dan mengendalikan operasi. Membentuk pos lapangan di lokasi bencana di bawah komando posko, mengaktifkan dan meningkatkan pusdalops
                            menjadi pos penanganan darurat bencana, Melaksanakan komando dan pengendalian untuk pengerahan SDM, peralatan, logistik, dan penyelamatan serta berwenang memerintahkan para pejabat yang mewakili lembaga at
                            au organisasi yang terkait dalam memfasilitasi aksesibilitas PDB</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Ketersediaan Sumber Daya Peralatan</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Narahubung</th>
                        <th>Nomor Telepon</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Water Treatment(Mesin Proses)</td>
                        <td>1.00</td>
                        <td>Baik</td>
                        <td>Budi Prastawa SH</td>
                        <td>81227327542</td>
                        <td></td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Ketersediaan Sumber Daya Personil</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Lokasi Personil</th>
                        <th>Keahlian</th>
                        <th>Jumlah Personil</th>
                        <th>Narahubung</th>
                        <th>Nomor Telepon</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Kulon Progo</td>
                        <td>Tim Reaksi Cepat</td>
                        <td>20,0</td>
                        <td>Budi Prastawa SH</td>
                        <td>81227327542</td>
                        <td></td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Ketersediaan Sumber Daya Logistik</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                        <th>Satuan</th>
                        <th>Kondisi</th>
                        <th>Narahubung</th>
                        <th>Nomor Telepon</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Beras</td>
                        <td>100.00</td>
                        <td>Kg</td>
                        <td>Baik</td>
                        <td>Budi Prastawa SH</td>
                        <td>81227327542</td>
                        <td>Seksi Kedaruratan</td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
            <br>
            <h5><b>Bagan Alur Penetapan Status Darurat Bencana</b></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th style="width:50px;">No</th>
                        <th>Kecamatan</th>
                        <th>Peta/Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td></td>
                        <td><img src="<?=base_url()?>assets/images/landing/pengetahuan/BaganSopKulon.png" style="width:80px;height:87px;" alt="Deskripsi Gambar Anda" class="img-fluid" style="width:80px; height:113px;"></td>
                    </tr>
                    <!-- Tambahkan baris data sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>


            </div> 
        </div>
                    
    


        
    </div>
    
</div>


<footer class="custom-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?=base_url()?>assets/images/landing/logofooter.png" alt="Logo">
                
            </div>
            
        </div>
        <br>
        <div class="row">
            <div class="col-12">
            <b>MANAJEMEN PENGETAHUAN KEBENCANAAN </b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
            <img src="<?=base_url()?>assets/images/landing/iconhome.png"  alt="Icon"> Graha BNPB, Jl. Pramuka Kav.38 Jakarta Timur 13120 | <img src="<?=base_url()?>assets/images/landing/iconsurat.png" alt="Icon"> persuratan@bnpb.go.id | <img src="<?=base_url()?>assets/images/landing/icontelpon.png" alt="Icon"> pusdalops@bnpb.go.id
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
            <b>Copyright © 2023. All rights reserved.
</b>
            </div>
        </div>
    </div>
</footer>




