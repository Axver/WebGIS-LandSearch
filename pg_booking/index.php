<?php

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


 ?>


 <!DOCTYPE html>
 <html lang="en">



     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>AndaLand</title>

     <!-- Grid Galerry Component -->
     <link rel="shortcut icon" href="../plugin_gallery/GridGallery/favicon.ico">
     <link rel="stylesheet" type="text/css" href="../plugin_gallery/GridGallery/css/demo.css" />
     <link rel="stylesheet" type="text/css" href="../plugin_gallery/GridGallery/css/component.css" />
     <script src="../plugin_gallery/GridGallery/js/modernizr.custom.js"></script>

     <!-- Bootstrap core CSS -->
     <link href="../fw_bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom fonts for this template -->
     <link href="../fw_bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <!-- Plugin CSS -->
     <link href="../fw_bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

     <!-- Custom styles for this template -->
     <link href="../fw_bootstrap/css/freelancer.min.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Image slide -->
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <style>
         .mySlides {display:none;}
     </style>

     <script src="../fw_bootstrap/vendor/jquery/jquery.min.js"></script>

</head>
<body>
 </head>


 <body id="page-top" style="background-color:#ffffe6;">

 <!-- Navigation -->
 <nav style="background-color:#f4edbd; height:70px;" class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
         <img class="img-responsive" style="width:200px; height:100px;" href="index.php" src="../fw_bootstrap/img/3.png" alt="" >
         <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
             Menu
             <i class="fa fa-bars"></i>
         </button>
         <div style="background-color:##664d00; font-family: 'Freestyle Script'; font-size: 20px" class="collapse navbar-collapse" id="navbarResponsive" >
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="testsaja()" id='sample1' href="../index.php">Home</a>
                 </li>
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" onclick="biddinghome()" href="#">Bidding</a>
                 </li>
                 <li class="nav-item mx-0 mx-lg-1">
                     <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../sy_proses/pr_logout.php">Logout</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <!-- Header -->



 </header>

 <!-- Portfolio Grid Section -->
 <section style="margin-left:200px; margin-top:100px;"class="portfolio" id="portfolio">
     <div class="container">


       <div class="container">
         <div class="filter_notaris" style="height:100px;">
          Cari Notaris: <input type="text" name="" value="">
         </div>
         <div id="grid-gallery" class="grid-gallery">
           <section class="grid-wrap">
             <ul class="grid">
               <li class="grid-sizer"></li><!-- for Masonry column width -->
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/1.png" alt="img01"/>
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/2.png" alt="img02"/>
<figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                   <!-- <figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption> -->
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/3.png" alt="img03"/>
                   <!-- <figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/4.png" alt="img04"/>
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                   <!-- <figcaption><h3>Chillwave nihil occupy</h3><p>In post-ironic gluten-free deserunt, PBR&amp;B non pork belly cupidatat polaroid. </p></figcaption> -->
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/5.png" alt="img05"/>
                   <!-- <figcaption><h3>Kale chips lomo biodiesel</h3><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/6.png" alt="img06"/>
                   <!-- <figcaption><h3>Exercitation occaecat</h3><p>Street chillwave hoodie ea gentrify.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/1.png" alt="img01"/>
                   <!-- <figcaption><h3>Selfies viral four</h3><p>Raw denim duis Tonx Shoreditch labore swag artisan High Life cred, stumptown Schlitz quinoa flexitarian mollit fanny pack.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/2.png" alt="img02"/>
                   <!-- <figcaption><h3>Photo booth skateboard</h3><p>Vinyl squid ex High Life. Paleo Neutra nulla master cleanse, Helvetica et enim nesciunt esse.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/3.png" alt="img03"/>
                   <!-- <figcaption><h3>Ex fashion axe</h3><p>Qui nesciunt et, in chia cliche irure. Eu YOLO nihil mollit twee locavore, tempor keytar asymmetrical irure aute sriracha consequat.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/4.png" alt="img04"/>
                   <!-- <figcaption><h3>Thundercats next level</h3><p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct trade vero. </p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/5.png" alt="img05"/>
                   <!-- <figcaption><h3>Bushwick selvage synth</h3><p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha authentic chambray hella umami sed distillery master cleanse.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/1.png" alt="img01"/>
                   <!-- <figcaption><h3>Bottle wayfarers locavore</h3><p>Once there was a little asparagus, he was green and lonely.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/1.png" alt="img01"/>
                   <!-- <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/2.png" alt="img02"/>
                   <!-- <figcaption><h3>Vice velit chia</h3><p>Laborum tattooed iPhone, Schlitz irure nulla Tonx retro 90's chia cardigan quis asymmetrical paleo. </p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/3.png" alt="img03"/>
                   <!-- <figcaption><h3>Brunch semiotics</h3><p>Ex disrupt cray yr, butcher pour-over magna umami kitsch before they sold out commodo.</p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/4.png" alt="img04"/>
                   <!-- <figcaption><h3>Chillwave nihil occupy</h3><p>In post-ironic gluten-free deserunt, PBR&amp;B non pork belly cupidatat polaroid. </p></figcaption> -->
                   <figcaption><h3>Letterpress asymmetrical</h3><p>Chillwave hoodie ea gentrify aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <!-- <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/5.png" alt="img05"/>
                   <figcaption><h3>Kale chips lomo biodiesel</h3><p>Pariatur food truck street art consequat sustainable, et kogi beard qui paleo. </p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/6.png" alt="img06"/>
                   <figcaption><h3>Exercitation occaecat</h3><p>Street chillwave hoodie ea gentrify.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/1.png" alt="img01"/>
                   <figcaption><h3>Selfies viral four</h3><p>Raw denim duis Tonx Shoreditch labore swag artisan High Life cred, stumptown Schlitz quinoa flexitarian mollit fanny pack.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/2.png" alt="img02"/>
                   <figcaption><h3>Photo booth skateboard</h3><p>Vinyl squid ex High Life. Paleo Neutra nulla master cleanse, Helvetica et enim nesciunt esse.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/3.png" alt="img03"/>
                   <figcaption><h3>Ex fashion axe</h3><p>Qui nesciunt et, in chia cliche irure. Eu YOLO nihil mollit twee locavore, tempor keytar asymmetrical irure aute sriracha consequat.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/4.png" alt="img04"/>
                   <figcaption><h3>Thundercats next level</h3><p>Portland nulla butcher ea XOXO, consequat Bushwick Pinterest elit twee pickled direct trade vero. </p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/5.png" alt="img05"/>
                   <figcaption><h3>Bushwick selvage synth</h3><p>Bicycle rights flannel Shoreditch, art party laboris Bushwick sriracha authentic chambray hella umami sed distillery master cleanse.</p></figcaption>
                 </figure>
               </li>
               <li>
                 <figure>
                   <img src="../plugin_gallery/GridGallery/img/thumb/1.png" alt="img01"/>
                   <figcaption><h3>Bottle wayfarers locavore</h3><p>Once there was a little asparagus, he was green and lonely.</p></figcaption>
                 </figure>
               </li> -->
             </ul>
           </section><!-- // grid-wrap -->
           <section class="slideshow">
             <ul>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Letterpress asymmetrical</h3>
                     <p>Kale chips lomo biodiesel stumptown Godard Tumblr, mustache sriracha tattooed cray aute slow-carb placeat delectus. Letterpress asymmetrical fanny pack art party est pour-over skateboard anim quis, ullamco craft beer.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/1.png" alt="img01"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Vice velit chia</h3>
                     <p>Chillwave Echo Park Etsy organic Cosby sweater seitan authentic pour-over. Occupy wolf selvage bespoke tattooed, cred sustainable Odd Future hashtag butcher.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/2.png" alt="img02"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Brunch semiotics</h3>
                     <p>IPhone PBR polaroid before they sold out meh you probably haven't heard of them leggings tattooed tote bag, butcher paleo next level single-origin coffee photo booth.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/3.png" alt="img03"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Chillwave nihil occupy</h3>
                     <p>Vice cliche locavore mumblecore vegan wayfarers asymmetrical letterpress hoodie mustache. Shabby chic lomo polaroid, scenester 8-bit Portland Pitchfork VHS tote bag.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/4.png" alt="img04"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Kale chips lomo biodiesel</h3>
                     <p>Chambray Schlitz pug YOLO, PBR Tumblr semiotics. Flexitarian YOLO ennui Blue Bottle, forage dreamcatcher chillwave put a bird on it craft beer Etsy.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/5.png" alt="img05"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Exercitation occaecat</h3>
                     <p>Cosby sweater hella lomo Thundercats VHS occupy High Life. Synth pop-up readymade single-origin coffee, fanny pack tousled retro. Fingerstache mlkshk ugh hashtag, church-key ethnic street art pug yr.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/6.png" alt="img06"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Selfies viral four</h3>
                     <p>Ethnic readymade pug, small batch XOXO Odd Future normcore kogi food truck craft beer single-origin coffee banh mi photo booth raw denim. XOXO messenger bag pug VHS. Forage gluten-free polaroid, twee hoodie chillwave Helvetica.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/1.png" alt="img01"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Photo booth skateboard</h3>
                     <p>Thundercats pour-over four loko skateboard Brooklyn, Etsy sriracha leggings dreamcatcher narwhal authentic 3 wolf moon synth Portland. Shabby chic photo booth Blue Bottle keffiyeh, McSweeney's roof party Carles.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/2.png" alt="img02"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Ex fashion axe</h3>
                     <p>Ennui Blue Bottle shabby chic, organic butcher High Life tattooed meggings jean shorts Brooklyn sartorial polaroid. Cray raw denim +1, bespoke High Life Odd Future banh mi chillwave Marfa kogi disrupt paleo direct trade 90's Godard. </p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/3.png" alt="img03"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Thundercats next level</h3>
                     <p>Typewriter authentic PBR, iPhone mixtape fixie post-ironic fingerstache Pitchfork artisan. Wayfarers master cleanse occupy, Tonx lo-fi swag Truffaut irony whatever Blue Bottle readymade PBR gluten-free. Lomo Pinterest Banksy fap. Retro ennui you probably haven't heard of them iPhone, PBR fashion axe polaroid.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/4.png" alt="img04"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Bushwick selvage synth</h3>
                     <p>Schlitz deserunt pour-over consectetur. Selfies plaid asymmetrical farm-to-table, cred gastropub photo booth narwhal non roof party velit raw denim slow-carb meggings pug. Tempor post-ironic seitan cliche bicycle rights. Meh viral Williamsburg, quinoa 8-bit kale chips YOLO Marfa accusamus.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/5.png" alt="img05"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Bottle wayfarers locavore</h3>
                     <p>Aliqua High Life art party fixie farm-to-table. Kitsch Echo Park shabby chic, narwhal fugiat Cosby sweater asymmetrical gastropub tofu. Authentic minim Pinterest Blue Bottle beard, aliqua chia XOXO dolor freegan banh mi vegan fugiat.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/1.png" alt="img01"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Letterpress asymmetrical</h3>
                     <p>Pickled hoodie Pinterest 90's proident church-key chambray. Salvia incididunt slow-carb ugh skateboard velit, flannel authentic hoodie lomo fixie photo booth farm-to-table. Minim meggings Bushwick, semiotics Vice put a bird.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/1.png" alt="img01"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Vice velit chia</h3>
                     <p>Tattooed assumenda chambray cray officia. 90's mollit ethnic church-key ex eu pop-up gentrify. Tonx raw denim eu, bitters nesciunt distillery Neutra pop-up. Drinking vinegar Helvetica Truffaut tattooed.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/2.png" alt="img02"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Brunch semiotics</h3>
                     <p>Gentrify High Life adipisicing, duis slow-carb kogi Tumblr raw denim freegan Echo Park. Fingerstache laboris pork belly messenger bag, you probably haven't heard of them vegan twee Intelligentsia Vice Etsy pickled put a bird on it Godard roof party. Meggings small batch dreamcatcher velit.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/3.png" alt="img03"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Chillwave nihil occupy</h3>
                     <p>Marfa exercitation non, beard +1 hashtag cardigan gluten-free mixtape church-key ugh eu Portland leggings. Ennui farm-to-table fingerstache keytar Echo Park tattooed. Seitan qui artisan, aliquip cupidatat sunt Portland wayfarers duis.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/4.png" alt="img04"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Kale chips lomo biodiesel</h3>
                     <p>Lomo church-key whatever, seitan laborum drinking vinegar lo-fi semiotics nihil meh. Skateboard irure before they sold out Banksy. Narwhal High Life lomo aliqua drinking vinegar. PBR&B placeat proident, craft beer forage DIY nostrud meh flexitarian keytar Helvetica.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/5.png" alt="img05"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Exercitation occaecat</h3>
                     <p>Skateboard Truffaut bicycle rights seitan normcore. Culpa lo-fi ennui, Pinterest before they sold out Echo Park roof party sapiente aesthetic consequat Truffaut freegan voluptate. Kogi banh mi vero nihil, freegan gluten-free cliche. Forage Etsy laboris anim normcore, McSweeney's ex.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/6.png" alt="img06"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Selfies viral four</h3>
                     <p>Viral roof party locavore flexitarian nihil fanny pack actually Odd Future anim commodo. Sunt yr aute, enim quis plaid sartorial duis leggings lo-fi gluten-free. Tote bag flexitarian pug stumptown, Cosby sweater try-hard ethnic scenester. Mumblecore +1 hoodie accusamus skateboard slow-carb, Thundercats Godard placeat craft beer meh enim trust fund.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/1.png" alt="img01"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Photo booth skateboard</h3>
                     <p>Culpa pour-over cray nesciunt dreamcatcher. Meggings distillery cillum raw denim voluptate, single-origin coffee lo-fi ethical iPhone four loko nihil salvia. Biodiesel ea Intelligentsia quis deep v, American Apparel trust fund slow-carb synth semiotics quinoa Brooklyn pour-over nulla Godard.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/2.png" alt="img02"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Ex fashion axe</h3>
                     <p>Bespoke irony tousled nihil flexitarian, salvia tempor nostrud Bushwick hashtag Austin ethnic disrupt. Beard Helvetica nihil, chia craft beer Wes Anderson keytar dolore. Irure incididunt flexitarian photo booth cillum, YOLO deserunt Brooklyn artisan. Brunch assumenda irony, Blue Bottle roof party DIY ullamco quis.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/3.png" alt="img03"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Thundercats next level</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/4.png" alt="img04"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Bushwick selvage synth</h3>
                     <p>Ethical Truffaut tofu food truck cred cornhole. Irure umami Austin cornhole blog ethical. Aliqua yr Truffaut, adipisicing hashtag Shoreditch eiusmod tempor literally vinyl.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/5.png" alt="img05"/>
                 </figure>
               </li>
               <li>
                 <figure>
                   <figcaption>
                     <h3>Bottle wayfarers locavore</h3>
                     <p>Pork belly irony Shoreditch fashion axe DIY. Portland banjo irony, squid gentrify Austin fixie church-key magna. Marfa artisan Echo Park, McSweeney's banjo sunt keytar tofu. Brooklyn PBR single-origin coffee disrupt polaroid ut, gluten-free XOXO plaid magna.</p>
                   </figcaption>
                   <img src="../plugin_gallery/GridGallery/img/large/1.png" alt="img01"/>
                 </figure>
               </li>
             </ul>
             <nav>
               <span class="icon nav-prev"></span>
               <span class="icon nav-next"></span>
               <span class="icon nav-close"></span>
             </nav>
             <div class="info-keys icon">Navigate with arrow keys</div>
           </section><!-- // slideshow -->
         </div><!-- // grid-gallery -->
       </div>

       <script src="../plugin_gallery/GridGallery/js/imagesloaded.pkgd.min.js"></script>
       <script src="../plugin_gallery/GridGallery/js/masonry.pkgd.min.js"></script>
       <script src="../plugin_gallery/GridGallery/js/classie.js"></script>
       <script src="../plugin_gallery/GridGallery/js/cbpGridGallery.js"></script>
       <script>
         new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
       </script>


     </div>







     </div>
 </section>



 <!-- Footer -->
 <!-- <footer style="background-color:#664d00;" class="footer text-center">
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
 </footer> -->

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

 <script src="../fw_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->



 <script src="../fw_bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

 <!-- Contact Form JavaScript -->
 <script src="../fw_bootstrap/js/jqBootstrapValidation.js"></script>
 <script src="../fw_bootstrap/js/contact_me.js"></script>

 <!-- Custom scripts for this template -->
 <script src="../fw_bootstrap/js/freelancer.min.js"></script>




 </body>

 </html>
