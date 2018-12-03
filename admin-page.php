<?php
session_start();
if(!isset($_SESSION["user1"])){
  header("Location: adminlogin.php");
}
else
{
?>

<?php
 //php codes for connection with database
  $conn = new mysqli("localhost", "root" , "", "ecommerce");
   if($conn -> connect_error)
     die("Connection Failed".$conn->connect_error);
    
    $myquery="SELECT * FROM product";
   
    
    $fetched=mysqli_query($conn,$myquery);
    if($fetched) {
    while ($row = $fetched->fetch_assoc()) {
      $id=$row['id'];
    }
  }
   $myquery1="SELECT * FROM customer";
  $fetched1=mysqli_query($conn,$myquery1);
  if($fetched1) {
    while ($row = $fetched1->fetch_assoc()) {
      $id1=$row['id'];
    }
  }
    
    
    mysqli_close($conn);                  
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
  <style type="text/css">
 
  </style>
</head>
<body>
<div class=" main"onload="myfunction();">
	<div class="sidebar"id="sidebar"style="display: none;">
		<div class="sidebar-contain">
			<div class="logo">
				<a href="javascript:void(0)" class="simple-text logo-normal">
					ADMIN
				</a>
			</div>
			<ul class="nav">
				<li class="active">
					<a href="#">
						<i class="fas fa-chart-pie tim-icons" aria-hidden="true"></i>
					Dashboard
				</a>
				</li>
				<li>
					<a href="insert-item.php">
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
				<div class="col-lg-4">
					<div class="card card-chart">
						<div class="card-header">
						<h5 class="card-category">Total Customers</h5>
						<h3 class="card-title"><i class="tim-icons fas fa-bell text-primary"></i> <?php echo @$id1; ?></h3>
					</div>
					<div class="card-body">
						<div class="chart-area">

							<div id="list2">
                              <ol>
                              <li><p><em>This Year Customer Added</em> 123...</p></li>
                              <li><p><em>This Year Customer Complain </em> 123...</p></li>
                              </ol>
                             </div>

						</div>
					</div>
					</div>
				</div>
				<div class="col-lg-4">
						<div class="card card-chart">
							<div class="card-header">
						<h5 class="card-category">Total Items</h5>
						<h3 class="card-title"><i class="tim-icons fas fa-bell text-primary"></i> <?php echo @$id; ?></h3>
					</div>
					<div class="card-body">
						<div class="chart-area">
							<div id="list2">
                              <ol>
                              <li><p><em>This Year Items Added</em> 123...</p></li>
                              <li><p><em>This Year Items Sell </em> 123...</p></li>
                              </ol>
                             </div>
						</div>
					</div>
					</div>
						</div>
						<div class="col-lg-4">
						<div class="card card-chart">
							<div class="card-header">
						<h5 class="card-category">Total Purchase</h5>
						<h3 class="card-title"><i class="tim-icons fas fa-bell text-primary"></i>  <?php echo @$id1; ?></h3>
					</div>
					<div class="card-body">
						<div class="chart-area">
							<div id="list2">
                              <ol>
                              <li><p><em>This Year Customer Purchase</em> 123...</p></li>
                              <li><p><em>This Year Customer Review </em> 123...</p></li>
                              </ol>
                             </div>
						</div>
					</div>
					</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="card card-tasks">
								<div class="card-header ">
									<h6 class="title d-inline">Tasks(4)</h6>
									<p class="card-category d-inline">today</p>
									<div class="card-body">
										<div id="list2">
                              <ol>
                              <li><p><em>Complete Ui</em> Complete Admin Ui ...</p></li>
                              <li><p><em>Start User Panel </em> Give User Panel Full Functionality ...</p></li>
                              <li><p><em>Complete Database</em> Complete Database Work ...</p></li>
                              <li><p><em>Retrive Data</em> Retrive Data From Database ...</p></li>
                              </ol>
                             </div>





									</div>
								</div>
							</div>
						</div>
						 <div class="col-lg-6 col-md-12">
						 	<div class="card card-tasks">
								<div class="card-header ">
									<h6 class="title d-inline">Table</h6>
									<p class="card-category d-inline">Customer</p>
									<div class="card-body">
										 <div class="table-responsive" style="overflow: auto;">

										 	<?php
                                            $db_host = 'localhost';
                                            $db_user ='root'; 
                                            $db_pass = ''; // Password
                                            $db_name = 'ecommerce'; // Database Name

                                            $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                                            if (!$conn) {
                                                      die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
                                               }
                                               $sql = 'SELECT * FROM customer ';
                                               $query = mysqli_query($conn, $sql);
                                               if (!$query) {
                                                  die ('SQL Error: ' . mysqli_error($conn));
                                                }
                                                 ?>

										 	 <table class="table tablesorter " id="">
										 	 	<thead class=" text-primary">
										 	 		<tr>
										 	 			<th>Position</th>
										 	 			<th>Name</th>
										 	 			<th>Password</th>
										 	 		</tr>
										 	 	</thead>
										 	 	<tbody>
										 	 		 <?php
    
                                                          if(mysqli_num_rows($query) > 0)
                                                             {
                                                    while ($row = mysqli_fetch_array($query))
                                                    {
                                                        ?>
										 	 		<tr>
										 	 			<td><?php echo $row["id"]?></td>
										 	 			<td><?php echo $row["name"]?></td>
										 	 			<td><?php echo $row["password"]?></td>
										 	 		</tr>
										 	 		<?php
										 	 	}
										 	 }
										 	 ?>
										 	 	</tbody>
										 	 </table>
										 </div>
									</div>
								</div>
						 </div>
					</div>
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