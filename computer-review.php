<?php session_start(); ?>

<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name1=$_POST['name1'];
  $email1=$_POST['email1'];
  $rating1=$_POST['rating1'];
  $review1=$_POST['review1'];
  if($name1 == $_SESSION['user']){
$qty="INSERT INTO computer(username,email,rating,review) VALUES ('$name1','$email1','$rating1','$review1')";
$insert_final=mysqli_query($con,$qty);
      if($insert_final){
        echo "<script>alert('Thanku! We respect your review.')</script>";
        echo  "<script>window.open('computer-product.php','_self')</script>";
      } 
    }
      else {
        /*  header("Location:home.php?q=".$email);*/
        /*echo "Error: " . $qty . "<br>" . $con->error;*/
        echo "<script>alert('Login your username.')</script>";
        echo  "<script>window.open('computer-product.php','_self')</script>";
      }
}
mysqli_close($con);
?>
