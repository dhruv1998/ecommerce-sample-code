<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_POST['submit'])) {
$username = $_POST["uname1"];
$password = $_POST["psw1"];
$email = $_POST["email"];
$password1 = $_POST['psw2'];
if($password != $password1) {
	echo "<script>alert('password mismatch');
    window.location='user-page.php';
    </script>";
} else {
$sql = "INSERT INTO customer (name, email, password)
VALUES ('$username',  '$email','$password')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Welcome to eBasket!. We are happy to help you.');
    window.location='user-page.php';
    </script>";

    $email2='rdhruv424@gmail.com';
    /*$subject = 'test mail';
$message = 'test msg';
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("dhruvkumar35637@gmail.com", $subject, $message, $headers);
echo "<script>alert('Your mail has been sent successfuly ! Thank you for your feedback');</script>";*/
} else {
    echo '<script>alert("fill all requried blanks");
    window.location="user-page.php";
    </script>';

}
}
}
mysqli_close($conn);
?>