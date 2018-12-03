<?php session_start(); ?>
<?php
$conn=mysqli_connect("localhost","root","","ecommerce");
if(!$conn) {
	die("connection failed: " .mysqli_connect_error());
}
if ($_SESSION['user']=='') {
	echo "<script>alert('Please login your account');</script>";
	echo "<script>window.open('tablet.php','_self');</script>";
} else {
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$username = $_SESSION['user'];
	$product_code = $_POST['code'];
	$qty = 'SELECT * FROM cart WHERE cart.username = "'.$_SESSION["user"].'"';
	$query = mysqli_query($conn,$qty);
    while ($row = mysqli_fetch_array($query))
    {
    	$code = $row['product_code'];
    	if($product_code == $code) {
    		die('<script>alert("Item already there in cart!"); window.open("tablet.php","_self");</script>');
    	}
    }
	$sql = "INSERT INTO cart (
	username,product_name,product_image,product_code,product_category,product_price) SELECT '$username',product_name,product_image,product_code,product_category,product_price FROM product WHERE product.product_code = '".$product_code."'";
	$insert_final=mysqli_query($conn,$sql);
	if($insert_final){
        echo "<script>alert('Thanku! Cart Updated Succesfully.')</script>";
        echo "<script>window.open('tablet.php','_self');</script>";
        }else{
        /*  header("Location:home.php?q=".$email);*/
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
}
?>
