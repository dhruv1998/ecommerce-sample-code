<?php session_start(); ?>
<?php
$conn=mysqli_connect("localhost","root","","ecommerce");
if(!$conn) {
	die("connection failed: " .mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$product_code = $_POST['product_code'];
	$sql = "DELETE FROM cart WHERE product_code = $product_code AND username = '".$_SESSION['user']."'";
	$query = mysqli_query($conn, $sql);
	if (!$query) {
           die ('SQL Error: ' . mysqli_error($conn));
     } else {
     	echo "<script> alert('Item deleted succesfully');
     	window.open('user-page.php','_self');</script>";
     }
	}
?>