<?php session_start(); ?>

<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name2=$_POST['name2'];
  $email2=$_POST['email12'];
  $rating2=$_POST['rating2'];
  $review2=$_POST['review2'];
  if($name2 == $_SESSION['user']){
$qty="INSERT INTO laptop(username,email,rating,review) VALUES ('$name2','$email2','$rating2','$review2')";
$insert_final=mysqli_query($con,$qty);
      if($insert_final){
        echo "<script>alert('Thanku! We respect your review.')</script>";
        echo  "<script>window.open('laptop-product.php','_self')</script>";
      } 
    }
      else {
        /*  header("Location:home.php?q=".$email);*/
        /*echo "Error: " . $qty . "<br>" . $con->error;*/
        echo "<script>alert('Login your username.')</script>";
        echo  "<script>window.open('laptop-product.php','_self')</script>";
      }
}
mysqli_close($con);
?>
