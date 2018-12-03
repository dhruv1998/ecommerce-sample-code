<?php session_start(); ?>

<?php 

$con=mysqli_connect('localhost','root','','ecommerce'); 
$username=$_POST['usrnm'];
$password=$_POST['pssw'];
$sel="select * from customer where name='$username' and password='$password'";
$status=mysqli_query($con,$sel);
$count=mysqli_num_rows($status);
//echo $count;//
if($count=="")
  {
     echo "<script> alert('Inavlid Username and Password');
    window.location='user-page.php';
    </script>";
   
  }
  else{
    echo "<script> alert('Welcome to eBasket!. We are happy to help you.');
    window.location='user-page.php';
    </script>";
    $_SESSION["user"]=$username;
  }
  if ($count > 0) {
    $out="success";
    $_SESSION['user'] =$username;
  } else {
    $out="fail";
  }
  ?>