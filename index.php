<?php
include 'sy_proses/pr_getdatabpn.php'; ?>

<!DOCTYPE html>
<html lang="en">

  <head>

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

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">AndaLand</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Dashboard</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio-modal-6">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="fw_bootstrap/img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">AndaLand</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">AndaLandnya Jual Beli Tanah di Indonesia</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">

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



          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta name="description" content="">
          <meta name="author" content="">

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
               <div id="map" style="width: 750px; height: 600px; border: 1px solid #ccc"></div>
             </div>
             <div class="col-sm-4">

               <div class="panel panel-info">

                 <div class="panel-body">
                    <div id="booking" style="background-color:#18BC9C; height: 600px;">

                      <div class="col-sm-4">
                        <div class="panel panel-info" style="width:300px;height:400px;background-color:#4DD0E1; position:center;">
                           <div class="panel-head">
                           <h2 class="text-secondary text-uppercase mb-0">Login Page</h2>
                           </div>

                           <div class="panel-body" style="margin-top:50px;">
                             <form class="" action="sy_proses/pr_login.php" method="post">
                               <div class="row">
                                 <div class="col-sm-4">
                                     <label for="username">Username</label>
                                 </div>
                                 <div class="col-sm-6">
                                   <input type="text" name="username">
                                 </div>

                               </div>

                               <div class="row">

                                 <div class="col-sm-4">
                                   <label for="password">Password</label>
                                 </div>
                                 <div class="col-sm-6">
                                   <input type="text" name="password">
                                 </div>

                               </div>

                               <input type="submit" class="btn btn-primary" name="Login" value="LOGIN">
                             </form>

                             <br/>
                             <p>Lupa Password? Klik Disini</p>
                           </div>
                        </div>

                      </div>
                 </div>
               </div>
             </div>
             </div>
          </div>

      <script>
     function refresh(){
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
              map.addControl(new L.Control.Draw({
                  edit: {
                      featureGroup: drawnItems,
                      poly: {
                          allowIntersection: false
                      }
                  },
                  draw: {
                      polygon: {
                          allowIntersection: false,
                          showArea: true
                      }
                  }
              }));
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

                      poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/> <img src='image/example.jpg'> <br/><button class='btn btn-info'> Info Lahan </button> <button onclick='booking();' class='btn btn-info'>Booking</button>");



                  }
                  else if(argeojson.features[i].properties.ketinggian=='Dataran Tinggi' )
                  {
                  }
                  else{
                  }
              }
              }
              else if(ubah=="Dataran Tinggi"){
                          var poli;
                          console.log(argeojson);
                        for(var i = 0; i < argeojson.features.length; i++){
                            if (argeojson.features[i].properties.ketinggian=='Dataran Rendah' ) {
                            }
                            else if(argeojson.features[i].properties.ketinggian=='Dataran Tinggi' ){
                              poli=L.geoJSON(argeojson.features[i].geometry).addTo(map);
                              poli.setStyle({fillColor: '#FF0000'});
                              poli.setStyle({fillOpacity: 0.5});
                              poli.setStyle({color: 'none'});


                              poli.bindPopup("<b>Info Lahan!</b><br>Disini Info Seputar Lahan<br/><img src='image/example.jpg'> <br/><button class='btn btn-info'> Info Lahan </button> <button class='btn btn-info' onclick='booking();'>Booking</button>");

                            }
                            else{
                            }
                        }
                        }
          }
          </script>

          <script>
         //Verifikasi User untuk masuk menu bidding
          function verifikasi_user(){
            var roleuser='<?php echo $_SESSION['roleuser']?>';
            // console.log(roleuser);
            if (roleuser=='bpn'){
              console.log('hai ini testing');

              window.location='pg_bidding/pencari/index.php';


            }
          }
          function booking(){
          console.log("Button Booking di tekan");
          alert("Button Booking Ditekan!!!");
          }
          </script>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="fa fa-download mr-2"></i>
            Download Now!
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <!-- <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto"> -->
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <!-- <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Footer -->
    <footer class="footer text-center">
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
        <small>Copyright &copy; AndaLand Team</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Data Lahan</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="fw_bootstrap/img/portfolio/menu_maps.png" alt="">
              <p class="mb-5">Lihat Peta lahan kosong yang tersedia</p>
              <a class="btn btn-primary btn-lg rounded-pill" href="pg_lahan/index.php">
                <i class="fa fa-ok"></i>
                Lihat Map</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Test Perubahannya</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="fw_bootstrap/img/portfolio/bid.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="fw_bootstrap/img/portfolio/message.png" alt="">
              <p class="mb-5">Test Apa yang terjadi</p>
              <a class="btn btn-primary btn-lg rounded-pill" href="pg_chat/index.php">
                <i class="fa fa-ok"></i>
                Perpesanan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="fw_bootstrap/img/portfolio/game.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="fw_bootstrap/img/portfolio/safe.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">

            <div class="col-sm-4">
              <div class="panel panel-info" style="width:400px; height:400px;background-color:#4DD0E1; position:center;">
                 <div class="panel-head">
                 <h2 class="text-secondary text-uppercase mb-0">Login Page</h2>
                 </div>

                 <div class="panel-body" style="margin-top:50px;">
                   <form class="" action="sy_proses/pr_login.php" method="post">
                     <div class="row">
                       <div class="col-sm-4">
                           <label for="username">Username</label>
                       </div>
                       <div class="col-sm-6">
                         <input type="text" name="username">
                       </div>

                     </div>

                     <div class="row">

                       <div class="col-sm-4">
                         <label for="password">Password</label>
                       </div>
                       <div class="col-sm-6">
                         <input type="text" name="password">
                       </div>

                     </div>

                     <input type="submit" class="btn btn-primary" name="Login" value="LOGIN">
                   </form>

                   <br/>
                   <p>Lupa Password? Klik Disini</p>
                 </div>
              </div>

            </div>
            <div class="col-sm-8">

              <div class="panel panel-sucess">

                <div class="panel-head">
                  <h1 style="align:center;">REGISTER</h1>
                </div>

                <div class="panel-body">
                  <input type="text" name="" value=""> <br/>
                  <input type="text" name="" value=""><br/>
                  <input type="text" name="" value=""><br/>
                  <select class="" name="">
                    <option value="">Pembeli</option>
                    <option value="">Penjual</option>
                  </select><br/>
                  <input type="file" name="" value=""><br/>
                  <input type="file" name="" value=""><br/>
                  <input type="file" name="" value=""><br/>
                  <input type="file" name="" value=""><br/>
                  <input type="submit" class="btn btn-sucess" name="" value="Register"><br/>
                </div>

              </div>

            </div>
            <!-- <div class="col-lg-8 mx-auto"> -->

              <!-- <hr class="star-dark mb-5"> -->
              <!-- <img class="img-fluid mb-5" src="fw_bootstrap/img/portfolio/submarine.png" alt=""> -->
              <!-- <p class="mb-5">Login Page Disini</p> -->
              <!-- <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a> -->


            <!-- </div> -->
          </div>
        </div>
      </div>
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
