<?php session_start(); ?>

<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name3=$_POST['name3'];
  $email3=$_POST['email3'];
  $rating3=$_POST['rating3'];
  $review3=$_POST['review3'];
  if($name3 == $_SESSION['user']){
$qty="INSERT INTO ipad(username,email,rating,review) VALUES ('$name3','$email3','$rating3','$review3')";
$insert_final=mysqli_query($con,$qty);
      if($insert_final){
        echo "<script>alert('Thanku! We respect your review.')</script>";
        echo  "<script>window.open('ipad-product.php','_self')</script>";
      } 
    }
      else {
        /*  header("Location:home.php?q=".$email);*/
        /*echo "Error: " . $qty . "<br>" . $con->error;*/
        echo "<script>alert('Login your username.')</script>";
        echo  "<script>window.open('ipad-product.php','_self')</script>";
      }
}
mysqli_close($con);
?>
