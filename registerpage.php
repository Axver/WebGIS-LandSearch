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
    <title>Sign Up</title>
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

    <style>
        input[type=text] {
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid #b38f00;
            border-radius: 4px;
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
        }

        a:hover {
            background-color: #FFFFFF;
            color: black;
        }

        .previous {
            background-color: #f1f1f1;
            color: black;
        }

        .next {
            background-color: #b38f00;
            color: white;
        }
        /* Style the horizontal ruler */

    </style>

</head>


<body style="padding: 1px" >
<div class="container" style="background-color: #FFFFFF; position: center">

        <div id="login"  class="panel panel-info"  >
            <div class="panel-head" style="background-color:#b38f00" >
                <h1 style="text-align:center; color: #FFFFFF"><b>Sign Up</b></h1>
            </div>

            <div class="container" style="margin-left: 15px" >
                <div class="row" >
            <p>Please fill in this form to create an account.</p>

            <form action="sy_proses/pr_register.php" method="post">

                    <label for="nama"><b>Full Name</b></label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Full Name" id="nama" required>

                <br>

                    <label for="email"><b>Email</b></label>
                    <input type="text" class="form-control"  name="username" placeholder="Enter Email" id="email" required>

                <br>
                    <label for="nohp"><b>Phone Number </b></label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Email" id="nohp" required>
                <br>
                    <label for="username"><b>Username</b></label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username" id="username" required>
                <br>
                    <label for="pwd"><b>Password </b></label>
                    <input type="password" name="password"class="form-control" placeholder="Enter Password" id="pwd"
                           style="border-color: #b38f00; border-radius: 4px; padding: 12px 20px; width: 50%" required>
                <label>
                    <input type="checkbox" checked="checked" style="margin-bottom:15px" > Remember me
                </label>
                <br>
                    <label  for="role"><b>Role</b></label>
                <br>
                    <select class="" name="role" style="border-color: #b38f00; border-radius: 4px; padding: 8px 20px;">
                        <option value="user">User</option>
                        <option value="pemilik">Land Owner</option>
                    </select>



                <p>By creating an account you agree to our <a href="#" style="color:#b38f00">Terms & Privacy</a>.</p>

                <button type="submit" class="button button1" style="padding: 7px 6px" >Submit</button>
            </form>
        </div>
        <div style="margin-right: 20px">
            <a href="#" class="previous">&laquo; Previous</a>
            <a href="reg1.php" class="next">Next &raquo;</a>
        </div>
</body>
</html>
