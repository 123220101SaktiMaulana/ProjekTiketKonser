<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Josefin+Sans:wght@700&family=Poppins:wght@600&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="style.css"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/MBTA.svg/2048px-MBTA.svg.png">
    <title>Home | Tiketin</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black; padding: 0px;">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto " style="font-family: Poppins; font-size:13px; color:white;">
                <a class="nav-link" href="#aboutus">Tentang Kami</a>
                <a class="nav-link" href="login.php">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <div class="editnav">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="navbar-brand" href=""><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/MBTA.svg/2048px-MBTA.svg.png" alt="" style="height: 40px; margin-right: 1px;"></a>
            <a class="navbar-brand" href="" style="color:white ; font-family:Poppins;">TIKETIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav mr-auto">
                    <li class="nav-item" style="margin-left: 100px;">

                        <form class="form-inline" action="searchevent.php" method="POST">
                            <input class="form-control mr-sm-0" type="text" name="search" placeholder="Cari Event Disini" aria-label="Search" style="border-top-right-radius: 0px ; border-bottom-right-radius: 0px; margin-right: 0px; width: 450px;">
                            <button type="submit" style="border-top-right-radius: 7px; border-bottom-right-radius: 7px;
                    padding-top: 7px; padding-left: 10px; padding-right: 10px; padding-bottom: 7px; border:none; margin-left: 0px;display:flex"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="24" fill="gray" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg></button>
                        </form>
                </div>

                <div class="navbar-nav ml-auto">
                    <a href="keranjang.php"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="white" class="bi bi-cart4" style="margin-right: 20px;" viewBox="0 0 16 16">
                            <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                        </svg></a>
                    <a class="btn " href="register.php" role="button" style="font-size:16px; border-color: white; font-family: Poppins; color:white;border-radius:10px;">Daftar</a>
                    <a class="btn" href="login.php" role="button" style=" font-size:16px;margin-left: 10px; background-color: blueviolet ; border-style:none; color: black; font-family: Poppins; color:white;border-radius:10px;">Masuk</a>


                </div>
            </div>
        </nav>
    </div>






    <center>
        <div class="editcarro container">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://comfortezone.id/storage/images/comfortepedia/tiket-konser-world-tour-niki-sold-out-dalam-7-menit.jpg" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Nicole World Tour 2023</h5>
                            <p>Nantikan kehadiran NIKI di Indonesia</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://pict.sindonews.net/dyn/850/pena/news/2023/02/01/157/1011883/7-lagu-cigarettes-after-sex-yang-wajib-didengerin-sebelum-ke-konser-nvj.jpg " style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cigarettes After S*x</h5>
                            <p>Greg Gonzales akan membawakan Album terbarunya pada konser di Yogyakarta yang akan datang</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.unsplash.com/photo-1470229722913-7c0e2dbbafd3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Kemeriahan Konser 2023</h5>
                            <p>Jangan Sampai kelewatan konser-konser yang seru!!!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.whiteboardjournal.com/wp-content/uploads/2023/06/unnamed-4.png" style="height: 300px;" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Rex Orange Country</h5>
                            <p>Jangan galau sendiri, ayo galau bersama Alexander James O'Connor di Senayan City, Jakarta</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </center>

    <h2 class="container" style="margin-bottom: 6px; margin-left: 190px; font-family: Poppins;">Populer Akhir Akhir Ini</h2>



    <div class="editmedia container">

        <div class="media-scroller container">

            <?php

            include 'konek.php';
            $query = mysqli_query($konek, "select * from tambahevent");
            while ($data = mysqli_fetch_array($query)) { ?>

                <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                    <div class="media-element">
                        <img src="<?php echo $data['gambar']; ?>" alt="">
                        <div style="display: flex; ">
                            <div class="editdate" style="color:blueviolet ;">
                                <center><?php echo $data['tanggal']; ?></center>
                            </div>
                            <b class="subtitlemedia"> <?php echo $data['judul']; ?></b> <br>
                        </div>

                        <div style="margin-left: 10px; margin-right: 10px ; color: gray;"><?php echo $data['tempat']; ?><br></div>
                        <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ;color: rgb(17, 17, 17);">Mulai dari Rp. <?php echo $data['harga']; ?></div>
                    </div>
                </a>
            <?php } ?>

        </div>
    </div>


    <div class="editmidmedia " style=" background-image: url('https://media.istockphoto.com/id/968935456/id/vektor/abstrak-kemewahan-mengaburkan-abu-abu-gelap-dan-gradien-hitam-digunakan-sebagai-dinding.jpg?s=612x612&w=0&k=20&c=PL_auLcm2relxm2izvfsX8aOBKCZm2E36KVVvaDTUcQ=');
; margin-left: 0px; margin-right: 0px; margin-top: 100px; margin-bottom: 100px; padding: 50px; display: flex; gap: 30px; ">

        <h2 style="margin-bottom: 30px; margin-left: 17px; color: white; font-size: 50px; font-family: Poppins;">Nantikan Artis-Artis Populer yang Akan Mendatang</h2>

        <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/07/B600147-Cover-Daftar-Artis-88rising.jpg" alt="">
        <img src="https://blogs-images.forbes.com/ogdenpayne/files/2017/02/Daniel-Caesar-NEw-by-Keith-Henry.jpg" alt="">

    </div>

    <h2 style="margin-bottom: 6px; margin-left: 220px; font-family: Poppins;">Event Pilihan</h2>

    <div class="editmedia container">

        <div class="media-scroller">

            <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://imgcache.joox.com/music/joox/photo/video_1000/5/d/9baf6fa07fd26ccfea95dd0d511c735d.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>01<br>
                                JUL</center>
                        </div>
                        <b class="subtitlemedia"> Giveon Full Heartbreak</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Jakarta Pusat, Gambir Expo Kemayoran <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.650.000</div>
                </div>
            </a>

            <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://radartasik.id/wp-content/uploads/2023/09/Konser-Tunggal-Fiersa-Besari-Bakal-Hadirkan-Kolaborasi-Bareng-Nabila-Taqiyyah.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>05<br>
                                NOV</center>
                        </div>
                        <b class="subtitlemedia"> Fiersa Besari Rungkad Concert</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Malang, Grand City Mall Malang <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.99.800</div>
                </div>
            </a>
            <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://www.infobdg.com/v2/wp-content/uploads/2020/02/FOR-REVENGE-FORMATION-2020.jpg" alt="">
                    <div style="display: flex;">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>15<br>
                                MAR</center>
                        </div>
                        <b class="subtitlemedia"> For Revenge Concert Party</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Yogyakarta, Amplaz Ambarukmo <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.139.500</div>
                </div>
            </a>

            <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://akcdn.detik.net.id/visual/2016/05/24/c9e98bf2-c13f-4d3c-910d-3a29ae554c9d_169.jpg?w=650" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>14<br>
                                APR</center>
                        </div>
                        <b class="subtitlemedia"> The 1975 World Tour 2023</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Jakarta Pusat, The Grand City Mall Indonesia <br><br></div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.770.000</div>
                </div>
            </a>

            <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://www.statefarmarena.com/assets/img/Static_Digital_640x360_SZA_2023_Regional_StateFarmArena_0307_OmarApollo-1c00789eea.jpg" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>07<br>
                                AGU</center>
                        </div>
                        <b class="subtitlemedia"> SZA World Tour 2023</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Bandung, Hall Hartono Mall Bandung <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.571.000</div>
                </div>
            </a>

            <a href="keranjang.php" style="text-decoration:none; color: rgba(62, 2, 62, 0.975);">
                <div class="media-element">
                    <img src="https://www.whiteboardjournal.com/wp-content/uploads/2023/06/unnamed-4.png" alt="">
                    <div style="display: flex; ">
                        <div class="editdate" style="color:blueviolet ;">
                            <center>13<br>
                                MEI</center>
                        </div>
                        <b class="subtitlemedia"> ROC World Tour 2023</b> <br>
                    </div>

                    <div style="margin-left: 10px; margin-right: 10px ; color: gray;">Jakarta Selatan, Pakuwon Mall <br><br> </div>
                    <div style="text-align: center; margin-bottom: 5px; margin-top: 9px ; color: rgb(17, 17, 17);">Mulai dari Rp.891.500</div>
                </div>
            </a>

        </div>


    </div>
    <div class="footer" id="aboutus" style="background-color: black; margin-left: 0px; margin-right: 0px; margin-top:100px; padding: 30px; display: flex; text-align: center;">



        <table class="table table-borderless responsive-2" style="color: white; font-size: 10px; text-align: left; margin-left: 300px; margin-right: 300px; overflow-x:auto;">
            <thead>
                <tr>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 400px;">Tentang Tiketin</li>
                    </th>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 160px;">Media Partner</li>
                    </th>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 160px;">Lokasi Event</li>
                    </th>
                    <th scope="col">
                        <li class="list-group" style="margin-bottom: 10px; width: 160px;">Social Media</li>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" style="text-align: justify;">Selamat datang di Tiketin, portal loket online terdepan yang menyediakan solusi lengkap untuk kebutuhan pemesanan dan penjualan tiket acara konser. Kami adalah mitra ideal bagi Anda yang menginginkan pengalaman yang mudah, cepat, dan aman dalam mengakses berbagai kegiatan dan layanan</td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group">Dana</li>
                            <li class="list-group">Gopay</li>
                            <li class="list-group">Bisnis.com</li>
                            <li class="list-group">DetikKonser</li>


                        </ul>

                    </td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group">Jakarta</li>
                            <li class="list-group">Yogyakarta</li>
                            <li class="list-group">Surabaya</li>
                            <li class="list-group">Malang</li>
                            <li class="list-group">Bandung</li>
                            <li class="list-group">Semarang</li>
                            <li class="list-group">Surakarta</li>

                        </ul>
                    </td>
                    <td>
                        <ul class="list-group">
                            <li class="list-group" style="margin-bottom: 10px; width: 100px;">

                                <a href="https://id-id.facebook.com/login/device-based/regular/login/?login_attempt=1"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-facebook" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg></a>
                            </li>
                            <li class="list-group" style="margin-bottom: 10px;"><a href="https://www.instagram.com/accounts/login/"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-instagram" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg></a> </li>
                            <li class="list-group" style="margin-bottom: 10px;"> <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiaWQifQ%3D%3D%22%7D"><svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" fill="white" class="bi bi-twitter" viewBox="0 0 16 16" style="margin-left: 10px;margin-bottom: 10px;margin-top:0px;">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg></a> </li>


                        </ul>
                    </td>

            </tbody>
        </table>


    </div>

    <div class="editmidmedia" style="background-color: rgb(40, 40, 40); padding: 9px; color: white; font-size: 9px; font-family: Poppins;">


        <center>&copy;Projek Web May & Sakti 2023</center>

    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>