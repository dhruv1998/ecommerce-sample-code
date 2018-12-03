<?php session_start(); ?>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["uname"];
$password = $_POST["psw"];
$email = $_POST["email"];

$sql = "INSERT INTO customer (name, email, password)
VALUES ('$username',  '$email','$password')";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New record created successfully');</script>";

    $email2='rdhruv424@gmail.com';
    $subject = 'test mail';
$message = 'test msg';
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("dhruvkumar35637@gmail.com", $subject, $message, $headers);
echo "<script>alert('Your mail has been sent successfuly ! Thank you for your feedback');</script>";
} else {
    echo '<script>alert("fill all requried blanks");</script>';
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/style4.css">
    <style type="text/css">
        .slide-one {background-image: url(image/slide1.jpg)}
        .slide-two {background-image: url(image/slide2.jpg)}
        .slide-three {background-image: url(image/slide3.jpg)}
    </style>
    <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".thubmnail-recent").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</head>
<body>
   <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"data-toggle="modal"data-target="#myFormRagister"><i class="fa fa-user"></i> Ragister</a></li>
                            <li><a href="#"data-toggle="modal"data-target="#myFormLogin"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="#"><i class="fas fa-user-tie"></i>Welcome <?php if(!isset($_SESSION['user'])) { echo ""; } else { echo $_SESSION["user"]; } ?></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">INR </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu"id="google_translate_element">
                                    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'hi', includedLanguages: 'en,hi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->


    <div id="myFormLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Login</h4>
      </div>
      <div class="modal-body">
        <form action="user-validation.php" method="post" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="pssw">
  </div>

  <button type="submit" class="bt">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div><!--user login area end-->


<div id="myFormRagister" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">User Ragister</h4>
      </div>
      <div class="modal-body">
        <form action="" method="post" style="max-width:500px;margin:auto">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="uname">
  </div>
  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw">
  </div>

   <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="psw">
  </div>

  <button type="submit" class="bt">Register</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div><!--user login area end-->





    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="user-page.php">e<span>Basket</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="#" id="myBtn"data-toggle="modal" data-target="#myModal">Cart -  <i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">My Cart</h4>
      </div>
      <div class="modal-body">
        <p id="cart" ></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- end modal area-->

  </div>
</div>

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="mobile.php">Mobile</a></li>
                        <li><a href="computer.php">Computer</a></li>
                        <li><a href="laptop.php">Laptop</a></li>
                        <li><a href="ipad.php">Ipad</a></li>
                        <li><a href="tablet.php">Tablet</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area --> 

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" id="myInput" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="image/computer-3.jpg" class="recent-thumb" alt="">
                            <h2><a href="#">Hp  95 - 2017</a></h2>
                            <div class="product-sidebar-price">
                                <ins>&#8377;700.00</ins> <del>&#8377;800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="image/laptop-2.jpg" class="recent-thumb" alt="">
                            <h2><a href="#">Dell  - 2016</a></h2>
                            <div class="product-sidebar-price">
                                <ins>&#8377;700.00</ins> <del>&#8377;800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="image/laptop-1.png" class="recent-thumb" alt="">
                            <h2><a href="">Lenovo S3 - 2018</a></h2>
                            <div class="product-sidebar-price">
                                <ins>&#8377;700.00</ins> <del>&#8377;800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="image/Laptop-3.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Lenovo S7 - 2014</a></h2>
                            <div class="product-sidebar-price">
                                <ins>&#8377;700.00</ins> <del>&#8377;800.00</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Upcoming Products</h2>
                        <ul>
                            <li><a href="#">Lenovo v2 - 2018</a></li>
                            <li><a href="#">Lenovo v2 - 2018</a></li>
                            <li><a href="#">Lenovo v2 - 2018</a></li>
                            <li><a href="#">Lenovo v2 - 2018</a></li>
                            <li><a href="#">Lenovo v2 - 2018</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="#">Home</a>
                            <a href="#">Laptop</a>
                            <a href="#">Dell Laptops - 2018</a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="image/computer-3.jpg" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="image/laptop-2.jpg" alt="">
                                        <img src="image/laptop-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name d1"data_value="Dell Laptop - 2015">Dell Laptop - 2015</h2>
                                    <div class="product-inner-price">
                                        <ins class="price" data_value="700">&#8377;700.00</ins> <del>&#8377;800.00</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        
                                    </form> 
                                    <button class="add_to_cart_button"onclick="addcard();">Add to cart</button>  
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"style="padding-top: 4px;">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services. The company's hardware products include the iPhone smartphone, the iPad tablet computer, the Mac personal computer, the iPod portable media player, the Apple Watch smartwatch, the Apple TV digital media player, and the HomePod smart speaker. Apple's software includes the macOS and iOS operating systems, the iTunes media player, the Safari web browser, and the iLife and iWork creativity and productivity suites, as well as professional applications like Final Cut Pro, Logic Pro, and Xcode. Its online services include the iTunes Store, the iOS App Store and Mac App Store, Apple Music, and iCloud.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <form action="laptop-review.php" method="post">
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name2" type="text" required="required"></p>
                                                    <p><label for="email">Email</label> <input name="email2" type="email" required="required"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post rating">
                                                            
                                                            <input type="radio" id="star5" name="rating2" value="5" required="required" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4" name="rating2" value="4" required="required" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3" name="rating2" value="3" required="required" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2" name="rating2" value="2" required="required" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1" name="rating2" value="1" required="required" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                                        
                                                        </div>
                                                    </div>
                                                    <p><label for="review"></label> <textarea name="review2" required="required" placeholder="Your Review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" name="submit" value="submit3"></p>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Basket</span></h2>
                        <p>Electronics comprises the physics, engineering, technology and applications that deal with the emission, flow and control of electrons in vacuum and matter. The identification of the electron in 1897, along with the invention of the vacuum tube, which could amplify and rectify small electrical signals, inaugurated the field of electronics and the electron age.</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="mobile.php">Mobile</a></li>
                            <li><a href="computer.php">Computer</a></li>
                            <li><a href="laptop.php">Laptop</a></li>
                            <li><a href="ipad.php">Ipad</a></li>
                            <li><a href="tablet.php">Tablet</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->


     <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018 eBasket. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="https://www.kreativedigitalsolution.com/" target="_blank">Kreative Digital Solution</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->

    <script type="text/javascript">
    var itemCount = 0;
    var i = 1;

    // Add Item to Cart
var name = $(".d1").attr("data_value");
var price = $(".price").attr("data_value");
function addcard() { 
    document.getElementById('cart').innerHTML= 
   "Product Name" + ": " +
    name + ", " + "price" + ": " + price;
    itemCount ++;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   function removecard() {
    document.getElementById('cart').innerHTML= " Your cart is empty";
    itemCount --;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   </script>
   
   
<script type="text/javascript">
       if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
   </script>


</body>
</html>