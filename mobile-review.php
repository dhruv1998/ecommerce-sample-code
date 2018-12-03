<?php session_start(); ?>

<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $rating=$_POST['rating'];
  $review=$_POST['review'];
  if($name == $_SESSION['user']){
$qty="INSERT INTO mobile(username,email,rating,review) VALUES ('$name','$email','$rating','$review')";
$insert_final=mysqli_query($con,$qty);
      if($insert_final){
        echo "<script>alert('Thanku! We respect your review.')</script>";
        echo  "<script>window.open('mobile-product.php','_self')</script>";
      } 
    }
      else {
        /*  header("Location:home.php?q=".$email);*/
        /*echo "Error: " . $qty . "<br>" . $con->error;*/
        echo "<script>alert('Login your username.')</script>";
        echo  "<script>window.open('mobile-product.php','_self')</script>";
      }
}
mysqli_close($con);
?>

