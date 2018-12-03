<?php session_start(); ?>

<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name4=$_POST['name4'];
  $email4=$_POST['email4'];
  $rating4=$_POST['rating4'];
  $review4=$_POST['review4'];
  if($name4 == $_SESSION['user']){
$qty="INSERT INTO tablet(username,email,rating,review) VALUES ('$name4','$email4','$rating4','$review4')";
$insert_final=mysqli_query($con,$qty);
      if($insert_final){
        echo "<script>alert('Thanku! We respect your review.')</script>";
        echo  "<script>window.open('tablet-product.php','_self')</script>";
      } 
    }
      else {
        /*  header("Location:home.php?q=".$email);*/
        /*echo "Error: " . $qty . "<br>" . $con->error;*/
        echo "<script>alert('Login your username.')</script>";
        echo  "<script>window.open('tablet-product.php','_self')</script>";
      }
}
mysqli_close($con);
?>
