<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js" integrity="sha512-C7BBF9irt5R7hqbUm2uxtODlUVs+IsNu2UULGuZN7gM+k/mmeG4xvIEac01BtQa4YIkUpp23zZC4wIwuXaPMQA==" crossorigin=""></script>

  </style>
  <script type="text/javascript" src="../../jquery/jquery.js"></script>
  <script type="text/javascript" src="../../jquery/jquery-ui.js"></script>
  <script type="text/javascript" src="../../js/main.js"></script>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lahan Lahan</title>

  <!-- Bootstrap core CSS -->
  <link href="../../fw_bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../../fw_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="../../fw_bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="../../fw_bootstrap/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top" onload="hidden()">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../../index.php">Lahan</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sy_proses/pr_logout.php">Log Out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
      <h1 class="text-uppercase mb-0">Lelang yang anda ikuti</h1>
      <hr class="star-light">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No Sertipikat</th>
            <th>Bid tertinggi</th>
            <th>Batas Waktu</th>
          </tr>
        </thead>
      </table>
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio" id="portfolio">
    <div class="container">

      <h2>Bidding List:</h2>
      <p>Untuk tanah : no.100.19.888.118</p>
      <h3>Info Bidding</h3>
      <p>
      <h6>Open Bid : 1000.000.000</h6>
      <h6>Bid: 10.000.000</h6>
      <h6>Batas: xx jam xx menit</h6>
      </p>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Bid</th>
            <th>Waktu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>1.010.000.000</td>
            <td>12:00:01</td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>1.050.000.000</td>
            <td>13:00:00</td>
          </tr>
          <tr>
            <td>July</td>
            <td>2.000.000.000</td>
            <td>14:00:00</td>
          </tr>
        </tbody>
      </table>

   <button type="button" class="btn btn-info" name="button" onclick="show()">Start Bid</button>
   <button type="button" class="btn btn-success" id="button1" name="button">2.010.000.000</button>
   <button type="button" class="btn btn-success" id="button2" name="button">2.020.000.000</button>
   <button type="button" class="btn btn-success" id="button3" name="button">2.030.000.000</button>
   <button type="button" class="btn btn-success" id="button4" name="button">2.040.000.000</button> <br/>
   <input type="text" id="kelipatan1" name="kelipatan" value="Kelipatan Bid">
   <button type="button" id="kelipatan2" class="btn btn-info" name="button" onclick="kelipatan()">Bid Kelipatan</button>

    </div>


  </section>

  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Location</h4>
          <p class="lead mb-0">2215 John Daniel Drive
            <br>Clark, MO 65243</p>
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
  <script src="../../fw_bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="../../fw_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../../fw_bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../fw_bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="../../fw_bootstrap/js/jqBootstrapValidation.js"></script>
  <script src="../../fw_bootstrap/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../../fw_bootstrap/js/freelancer.min.js"></script>
  <script>
  function hidden()
  {

  document.getElementById("button1").style.visibility = "hidden";
  document.getElementById("button2").style.visibility = "hidden";
  document.getElementById("button3").style.visibility = "hidden";
  document.getElementById("button4").style.visibility = "hidden";
  document.getElementById("kelipatan1").style.visibility = "hidden";
  document.getElementById("kelipatan2").style.visibility = "hidden";
  }

  function show()
  {

    document.getElementById("button1").style.visibility = "visible";
    document.getElementById("button2").style.visibility = "visible";
    document.getElementById("button3").style.visibility = "visible";
    document.getElementById("button4").style.visibility = "visible";
    document.getElementById("kelipatan1").style.visibility = "visible";
    document.getElementById("kelipatan2").style.visibility = "visible";

  }


  function kelipatan()
  {

   var bid=document.getElementById("kelipatan1").value;
  var jumlah=2000000000;
  jumlah=parseInt(bid)+jumlah;
  console.log(jumlah);
  document.getElementById("button1").innerText=jumlah;
  document.getElementById("button2").innerText =jumlah+parseInt(bid);
  document.getElementById("button3").innerText =jumlah+parseInt(bid)+parseInt(bid);
  document.getElementById("button4").innerText =jumlah+parseInt(bid)+parseInt(bid)+parseInt(bid);
  }

  </script>

</body>

</html>
