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

      <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">
          <div id="login"  class="panel panel-info" style="width:400px; background-color:#cc9e66;">
            <div class="panel-head" style="background-color:#6c2b0f;">
              <h1 style="text-align:center; color:white;">  Login Page <h1>
            </div>

            <div style="background-color:#DEB887; height:500px;" class="panel-body">

              <form action="sy_proses/pr_login.php" method="post">
             <div class="form-group">
             <label for="email">Username:</label>
            <input type="text" class="form-control" name="username" id="email">
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

         Belum punya akun?
         <button type="button" class="btn btn-info" onclick="redirectdaftar()" name="button"> Daftar Disini</button>
         <br/>

            </div>
          </div>
        </div>
        <div class="col-sm-3">

        </div>
      </div>



    </div>

  </body>
</html>
