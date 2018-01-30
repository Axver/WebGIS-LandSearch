<?php
session_start();

include 'pr_connect.php';
echo "<br/>";

if (!empty($_POST['username'])&&!empty($_POST['password']))
{

echo "success";
$username=$_POST['username'];
$password=$_POST['password'];

$query=pg_query($conn,"SELECT * FROM userinfo WHERE username='$username' AND password='$password'");
$rows=pg_num_rows($query);
if ($rows==1)
 {

   // Memulai session

// menyimpan informasi pada session
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
// header("Location: ../pg_lahan/index.php");
$row=pg_fetch_array($query);
$roleuser=$row['role'];
$_SESSION['roleuser']=$roleuser;
echo $roleuser;
if ($roleuser=='root')
{
  header("Location: ../pg_lahan/index.php");
}
else if($roleuser=='admin')
{
 header("Location: ../pg_admin/index.php");
}
else if($roleuser=='user')
{
header("Location: ../pg_pencari_lahan/index.php");
}
else if($roleuser=='notaris')
{
header("Location: ../pg_notaris/index.php");
}
else if($roleuser=='bpn')
{
header("Location: ../pg_bpn/index.php");
}
else if ($roleuser=='pemilik'){
header("Location: ../pg_pemilik_lahan/index.php");
}
else {
  header("Location: ../index.php");
}

//Mengambil data type role username


 }

 else {
   echo "</br>Login Gagal";
   header("Location:../index.php");
 }

}
else {
  header("Location:../loginpage.php");

echo "Gagal";
}







 ?>
