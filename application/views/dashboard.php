<div class="w-100">
    <div class="landing-section ls-1">
        <?php $this->load->view('header'); ?>
        <div class="w-75 p-0 p-lg-5 ml-5">
            <h1>WELCOME TO</h4>
            <h2>DISASTER KNOWLEDGE MANAGEMENT SYSTEM</h4>
        </div>
    </div>
    <div class="landing-section ls-2">
        <div>
            <h1 class="ls-header">Disaster Knowledge Management System</h1>
            <div class="w-75 d-flex flex-row">
                <img src="<?=base_url()?>assets/images/landing/line-v.png">
                <h2 class="ls-content">Disaster Knowledge Management System atau sistem manajemen pengetahuan kebencanaan, dapat diartikan sebagai sebuah tindakan sistematis untuk mengidentifikasi, mendokumentasikan, dan mendistribusikan segenap jejak pengetahuan kebencanaan yang relevan kepada setiap pemangku kebijakan maupun masyarakat, dengan tujuan meningkatkan kapasitas pengetahuan kebencanaan. Knowledge Management System yang baik harus menyediakan mekanisme bagi penggunanya untuk memberikan masukan mengenai kredibilitas suatu knowledge.</h2>
            </div>
        </div>
    </div>
    <div class="landing-section ls-3 p-4 d-flex align-items-center">
        <div class="row mx-0 pb-0">
            <div class="col-lg-6 ls-3-left">
                <h1 class="ls-header">Tentang MH-EWS</h1>
                <h2 class="ls-content">Multi-Hazards Early Warning System atau Sistem Peringatan Dini Multi Ancaman Bencana terdiri atas empat kuadran yang mencakup peningkatan pengetahuan risiko, peningkatan sistem pemantauan dan layanan peringatan, peningkatan sistem dan kapasitas manajemen bencana, dan layanan peringatan dini yang tepat waktu, akurat, dan inklusif.</h2>
                <img class="line-h" src="<?=base_url()?>assets/images/landing/line-h.png">
            </div>
            <div class="col-lg-6 ls-3-right">
                <img class="image-content" src="<?=base_url()?>assets/images/landing/ls-3.png">
            </div>
        </div>
    </div>
    <div class="landing-section ls-4 d-flex align-items-center">
        <div class="row mx-0 p-5">
            <div class="col-lg-12 d-flex flex-column align-items-center">
                <img src="<?=base_url()?>assets/images/landing/ls-4.png">
            </div>
            <div class="col-lg-12 d-flex flex-column align-items-center">
                <h1 class="ls-header">Pembelajaran</h1>
                <h2 class="ls-content" id="contentStairs">Bagian dari rantai proses pengumpulan, pengelolaan penyimpanan, dan penyebarluasan data dan informasi yang berkontribusi pada terciptanya pengetahuan tacit dan eksplisit untuk pengambilan keputusan (rantai proses data, information, knowledge, and wisdom/DIKW) agar tercipta masyarakat yang tangguh bencana, terutama pada masyarakat yang rentan terhadap ancaman bencana gempabumi dan tsunami di Indonesia.</h2>
            </div>
        </div>
    </div>
<div>
<?php $this->load->view('footer'); ?>
<script>
    $(document).ready(function() {
        let text = $("#contentStairs").html();
            text = text.split('');
        let insert = "<br> &emsp;&emsp;";
        let result = "";
        let j = 50;
        let k = 0;
        for (let i = 0; i < text.length; i+=50+k) {
                    console.log(text[i] != ' ');
            if(text[i] != ' '){
                while(k < i){
                    console.log("Hasil: "+k+" :"+((50+k)));
                    if(text[i+k] == ' ') {
                        if(i == 327) k-=4;
                        if(i == 387) k-=10;
                        text.splice(i+k, 0, insert);
                        insert += "&emsp;&emsp;";
                        break;
                    }
                    k++;
                }
            } else {
                text.splice(i, 0, insert);
                insert += "&emsp;&emsp;";
            }
            j+=i;
        }
        result = text.join('');
        $("#contentStairs").html(result);
    });
</script>