<?php
	include 'sy_proses/pr_checkusername.php';

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>

        function redirectdaftar()
        {
            window.location.href = "http://localhost/magang_1/registerpage.php";
        }

    </script>
    <script>

        a= <?php echo json_encode($arrayuser) ?>
        console.log(a);

    </script>
    <script>
        function tampilkanPreview(gambar,idpreview){
            //                membuat objek gambar
            var gb = gambar.files;

            //                loop untuk merender gambar
            for (var i = 0; i < gb.length; i++){
                //                    bikin variabel
                var gbPreview = gb[i];
                var imageType = /image.*/;
                var preview=document.getElementById(idpreview);
                var reader = new FileReader();

                if (gbPreview.type.match(imageType)) {
                    //                        jika tipe data sesuai
                    preview.file = gbPreview;
                    reader.onload = (function(element) {
                        return function(e) {
                            element.src = e.target.result;
                        };
                    })(preview);

                    //                    membaca data URL gambar
                    reader.readAsDataURL(gbPreview);
                }else{
                    //                        jika tipe data tidak sesuai
                    alert("Type file tidak sesuai. Khusus image.");
                }

            }
        }
    </script>
    <meta charset="utf-8">
    <title>Register Page</title>
    <style media="screen">

    </style>
    <!--Tulisan-->
    <link href='https://fonts.googleapis.com/css?family=Andada' rel='stylesheet'>
    <style>
        body {
            font-family: 'Andada';
            font-size: 14px;
        }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        a:hover {
            background-color: #ddd;
            color: black;
        }

        .previous {
            background-color: #b38f00;
            color: black;
        }

        .next {
            background-color: #f1f1f1;
            color: white;
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


<body style="margin-top: 1px; position: center">

<div class="container" style="background-color: #FFFFFF; position: center">

    <div id="login"  class="panel panel-info"  >
    <div class="panel-head" style="background-color:#b38f00" >
        <h1 style="text-align:center; color: #FFFFFF"><b>Sign Up</b></h1>
    </div>

    <div class="container" style="margin-left: 15px" >
        <div class="row" >

                <p>Upload Berkas (Image)</p>
                <label for="ktp"><b>Scan KTP</b></label>
                <input id="ktp" class="button button1" type="file" required>

                <label for="kk"><b>Scan KK</b></label>
                <input id="kk" class="button button1" type="file" required>

                <label for="sertipikat"><b>Scan Sertipikat Tanah</b></label>
                <input id="sertipikat" class="button button1" type="file" required>

                <label for="sertipikat"><b>Scan Dokumen 1</b>></label>
                <input class="button button1" type="file" required>

                <label for="sertipikat"><b>Scan Dokumen 2</b></label>
                <input class="button button1" type="file" required>



                <form id="myForm" action="" method="get">
                    <label for="sertipikat"><b>Photo</b></label>
                    <!--'preview' di bawah ini adalah id element img-->
                    <input class="button button1" type="file" accept="image/*"  onchange="tampilkanPreview(this,'preview')" />

                    <!--element image untuk menampilkan preview-->
                    <img style="height:60%;" id="preview" src="" alt="" width="60%"/>


                    <button type="submit" class="button button1">Submit</button>

                    <div style="margin-right: 20px">
                        <a href="registerpage.php" class="previous">&laquo; Previous</a>
                        <a href="#" class="next">Next &raquo;</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


</body>
</html>
