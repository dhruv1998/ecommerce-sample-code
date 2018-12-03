<?php session_start(); ?>

<?php 

$con=mysqli_connect('localhost','root','','ecommerce'); 
$username=$_POST['uname'];
$password=$_POST['psw'];
$sel="select * from admin where username='$username' and password='$password'";
$status=mysqli_query($con,$sel);
$count=mysqli_num_rows($status);
//echo $count;//
if($count=="")
  {
     echo "<script> alert('Inavlid Username and Password');
    window.location='adminlogin.php';
    </script>";
   
  }
  else{
    echo "<script> alert('You Successfully Logged In');
    window.location='admin-page.php';
    </script>";
    $_SESSION["user1"]=$username;
  }
  if ($count > 0) {
    $out="success";
    $_SESSION['user1'] =$username;
  } else {
    $out="fail";
  }
  ?>