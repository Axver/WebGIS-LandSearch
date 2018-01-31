<?php

include 'sy_proses/pr_getdatabpn.php';

session_start();
if(isset($_SESSION['username']))
   {
      if ($_SESSION['username']=='user')
      {
        header("Location:pg_pencari_lahan/index.php");
      }
      else if($_SESSION['username']=='pemilik') {
            header("Location:pg_pemilik_lahan/index.php");
      }
   }
else {
  //Do Nothing
}
// if (!isset($_SESSION['username'])){
//
// echo "<script> alert('Anda Harus Log In Terlebih Dahulu!!'); window.location = '../index.php'; </script>";
// // header("Location:../index.php");
// }
// else
//  {
//     if($_SESSION['roleuser']!='user')
//     {
//         header("Location: ../index.php");
//     }
//  }

// if($_SESSION['id']=="3")
// {
//   header("Location: ../index.php");
// }
// else {
//   header("Location: ../pg_chat/index.php");
// }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js" integrity="sha512-C7BBF9irt5R7hqbUm2uxtODlUVs+IsNu2UULGuZN7gM+k/mmeG4xvIEac01BtQa4YIkUpp23zZC4wIwuXaPMQA==" crossorigin=""></script>
    <style >
        #mapid {
            height: 600px;
        }
    </style>


    <link rel="stylesheet" href="plugin_swal/sweet-alert.css">
    <link rel="stylesheet" href="plugin_swal/swal-forms.css">

    <!-- This is what you need -->
    <script src="plugin_swal/sweet-alert.js"></script>
    <script src="plugin_swal/swal-forms.js"></script>

    <script src="plugin_swal/live-demo.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/jquery-ui.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="fw_leaflet/leaflet-src.js"></script>
    <link rel="stylesheet" href="fw_leaflet/leaflet.css"/>
    <script src="plugin_draw/src/Leaflet.draw.js"></script>
    <script src="plugin_draw/src/Leaflet.Draw.Event.js"></script>
    <link rel="stylesheet" href="plugin_draw/src/leaflet.draw.css"/>
    <script src="plugin_draw/src/Toolbar.js"></script>
    <script src="plugin_draw/src/Tooltip.js"></script>
    <script src="plugin_draw/src/ext/GeometryUtil.js"></script>
    <script src="plugin_draw/src/ext/LatLngUtil.js"></script>
    <script src="plugin_draw/src/ext/LineUtil.Intersect.js"></script>
    <script src="plugin_draw/src/ext/Polygon.Intersect.js"></script>
    <script src="plugin_draw/src/ext/Polyline.Intersect.js"></script>
    <script src="plugin_draw/src/ext/TouchEvents.js"></script>
    <script src="plugin_draw/src/draw/DrawToolbar.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.Feature.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.SimpleShape.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.Polyline.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.Marker.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.Circle.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.CircleMarker.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.Polygon.js"></script>
    <script src="plugin_draw/src/draw/handler/Draw.Rectangle.js"></script>
    <script src="plugin_draw/src//edit/EditToolbar.js"></script>
    <script src="plugin_draw/src/edit/handler/EditToolbar.Edit.js"></script>
    <script src="plugin_draw/src/edit/handler/EditToolbar.Delete.js"></script>
    <script src="plugin_draw/src/Control.Draw.js"></script>
    <script src="plugin_draw/src/edit/handler/Edit.Poly.js"></script>
    <script src="plugin_draw/src/edit/handler/Edit.SimpleShape.js"></script>
    <script src="plugin_draw/src/edit/handler/Edit.Rectangle.js"></script>
    <script src="plugin_draw/src/edit/handler/Edit.Marker.js"></script>
    <script src="plugin_draw/src/edit/handler/Edit.CircleMarker.js"></script>
    <script src="plugin_draw/src/edit/handler/Edit.Circle.js"></script>
    <script>
        function biddinghome()
        {
            swal("Warning!!","Anda harus Login terlebih dahulu untuk menggunakan menu ini");
        }
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AndaLand</title>

    <!-- Bootstrap core CSS -->
    <link href="fw_bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="fw_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="fw_bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="fw_bootstrap/css/freelancer.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Image slide -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .mySlides {display:none;}
    </style>
</head>


<body id="page-top" style="background-color:#ffffe6;">

<!-- Navigation -->
<nav style="background-color:#f4edbd;" class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <img class="img-responsive" style="width:200px; height:100px;" href="index.php" src="fw_bootstrap/img/3.png" alt="" >
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div style="background-color:##664d00; font-family: 'Freestyle Script'; font-size: 20px" class="collapse navbar-collapse" id="navbarResponsive" >
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="testsaja()" id='sample1' href="#">Home</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="biddinghome()" href="#">Bidding</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="loginpage.php">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
    <div class="container" style="background-color:#ffffe6">
        <div class="w3-content w3-section" style="max-width:500px">
            <img class="mySlides" src="a.jpg" style="width:100%">
            <img class="mySlides" src="m.jpg" style="width:100%">
            <img class="mySlides" src="s.jpg" style="width:100%">
            <img class="mySlides" src="v.jpg" style="width:100%">
        </div>

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 10000); // Change image every 2 seconds
            }
        </script>
    </div>


</header>

<!-- Portfolio Grid Section -->
<section style="margin-left:200px;"class="portfolio" id="portfolio">
    <div class="container">

        <select id="filterdata" onchange="filter()">
            <option>
                Kepadatan Penduduk
            </option>
            <option>
                Curah Hujan
            </option>

            <option>
                Dataran rendah
            </option>

            <option>
                Dataran Tinggi
            </option>
        </select>
        <button  type="button" class="btn btn-success" name="button" onclick="refresh()"> Refresh  </button>
        <button type="button" class="btn btn-info" name="button" onclick="tampildigitasi()"> Luas (m2)</button>
        <select>
            <option>
                <=5000
            </option>
            <option>
                5001-10000
            </option>
            10001-20000
            <option>
                20000-40000
            </option>

            <option>
                >40000
            </option>
        </select>
        <div class="row">
            <div class="col-sm-8">
                <div id="map" style=" width: 900px; height: 600px; border: 1px solid #ccc"></div>
            </div>
            <div class="col-sm-4">

                <div class="panel panel-info">

                    <div id="tampillogin" class="panel-body">

                    </div>

                </div>



            </div>


        </div>
    </div>
    <script>
        function refresh()
        {
            document.location.reload();
        }
    </script>

    <script>
        var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
            map = new L.Map('map', { center: new L.LatLng(-6.282250, 106.801443), zoom: 13 }),
            drawnItems = L.featureGroup().addTo(map);
        L.control.layers({
            'osm': osm.addTo(map),
            "google": L.tileLayer('http://www.google.com/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
                attribution: 'google'
            })
        }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
        // map.addControl(new L.Control.Draw({
        //     edit: {
        //         featureGroup: drawnItems,
        //         poly: {
        //             allowIntersection: false
        //         }
        //     },
        //     draw: {
        //         polygon: {
        //             allowIntersection: false,
        //             showArea: true
        //         }
        //     }
        // }));
        map.on(L.Draw.Event.CREATED, function (event) {
            var layer = event.layer;
            drawnItems.addLayer(layer);
            //Mengambil Data geometri Hasil Gambar
            var datagambar = drawnItems.toGeoJSON();
            //Convert ke geojson
            convertedData = JSON.stringify(datagambar.features);
            var length= convertedData.length;
            var substr = convertedData.substr(80,length);
            var hapus_belakang=substr.slice(0,-5);
            // var replace=hapus_belakang.replace('],[','"')
            var res = hapus_belakang.replace(/],/gi, '"');
            var res1 = res.replace(/,/gi, ' ');
            var res2 = res1.replace(/]/gi, ' ');
            var res3= res2.replace(/\[/g,'');
            res4=res3.replace(/"/g,',');
            document.getElementById("geometry").value=res4;
            // console.log(hapus_belakang);
            console.log(res4);
        });
    </script>


    <script>
        function passing_php()
        {
            var sertipikat=document.getElementById("id").value;
            window.location.href = "http://localhost/magang_1/sy_proses/pr_inputbpn.php?geom=" + res4 + "&nosertipikat=" + sertipikat;
        }
    </script>
    <!-- Script untuk Filter Lahan -->
    <script>
        function infolahan()
        {
            swal("Anda Hasur Login Terlebih Dahulu");
        }
        function booking()
        {
            swal("Anda Hasur Login Terlebih Dahulu");
        }
        function filter()
        {  ubah=document.getElementById('filterdata').value;
            argeojson = <?php echo json_encode($hasil) ?>;
            if(ubah=="Dataran rendah")
            {
                var poli;
                console.log(argeojson);
                for(var i = 0; i < argeojson.features.length; i++){
                    if (argeojson.features[i].properties.ketinggian=='Dataran Rendah' ) {
                        // console.log(argeojson.features[i].properties.gid);
                        poli=L.geoJSON(argeojson.features[i].geometry).addTo(map);
                        poli.setStyle({fillColor: '#000000'});
                        poli.setStyle({fillOpacity: 0.5});
                        poli.setStyle({color: 'none'});
                        poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/> <img src='image/example.jpg'> <br/><button onclick='infolahan()' id='buttoninfo' class='btn btn-info'> Info Lahan </button> <button onclick='booking()' class='btn btn-info'>Booking</button>");
                    }
                    else if(argeojson.features[i].properties.ketinggian=='Dataran Tinggi' )
                    {
                    }
                    else
                    {
                    }
                }
            }
            else if(ubah=="Dataran Tinggi")
            {
                var poli;
                console.log(argeojson);
                for(var i = 0; i < argeojson.features.length; i++){
                    if (argeojson.features[i].properties.ketinggian=="Dataran Rendah" ) {
                    }
                    else if(argeojson.features[i].properties.ketinggian=='Dataran Tinggi' )
                    {
                        poli=L.geoJSON(argeojson.features[i].geometry).addTo(map);
                        poli.setStyle({fillColor: '#FF0000'});
                        poli.setStyle({fillOpacity: 0.5});
                        poli.setStyle({color: 'none'});
                        poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/><img src='image/example.jpg'> <br/><button onclick='infolahan()' class='btn btn-info'> Info Lahan </button> <button class='btn btn-info' onclick='booking();'>Booking</button>");
                    }
                    else
                    {
                    }
                }
            }
        }
    </script>

    <script>
        //Verifikasi User untuk masuk menu bidding
        function verifikasi_user()
        {
            var roleuser='<?php echo $_SESSION['roleuser']?>';
            // console.log(roleuser);
            if (roleuser=='bpn')
            {
                console.log('hai ini testing');
                swal("Warning!!","Anda harus login terlebih dahulu");
            }
        }
    </script>

    </div>
</section>



<!-- Footer -->
<footer style="background-color:#664d00;" class="footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Graha Irama lt. 6 suite A - B, Jl. H. R. Rasuna Said No.1-2, RT.6/RW.4
                    <br>Kuningan Timur, Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-google-plus"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                            <i class="fa fa-fw fa-dribbble"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">About Freelancer</h4>
                <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
                    <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Your Website 2017</small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>



<!-- Bootstrap core JavaScript -->
<script src="fw_bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="fw_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="fw_bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="fw_bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="fw_bootstrap/js/jqBootstrapValidation.js"></script>
<script src="fw_bootstrap/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="fw_bootstrap/js/freelancer.min.js"></script>




</body>

</html>
