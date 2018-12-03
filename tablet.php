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

    /*$email2='rdhruv424@gmail.com';
    $subject = 'test mail';
$message = 'test msg';
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("dhruvkumar35637@gmail.com", $subject, $message, $headers);
echo "<script>alert('Your mail has been sent successfuly ! Thank you for your feedback');</script>";*/
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

  <button type="submit" class="bt">Register</button>
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
                        <?php
                        $conn3 = new mysqli("localhost", "root" , "", "ecommerce");
                          $myquery="SELECT * FROM cart WHERE cart.username = '".$_SESSION['user']."'";
                          $result = mysqli_query($conn3,$myquery);
                          $num_rows = mysqli_num_rows($result);
                        ?>
                        <a href="#" id="myBtn"data-toggle="modal" data-target="#myModal">Cart -  <i class="fa fa-shopping-cart"></i><span class="product-count"><?php echo $num_rows; ?></span></a>
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
      <div class="modal-body"style="overflow-y: auto;">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "ecommerce";
        $conn = mysqli_connect($host,$username,$password,$database);
        if(!$conn) {
            die ('Failed to connect to MySQL: ' . mysqli_connect_error());
        }
        $sql = 'SELECT * FROM cart WHERE cart.username = "'.$_SESSION["user"].'"';
        $query = mysqli_query($conn, $sql);
        if (!$query) {
           die ('SQL Error: ' . mysqli_error($conn));
     }
        ?>
        <table>
            
    <tr>
      <th>Name</th>
      <th>Image</th>
      <th>Category</th>
      <th>Price</th>
      <th>Code</th>
      <th>Delete</th>
    </tr>
    <?php
            if ($_SESSION['user'] == '') {
                echo "<h5>your cart is empty</h5>";
            } else {
    while ($row = mysqli_fetch_array($query)) 
    {
        $product_name= $row['product_code']; 
    ?>
   
    <tr>
        <td class="d" data_value=""><?php echo $row['product_name'];?></td>
        <td><img src="uploads/<?php echo $row['product_image'] ?>" style="width: 50px; height: 50px;"></td>
        <td><?php echo $row['product_category']; ?></td>
        <td><?php echo $row['product_price']; ?></td>
        <td><?php echo $row['product_code']; ?></td>
        <form action="cartitem5.php" method="post">
        <input type="hidden" name="product_code" value="<?php echo $product_name ?>">
        <td style="font-size: 20px;cursor: pointer;"><button class="bt"style="background-color: white;color: black;">&times;</button></td>
    </form>
    </tr>
   <!-- <script type="text/javascript">
                                var code = $(".d").attr("data_value");
                                $(".bt").click(function() {
                                    $(this).prev('input').val(code);
                                })
                            </script>-->
    <?php
}
}
    ?>
    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default">Cash Out</button>
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
                        <li><a href="user-page.php">Home</a></li>
                        <li><a href="mobile.php">Mobile</a></li>
                        <li><a href="computer.php">Computer</a></li>
                        <li><a href="laptop.php">Laptop</a></li>
                        <li><a href="ipad.php">Ipad</a></li>
                        <li class="active"><a href="#">Tablet</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->


     <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are here to serve you</h2>
                                                
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>Thank you for believeing on us </h2>
                                                
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We have top brands</h2>
                                                
                                                <a href="" class="readmore">Learn more</a>
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
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
     <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                    </div>
                    <?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'ecommerce';
                $conn = mysqli_connect($host,$user,$pass,$db);
                if(!$conn) {
                    die('failed to connect to mysql: '.mysqli_connect_error());
                }
                $sql = 'SELECT * FROM tablet WHERE tablet.username="'.$_SESSION['user'].'"';
                $query = mysqli_query($conn,$sql);
                if(!$query) {
                    die('Sql Error: '.mysqli_error($conn));
                }
                ?>
                <div class="col-md-3">
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="image/tablet-1.jpg" alt="">
                                    <div class="product-hover">
                                        <form action="cart5.php" method="post">
                                            <input type="hidden" name="code" value="">
                                        <button class="add-to-cart-link btna btna1"onclick="addcard3();"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                    </form>
                                        <a href="tablet-product.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                            </div>
                            <h2><a href="tablet-product.php"class="cart-detail d1"data_value="2014">Asus Tablet - 2017</a></h2>
                            <script type="text/javascript">
                                var code1 = $(".d1").attr("data_value");
                                $(".btna1").click(function() {
                                    $(this).prev('input').val(code1);
                                })
                            </script>
                            <div class="product-carousel-price">
                                    <ins class="price3" data_value="700">&#8377;700.00</ins> <del>&#8377;800.00</del>
                                    <div class="product-wid-rating">
                                  
                                <?php
                                if(mysqli_num_rows($query) > 0)
                                {
                                while ($row = mysqli_fetch_array($query))
                                {
                                    $rating = $row['rating'];
                                    if( $rating == '1') {
                                     echo "<i class='fa fa-star'></i>"; 
                                } else if( $rating == '2') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '3') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '4') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    } else {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                }
                            }
                        }
                        mysqli_close($conn);
                                ?>  
                            </div>
                                </div> 
                        </div>
                    </div>
                </div>
                <?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'ecommerce';
                $conn = mysqli_connect($host,$user,$pass,$db);
                if(!$conn) {
                    die('failed to connect to mysql: '.mysqli_connect_error());
                }
                $sql = 'SELECT * FROM tablet WHERE tablet.username="'.$_SESSION['user'].'"';
                $query = mysqli_query($conn,$sql);
                if(!$query) {
                    die('Sql Error: '.mysqli_error($conn));
                }
                ?>
                 <div class="col-md-3">
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="image/tablet-4.jpg" alt="">
                                    <div class="product-hover">
                                        <form action="cart5.php" method="post">
                                            <input type="hidden" name="code" value="">
                                        <button class="add-to-cart-link btna btna2"onclick="addcard2();"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                    </form>
                                        <a href="tablet-product.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                            </div>
                            <h2><a href="tablet-product.php"class="cart-detail d2" data_value="2015">Asus V7  - 2018</a></h2>
                             <script type="text/javascript">
                                var code2= $(".d2").attr("data_value");
                                $(".btna2").click(function() {
                                    $(this).prev('input').val(code2);
                                })
                            </script>
                            <div class="product-carousel-price">
                                    <ins class="price2" data_value="400">&#8377;400.00</ins> <del>&#8377;600.00</del>
                                    <div class="product-wid-rating">
                                  
                                <?php
                                if(mysqli_num_rows($query) > 0)
                                {
                                while ($row = mysqli_fetch_array($query))
                                {
                                    $rating = $row['rating'];
                                    if( $rating == '1') {
                                     echo "<i class='fa fa-star'></i>"; 
                                } else if( $rating == '2') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '3') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '4') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    } else {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                }
                            }
                        }
                        mysqli_close($conn);
                                ?>  
                            </div>
                                </div> 
                        </div>
                    </div>
            </div>
            <?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'ecommerce';
                $conn = mysqli_connect($host,$user,$pass,$db);
                if(!$conn) {
                    die('failed to connect to mysql: '.mysqli_connect_error());
                }
                $sql = 'SELECT * FROM tablet WHERE tablet.username="'.$_SESSION['user'].'"';
                $query = mysqli_query($conn,$sql);
                if(!$query) {
                    die('Sql Error: '.mysqli_error($conn));
                }
                ?>
             <div class="col-md-3">
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="image/tablet-3.jpeg" alt="">
                                    <div class="product-hover">
                                        <form action="cart5.php" method="post">
                                            <input type="hidden" name="code" value="">
                                        <button class="add-to-cart-link btna btna3"onclick="addcard1();"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                    </form>
                                        <a href="tablet-product.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                            </div>
                            <h2><a href="tablet-product.php"class="cart-detail d3" data_value="2016">Samsung Tablet  - 2018</a></h2>
                            <script type="text/javascript">
                                var code3= $(".d3").attr("data_value");
                                $(".btna3").click(function() {
                                    $(this).prev('input').val(code3);
                                })
                            </script>
                            <div class="product-carousel-price">
                                    <ins class="price1" data_value="800">&#8377;800.00</ins> <del>&#8377;1200.00</del>
                                    <div class="product-wid-rating">
                                  
                                <?php
                                if(mysqli_num_rows($query) > 0)
                                {
                                while ($row = mysqli_fetch_array($query))
                                {
                                    $rating = $row['rating'];
                                    if( $rating == '1') {
                                     echo "<i class='fa fa-star'></i>"; 
                                } else if( $rating == '2') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '3') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '4') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    } else {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                }
                            }
                        }
                        mysqli_close($conn);
                                ?>  
                            </div>
                                </div> 
                        </div>
                    </div>
            </div>
            <?php
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $db = 'ecommerce';
                $conn = mysqli_connect($host,$user,$pass,$db);
                if(!$conn) {
                    die('failed to connect to mysql: '.mysqli_connect_error());
                }
                $sql = 'SELECT * FROM tablet WHERE tablet.username="'.$_SESSION['user'].'"';
                $query = mysqli_query($conn,$sql);
                if(!$query) {
                    die('Sql Error: '.mysqli_error($conn));
                }
                ?>
            <div class="col-md-3">
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="image/tablet-4.jpg" alt="">
                                    <div class="product-hover">
                                        <form action="cart5.php" method="post">
                                            <input type="hidden" name="code" value="">
                                        <button class="add-to-cart-link btna btna4"onclick="addcard();"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                                    </form>
                                        <a href="tablet-product.php" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                            </div>
                            <h2><a href="tablet-product.php" class="cart-detail d4"data_value="2017">Lenovo Inspire Tab - 2017</a></h2>
                            <script type="text/javascript">
                                var code4= $(".d4").attr("data_value");
                                $(".btna4").click(function() {
                                    $(this).prev('input').val(code4);
                                })
                            </script>
                            <div class="product-carousel-price" class="cart-detail">
                                    <ins class="price" data_value="1400">&#8377;1400.00</ins> <del>&#8377;1900.00</del>
                                    <div class="product-wid-rating">
                                  
                                <?php
                                if(mysqli_num_rows($query) > 0)
                                {
                                while ($row = mysqli_fetch_array($query))
                                {
                                    $rating = $row['rating'];
                                    if( $rating == '1') {
                                     echo "<i class='fa fa-star'></i>"; 
                                } else if( $rating == '2') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '3') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                } else if( $rating == '4') {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    } else {
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                    echo "<i class='fa fa-star'></i>";
                                }
                            }
                        }
                        mysqli_close($conn);
                                ?>  
                            </div>
                                </div> 
                        </div>
                    </div>
            </div>
        </div>
     </div>
 </div><!--end main Content area-->
 <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands</h2>
                        <div class="brand-list">
                            <img src="image/services_logo__1.jpg" alt="">
                            <img src="image/services_logo__2.jpg" alt="">
                            <img src="image/services_logo__3.jpg" alt="">
                            <img src="image/services_logo__4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->


    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <div class="single-wid-product">
                            <a href="laptop-product.php"><img src="image/product-14.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="laptop-product.php">Dell Laptop - 2018</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="tablet-product.php"><img src="image/product-13.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="tablet-product.php">Apple new tablet 2018</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="computer-product.php"><img src="image/product-12.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="computer-product.php">Hp Computer</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Upcoming Brands</h2>
                        <div class="single-wid-product">
                            <a href="ipad-product.php"><img src="image/product-11.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="ipad-product.php">Asus I pad</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="computer-product.php"><img src="image/product-10.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="computer-product.php">Smart computer</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="laptop-product.php"><img src="image/product-9.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="laptop-product.php">Apple Laptop</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <div class="single-wid-product">
                            <a href="mobile-product.php"><img src="image/product-8.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="mobile-product.php">Apple new i phone x</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="mobile-product.php"><img src="image/product-7.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="mobile-product.php">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="tablet-product.php"><img src="image/product-6.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="tablet-product.php">Sony tablet</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>&#8377;400.00</ins> <del>&#8377;425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product area -->


     <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Basket</span></h2>
                        <p>Electronics comprises the physics, engineering, technology and applications that deal with the emission, flow and control of electrons in vacuum and matter. The identification of the electron in 1897, along with the invention of the vacuum tube, which could amplify and rectify small electrical signals, inaugurated the field of electronics and the electron age.</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/login?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://in.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest"></i></a>
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
                            <li><a href="#">Tablet</a></li>
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
var name1 = $(".d2").attr("data_value");
var price1 = $(".price1").attr("data_value");
var name2 = $(".d3").attr("data_value");
var price2 = $(".price2").attr("data_value");
var name3 = $(".d4").attr("data_value");
var price3 = $(".price3").attr("data_value");
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
   function addcard1() { 
    document.getElementById('cart1').innerHTML= 
   "Product Name" + ": " +
    name1 + ", " + "price" + ": " + price1;
    itemCount ++;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   function removecard1() {
    document.getElementById('cart1').innerHTML= " Your cart is empty";
    itemCount --;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   function addcard2() { 
    document.getElementById('cart2').innerHTML= 
   "Product Name" + ": " +
    name2 + ", " + "price" + ": " + price2;
    itemCount ++;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   function removecard2() {
    document.getElementById('cart2').innerHTML= " Your cart is empty";
    itemCount --;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   function addcard3() { 
    document.getElementById('cart3').innerHTML= 
   "Product Name" + ": " +
    name3 + ", " + "price" + ": " + price3;
    itemCount ++;
   $('.product-count').html(itemCount).css('display', 'block');
   }
   function removecard3() {
    document.getElementById('cart3').innerHTML= " Your cart is empty";
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