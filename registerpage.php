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
    <meta charset="utf-8">
    <title>Login Page</title>
    <style media="screen">

    </style>
  </head>

  <body>

    <div class="container">

      <div id="login"  class="panel panel-info" style=" background-color:#cc9e66;">
        <div class="panel-head" style="background-color:#6c2b0f;">
          <h1 style="text-align:center; color:white;">  Register Page <h1>
        </div>

        <div style="background-color:#DEB887; height:600  px;" class="panel-body">

          <div class="row">

            <div class="col-sm-4">
              <h3>Biodata Diri</h3>

              <form action="sy_proses/pr_login.php" method="post">
                <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
               <input type="text" class="form-control" name="username" id="nama">
             </div>

             <div class="form-group">
             <label for="email">Email:</label>
            <input type="text" class="form-control" name="username" id="email">
          </div>
          <div class="form-group">
          <label for="nohp">No HP:</label>
         <input type="text" class="form-control" name="username" id="nohp">
       </div>
             <div class="form-group">
             <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username">
          </div>
          <div class="form-group">
          <label for="pwd">Password:</label>
         <input type="password" name="password"class="form-control" id="pwd">
         </div>
         <div class="checkbox">
         <label><input type="checkbox"> Remember me</label>
          </div>
         <button type="submit" class="btn btn-default">Submit</button>
         </form>



            </div>

            <div class="col-sm-4">

              <h3>Upload Berkas</h3>
              <div class="form-group">
              <label for="nik">NIK:</label>
             <input type="text" name="nik"class="form-control" id="nik">
             </div>

            </div>

            <div class="col-sm-4">
              <h3> Foto User </h3>

            </div>

          </div>



        </div>
      </div>



    </div>

  </body>
</html>
