<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/customs.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/pengetahuan.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title><?=$title?></title>
    <style>
         .custom-toggle {
    background-color: #044085;
    color: #fff;
    border: none;
}
body {
    font-family: Arial, sans-serif;
}

#sidebar {
    background-color: #044085;
    color: #fff;
    width: 270px;
    transition: margin 0.3s;
    
}

#sidebar.show {
    margin-left: 0;
}

#content {
    transition: margin 0.3s;
    padding: 15px;
}

.sidebar-dropdown {
    cursor: pointer;
}

.dropdown-list {
    background-color:white;
    color:#044085;
    display:none;
}
a.custom-link {
color: #044085; /* Warna teks tautan */
background-color: white; /* Warna latar belakang tautan */
text-decoration: none; /* Menghapus garis bawah tautan */

}

#sidebar .nav-link {
    color: #fff;
}

#sidebar .nav-item:hover {
    background-color: #032c5e;
}


.custom-toggle .dropdown-toggle{
  display: none;
}

.custom-toggle:hover {
    background-color: white;
}

.dropdown-menu .dropdown-item:hover {
    background-color: white;
    color :#044085
}
.dropdown-menu,.dropdown-item {
    background-color: #044085;
    color : white;  
    width : 300px;    
}

.custom-footer {
    background-color: #044085;
    color: white;
    text-align: center;
    padding: 20px 0;
    
}

.custom-footer img {
    max-width: 100px; /* Sesuaikan lebar maksimum logo sesuai kebutuhan Anda */
}
.custom-search-box {
            width: 400px;
            height: 40px;
        }
.menu-button {
            width: 160px;
            height: 72px;
            background-color: white;
            color: #ABABAB;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border-top: 2px solid #818181; /* Warna border atas */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-left:15px;
        }
.menu-button.active {
            width: 160px;
            height: 72px;
            background-color: white;
            color: #044085;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border-top: 2px solid #044085; /* Warna border atas */
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-left:15px;
        }

        .menu-button:hover {
            color: #044085; /* Warna latar belakang saat dihover */
            border-top: 2px solid #044085;
        }

        th{
          color:#044085;
        }
        td {
        max-width: 100px; /* Ganti dengan lebar maksimum yang Anda inginkan */
         /* Menghindari teks melingkar, jika perlu */
        overflow: hidden; /* Mengatasi overflow jika konten terlalu besar */
        text-overflow: ellipsis; /* Menampilkan elipsis (...) jika konten terlalu besar */
    }
        .custom-button {
            width: 120px;
            height: 32px;
        }
        /* Custom Search Box Styling */
        .custom-search-box {
            width: 400px;
            height: 40px;
            font-size: 16px;
        }
    </style>
  </head>
  <body>

    <?php $this->load->view($app); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="<?= base_url() ?>js/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("show");
            });

            $(".sidebar-dropdown").click(function() {
                $(this).children(".dropdown-list").slideToggle();
            });
        });
    </script>
    <!-- Online tutup -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

    <footer>

    </footer>
  </body>
</html>