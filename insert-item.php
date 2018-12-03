<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: adminlogin.php");
}
else
{
?>
<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productname=$_POST['product'];
  $productbrand=$_POST['brand'];
  $productcategory=$_POST['category'];
  $productprice=$_POST['price'];
  $photo=$_FILES['filename']['name'];
  $photo_tmp=$_FILES['filename']['tmp_name'];

  move_uploaded_file($photo_tmp,"uploads/$photo");

$qty="INSERT INTO product(product_name,product_code,product_category,product_price,product_image) VALUES ('$productname','$productbrand','$productcategory', '$productprice', '$photo')";
$insert_final=mysqli_query($con,$qty);
      if($insert_final){
        echo "<script>alert('Thanku! Data Inserted Succesfully.')</script>";
        echo  "<script>window.open('admin-page.php','_self')</script>";
      }else{
        /*  header("Location:home.php?q=".$email);*/
        echo "Error: " . $qty . "<br>" . $con->error;;
      }
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
   <link rel="stylesheet" type="text/css" href="css/style2.css">
  <style type="text/css">
  .card {
  	width: 500px;
  	margin-left: 90px;
  }

  @media (max-width: 700px) {
  	.card {
  	width: 80vw;
  	height: auto;
    position: relative;
    right: 240px;
    margin-left: 0;
}
.footer {
	margin-top: -30px;
	background: linear-gradient(#1e1e24,#1e1e2f);
}
  }
  </style>
</head>
<body>
<div class=" main"onload="myfunction();" style="height: 102vh;">
	<div class="sidebar"id="sidebar"style="display: none;">
		<div class="sidebar-contain">
			<div class="logo">
				<a href="javascript:void(0)" class="simple-text logo-normal">
					ADMIN
				</a>
			</div>
			<ul class="nav">
				<li >
					<a href="admin-page.php">
						<i class="fas fa-chart-pie tim-icons" aria-hidden="true"></i>
					Dashboard
				</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-atom tim-icons" aria-hidden="true"></i>
					Insert Item
				</a>
				</li>
				<li>
					<a href="profile.php">
						<i class="fas fa-thumbtack tim-icons" aria-hidden="true"></i>
					 Admin Profile
				</a>
				</li>
				<li>
					<a href="admin-logout.php">
						<i class="far fa-window-restore tim-icons" aria-hidden="true"></i>
					 Logout
				</a>
				</li>
			</ul>
		</div>
		
	</div>
	<div class="main-nav-panel" style="border-top: none;">
		<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
			<div class="container-fluid">
				<div class="navbar-contain">
					<div class=" d-inline">
						<span href="#menu" id="toggle"style="cursor: pointer;"><span></span>
					</span>
						
					</div>
				</div>
				<div class="img">
					<img src="image/anime3.png" alt=""width="50"height="50" style="border-radius: 50%;">
				</div>
			</div>
		</nav>
		<div class="content">
    <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
                <h5 class="title">Insert Item</h5>
                    </div>
                    <div class="card-body">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-md-5 pr-md-1">
                             <div class="form-group">
                              <label>Product Name</label>
                              <input type="text" class="form-control"  placeholder="Enter Product Name" name="product" required="required">
                             </div>
                          </div>
                          <div class="col-md-3 px-md-1">
                            <div class="form-group">
                              <label>Product Code</label>
                              <input type="text" name="brand" class="form-control" placeholder="Enter Product Code" required="required">
                            </div>
                          </div>
                          <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                              <label>Product Category</label>
                              <input list="browsers" name="category" class="form-control" placeholder="Enter Category" >
                              <datalist id="browsers">
                                              <option value="mobile">
                                              <option value="computer">
                                              <option value="laptop">
                                              <option value="ipad">
                                              <option value="tablet">
                                              </datalist>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                               <label>Product Price</label>
                               <input type="tel"  class="form-control" name="price" placeholder="Enter Price">
                            </div>
                          </div>
                          <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                              <label>Product Image</label>
                               <input type="file" class="form-control" name="filename" placeholder="Enter Image" >
                            </div>
                          </div>
                          <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary">
                            </div>
                          </div>
                        </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!--<div class="card-footer">
                      <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>-->
          </div>
        </div>
		<footer class="footer">
        <div class="container-fluid">
          <div class="copyright"style="font-size: .8em;">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> Created <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank" style="font-size: 1.2em;color: purple;">Kreative Digital Solution</a> for a better web.
          </div>
        </div>
      </footer>
	</div>
</div>
<script type="text/javascript">
	if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script>


$(document).ready(function(){
    $("#toggle").click(function(){
        $("#sidebar").slideToggle("slow");
    });
});
</script>
<script>
	var theToggle = document.getElementById('toggle');

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// addClass
function addClass(elem, className) {
    if (!hasClass(elem, className)) {
    	elem.className += ' ' + className;
    }
}
// removeClass
function removeClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
        while (newClass.indexOf(' ' + className + ' ') >= 0 ) {
            newClass = newClass.replace(' ' + className + ' ', ' ');
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    }
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace( /[\t\r\n]/g, " " ) + ' ';
    if (hasClass(elem, className)) {
        while (newClass.indexOf(" " + className + " ") >= 0 ) {
            newClass = newClass.replace( " " + className + " " , " " );
        }
        elem.className = newClass.replace(/^\s+|\s+$/g, '');
    } else {
        elem.className += ' ' + className;
    }
}

theToggle.onclick = function() {
   toggleClass(this, 'on');
   return false;
}

</script>

</body>
</html>

<?php
}
?>