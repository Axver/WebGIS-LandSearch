<?php
	// include '../sy_proses/pr_getdata.php';
	include '../sy_proses/pr_getdatabpn.php';
	session_start();
	if (!isset($_SESSION['username'])){
		echo "<script> alert('Anda Harus Log In Terlebih Dahulu!!'); window.location = '../index.php'; </script>";
// header("Location:../index.php");
}
else
{
    if($_SESSION['roleuser']!='user')
    {
        header("Location: ../index.php");
    }
}
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

    <link rel="stylesheet" href="../plugin_swal/sweet-alert.css">
    <link rel="stylesheet" href="../plugin_swal/swal-forms.css">

    <!-- This is what you need -->
    <script src="../plugin_swal/sweet-alert.js"></script>
<script src="../plugin_swal/swal-forms.js"></script>

<script src="../plugin_swal/live-demo.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js" integrity="sha512-C7BBF9irt5R7hqbUm2uxtODlUVs+IsNu2UULGuZN7gM+k/mmeG4xvIEac01BtQa4YIkUpp23zZC4wIwuXaPMQA==" crossorigin=""></script>
<style>
    #mapid {
        height: 600px;
    }
    .slidecontainer {
        width: 100%; /* Width of the outside container */
    }
    /* The slider itself */
    .slider {
        -webkit-appearance: none;  /* Override default CSS styles */
        appearance: none;
        width: 100%; /* Full-width */
        height: 25px; /* Specified height */
        background: #f4edbd; /* Grey background */
        outline: none; /* Remove outline */
        opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
        -webkit-transition: .2s; /* 0.2 seconds transition on hover */
        transition: opacity .2s;
    }
    /* Mouse-over effects */
    .slider:hover {
        opacity: 1; /* Fully shown on mouse-over */
    }
    /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */
    .slider::-webkit-slider-thumb {
        -webkit-appearance: none; /* Override default look */
        appearance: none;
        width: 25px; /* Set a specific slider handle width */
        height: 25px; /* Slider handle height */
        background: #b38f00; /* Green background */
        cursor: pointer; /* Cursor on hover */
    }
    .slider::-moz-range-thumb {
        width: 25px; /* Set a specific slider handle width */
        height: 25px; /* Slider handle height */
        background: #b38f00;
        cursor: pointer; /* Cursor on hover */
    }
</style>
<script type="text/javascript" src="../jquery/jquery.js"></script>
<script type="text/javascript" src="../jquery/jquery-ui.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
<script src="../fw_leaflet/leaflet-src.js"></script>
<link rel="stylesheet" href="../fw_leaflet/leaflet.css"/>
<script src="../plugin_draw/src/Leaflet.draw.js"></script>
<script src="../plugin_draw/src/Leaflet.Draw.Event.js"></script>
<link rel="stylesheet" href="../plugin_draw/src/leaflet.draw.css"/>
<script src="../plugin_draw/src/Toolbar.js"></script>
<script src="../plugin_draw/src/Tooltip.js"></script>
<script src="../plugin_draw/src/ext/GeometryUtil.js"></script>
<script src="../plugin_draw/src/ext/LatLngUtil.js"></script>
<script src="../plugin_draw/src/ext/LineUtil.Intersect.js"></script>
<script src="../plugin_draw/src/ext/Polygon.Intersect.js"></script>
<script src="../plugin_draw/src/ext/Polyline.Intersect.js"></script>
<script src="../plugin_draw/src/ext/TouchEvents.js"></script>
<script src="../plugin_draw/src/draw/DrawToolbar.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Feature.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.SimpleShape.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Polyline.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Marker.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Circle.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.CircleMarker.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Polygon.js"></script>
<script src="../plugin_draw/src/draw/handler/Draw.Rectangle.js"></script>
<script src="../plugin_draw/src//edit/EditToolbar.js"></script>
<script src="../plugin_draw/src/edit/handler/EditToolbar.Edit.js"></script>
<script src="../plugin_draw/src/edit/handler/EditToolbar.Delete.js"></script>
<script src="../plugin_draw/src/Control.Draw.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Poly.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.SimpleShape.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Rectangle.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Marker.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.CircleMarker.js"></script>
<script src="../plugin_draw/src/edit/handler/Edit.Circle.js"></script>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>AndaLand</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Bootstrap core CSS -->
<link href="../fw_bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- Custom fonts for this template -->
<link href="../fw_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Plugin CSS -->
<link href="../fw_bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="../fw_bootstrap/css/freelancer.min.css" rel="stylesheet">

        <!-- Image slide -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .mySlides {display:none;}
        </style>

        <!--Tulisan-->
        <link href='https://fonts.googleapis.com/css?family=Andada' rel='stylesheet'>
        <style>
            body {
                font-family: 'Andada';
                font-size: 14px;
            }
        </style>

        <!--Button-->
        <style>
            .button {
                background-color: #b38f00;
                border: none;
                border-radius: 8px;
                color: white;
                padding: 10px 14px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }

            .button1{
                background-color: white;
                color: black;
                border: 2px solid #b38f00;
            }
            .button1:hover{
                background-color: #b38f00;
                color: white;
            }

        </style>

</head>

<body onload="checklat()" id="page-top" style="background-color:#ffffff;">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav" style="background-color:#f4edbd">
   <img class="img-responsive" style="width:170px; height:50px;" href="index.php" src="../fw_bootstrap/img/3.png" alt="" >

        <!-- <button class="button button1" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
							<li class="nav-item mx-0 mx-lg-1">
									<img  style="width:50px; height:50px;"class="img-responsive" src="../image/notif.png" alt="">
									<div id="notif">

									</div>
							</li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../pg_chat/index.php">Perpesanan</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../pg_bidding/pencari">Bidding</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sy_proses/pr_logout.php">Log Out</a>
                </li>
            </ul>
        </div>

</nav>

<!-- Header -->
<header class="masthead bg-primary text-white text-center" style="background-color: #ffffff;"
    <div class="container">
	<div class="w3-content w3-section" style="background-color: #ffffff;padding-left:30px;padding-right:30px;">
            <img class="mySlides" src="../a.jpg" style="width:100%; height: 400px">
            <img class="mySlides" src="../m.jpg" style="width:100%; height: 400px">
            <img class="mySlides" src="../s.jpg" style="width:100%; height: 400px">
            <img class="mySlides" src="../v.jpg" style="width:100%; height: 400px;">
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
<section class="portfolio" id="portfolio">
    <div class="row">
        <div class="col-sm-4" style="padding-left:30px;">
            <button type="button" class="button button1" onclick="locateUser()" name="button"> Your Position</button>

            <br><br>

            <div><b>Radius</b></div>
            <div class="slidecontainer">
                <input onchange="getradius()" type="range" min="1" max="1000" value="1" class="slider" id="myRange">
            </div>
            <div id="demo"></div><div>meter</div>

            <br><br>

            <div><b>Price</b></div>
            <br>
            <div class="slidecontainer">
                <input onchange="getharga()"type="range" min="10000000" max="1000000000" value="10000000" class="slider" id="myRange1">
            </div>
            <div id="demo1"></div>

            <br><br>

            <div><b>Filter By:</b>
                <br>
                <select id="filterdata" onchange="filter()">
                    <option>Kepadatan Penduduk</option>
                    <option>Curah Hujan</option>
                    <option>Dataran rendah</option>
                    <option>Dataran Tinggi</option>
                </select>
                <button  type="button" class="button button1" name="button" onclick="refresh()"> Refresh  </button>
            </div>
            <br><br>
            <div><b>Luas Tanah</b> (m2)
                <br>
                <select>
                    <option><= 5.000</option>
                    <option>5.001 - 10.000</option>
                    <option>10.001 - 20.000</option>
                    <option>20.001 - 40.000</option>
                    <option>>40.000</option>
                </select>
                <button type="button" class="button button1" name="button" onclick="tampildigitasi()">Luas Tanah</button>
            </div>

            <br>

            <div><b>Facility</b>
                <br>
                <select class="form-control">
                    <option>Rumah Sakit</option>
                    <option>Halte</option>
                    <option>Masjid</option>
                    <option>Pasar</option>
                </select>
            </div>
        </div>
            <div class="col-sm-8">
                <div id="map" style="width: 850px; height: 600px; border: 1px solid #ccc"></div>
            </div>

        </div>
	<div class="col-sm-8">
		<div id="mapweather">
              	`<?php include 'weather.php'; ?>
		</div>
	</div>
        <script>
            function refresh()
            {
                document.location.reload();
            }


        </script>

        <script>
            // var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            //     osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            //     osm = L.tileLayer(osmUrl, { maxZoom: 18, attribution: osmAttrib }),
            //     map = new L.Map('map', { center: new L.LatLng(-6.282250, 106.801443), zoom: 13 }),
            //     drawnItems = L.featureGroup().addTo(map);
            // L.control.layers({
            //     'osm': osm.addTo(map),
            //     "google": L.tileLayer('http://www.google.com/maps/vt?lyrs=s@189&gl=cn&x={x}&y={y}&z={z}', {
            //         attribution: 'google'
            //     })
            // }, { 'drawlayer': drawnItems }, { position: 'topleft', collapsed: false }).addTo(map);
            map.on('click', function(e) {
                // var marker = L.marker([e.latlng.lat, e.latlng.lat]).addTo(map);
                swal("Posisi Anda berhasil dipilih");
                var newMarker = new L.marker(e.latlng).addTo(map);
                latitude=e.latlng.lat;
                longitude=e.latlng.lng;
            });
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
                            poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/> <img src='../image/example.jpg'> <br/><button class='btn btn-info' onclick='infolahan()'> Info Lahan </button> <button onclick='booking();' class='btn btn-info'>Booking</button>");
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
                        if (argeojson.features[i].properties.ketinggian=='Dataran Rendah' ) {
                        }
                        else if(argeojson.features[i].properties.ketinggian=='Dataran Tinggi' )
                        {
                            poli=L.geoJSON(argeojson.features[i].geometry).addTo(map);
                            poli.setStyle({fillColor: '#FF0000'});
                            poli.setStyle({fillOpacity: 0.5});
                            poli.setStyle({color: 'none'});
                            poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/><img src='../image/example.jpg'> <br/><button class='btn btn-info'> Info Lahan </button> <button class='btn btn-info' onclick='booking();'>Booking</button>");
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
                    window.location='../pg_bidding/pencari/index.php';
                }
            }
            //Fungsi untuk membooking dengan data dummies
            // function booking()
            // {
                // console.log("Button Booking di tekan");
                // // alert("Button Booking Ditekan!!!");
                // document.getElementById("element_1").innerHTML="<h3>Booking Tanah</h3>";
                // document.getElementById("element_2").innerHTML="<div class='container'><table class='table'><thead><tr><th>Info</th><th>Detil</th></tr></thead><tbody><tr><td>Luas</td><td>10000 m2</td></tr><tr><td>Harga</td><td>1.000.000.000</td></tr><tr><td>July</td><td>Dooley</td></tr></tbody></table></div>";
                // document.getElementById("element_3").innerHTML="Dijual Oleh : Jesi Namora (Pemilik)";
                // document.getElementById("element_4").innerHTML="Lelang? Ya!";
                // document.getElementById("element_5").innerHTML="<button class='btn btn-info' onclick='bookingtanah()'> Booking </button>";
								// document.getElementById("element_6").innerHTML="<button class='btn btn-info' onclick='weathershow()'> Lihat Kondisi Geografis Sekitar </button>";
            // }
            // function infolahan()
            // {
                // document.getElementById("element_1").innerHTML="<h3>Booking Tanah</h3>";
                // document.getElementById("element_2").innerHTML="<h3>Booking Tanah</h3>";
                // document.getElementById("element_3").innerHTML="<h3>Booking Tanah</h3>";
                // document.getElementById("element_4").innerHTML="<h3>Booking Tanah</h3>";
                // document.getElementById("element_5").innerHTML="<h3>Booking Tanah</h3>";
            // }

						function booking()
	{
	swal({
	title: "Apakah Anda Yakin?",
	text: "Data Booking anda akan dikirimkan kepada pemilik lahan ",
	icon: "warning",
	buttons: true,
	dangerMode: true,
	})
	.then((willDelete) => {
	if (willDelete) {
    swal("Selamat!! Booking anda berhasil!", {
	icon: "success",
    });
	} else {
    swal("Booking Gagal!!");
	}
	});
	}
	function infolahan()
	{
	swal("Info Lahan Ditampilkan Disini");
	}
	function locateUser(){
	map.locate({setView : true});
	swal("Klik Dimana Posisi Anda");
	a="1";
	}

            function bookingtanah()
            {
                // alert("Button Booking Tanah Ditekan");
                window.location = "../pg_booking/index.php";
            }
            function locateUser(){
                map.locate({setView : true});
                swal("Klik Dimana Posisi Anda");
                a="1";
            }

						function weathershow()
						{


						}
        </script>

        <script>
            var slider = document.getElementById("myRange");
            var output = document.getElementById("demo");
            output.innerHTML = slider.value; // Display the default slider value
            // Update the current slider value (each time you drag the slider handle)
            slider.oninput = function() {
                output.innerHTML = this.value;
            }
        </script>

        <script>
            var slider1 = document.getElementById("myRange1");
            var output1 = document.getElementById("demo1");
            output1.innerHTML = slider1.value; // Display the default slider value
            // Update the current slider value (each time you drag the slider handle)
            slider1.oninput = function() {
                output1.innerHTML = this.value;
            }
        </script>

        <script>
            function getradius()
            {
                if (a=="0")
                {
                    swal("Pilih Posisi Anda Terlebih Dahulu!")
                }
                else {
                    var radiusdata=document.getElementById("myRange").value;
                    var circle = L.circle([latitude, longitude], {
                        color: 'red',
                        fillColor: '#DDB786',
                        fillOpacity: 0.5,
                        radius: radiusdata
                    }).addTo(map);
                    //Menambahkan marker disetiap radius (hardcoded)
                    for(i=0;i<5;i++)
                    {
                        if(i%2==0)
                        {latitude=latitude+0.00021;
                            longitude=longitude+0.00021;
                        }
                        else {
                            latitude=latitude+0.00042;
                            longitude=longitude-0.00042;
                        }
                        var marker = L.marker([latitude, longitude]).addTo(map);
                    }
                }
            }
            function getharga()
            {
                swal("Tampilkan Daerah Marker sesuai harga");
            }
        </script>

        <script>
            function checklat()
            {
                a="0";
            }
        </script>

    </div>
</section>



<!-- Footer -->
<footer class="footer text-center" style="background-color:#b38f00;">
    <div class="container" >
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0"  >
                <h4 class="text-uppercase mb-4"><b>Location</b></h4>
                <p class="lead mb-0">Graha Irama lt. 6 suite A - B <br> Jl. H. R. Rasuna Said No.1-2, RT.6/RW.4
                    <br>Kuningan Timur, Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0"  >
                <h4 class="text-uppercase mb-4"><b>Around the Web</b></h4>
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
            <div class="col-md-4"  >
                <h4 class="text-uppercase mb-4" style=""><b>About AndaLand</b></h4>
                <p class="lead mb-0">AndaLand is a market-place that trades land/estates that are all over Indonesia. By using AndaLand, you can see lands/estates that are suitable for your needs.
            </div>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; AndaLand</small>
    </div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>



<!-- Bootstrap core JavaScript -->
<script src="../fw_bootstrap/vendor/jquery/jquery.min.js"></script>
<script src="../fw_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../fw_bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../fw_bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="../fw_bootstrap/js/jqBootstrapValidation.js"></script>
<script src="../fw_bootstrap/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="../fw_bootstrap/js/freelancer.min.js"></script>
\



</body>

</html>
