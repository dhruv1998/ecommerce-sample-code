<?php
session_start();
if(!isset($_SESSION["user"])){
  header("Location: adminlogin.php");
}
else
{
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
					<a href="admin-page.php">
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
					<a href="#">
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
                <h5 class="title">Admin Profile</h5>
                    </div>
                    <div class="card-body">
                    	<form>
                    		<div class="row">
                    			<div class="col-md-5 pr-md-1">
                    				 <div class="form-group">
                    				 	<label>Company (disabled)</label>
                    				 	<input type="text" class="form-control" disabled=""  placeholder="Company" value="Kreative Digital Solution.">
                    				 </div>
                    			</div>
                    			<div class="col-md-3 px-md-1">
                    				<div class="form-group">
                    					<label>Username</label>
                    					<input type="text" disabled="" class="form-control" placeholder="Username" value="Dhruv123">
                    				</div>
                    			</div>
                    			<div class="col-md-4 pl-md-1">
                    				<div class="form-group">
                    					<label>Email address</label>
                    					<input type="email" disabled="" class="form-control" placeholder="Enter Email Address" value="rdhruv424@gmail.com">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-6 pr-md-1">
                    				<div class="form-group">
                    					 <label>First Name</label>
                    					 <input type="text" disabled="" class="form-control" placeholder="Company" value="Dhruv">
                    				</div>
                    			</div>
                    			<div class="col-md-6 pl-md-1">
                    				<div class="form-group">
                    					<label>Last Name</label>
                    					 <input type="text" disabled="" class="form-control" placeholder="Last Name" value="Kumar">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-12">
                    				<div class="form-group">
                    					<label>Address</label>
                    					<input type="text" disabled="" class="form-control" placeholder="Home Address" value="Patna Bihar Banglore">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-4 pr-md-1">
                    				<div class="form-group">
                    					<label>City</label>
                    					<input type="text" disabled="" class="form-control" placeholder="City" value="Patna">
                    				</div>
                    			</div>
                    			<div class="col-md-4 px-md-1">
                    				 <div class="form-group">
                    				 	<label>Country</label>
                    				 	<input type="text" disabled="" class="form-control" placeholder="Country" value="India">
                    				 </div>
                    			</div>
                    			<div class="col-md-4 pl-md-1">
                    				<div class="form-group">
                    					<label>Postal Code</label>
                    					<input type="number" disabled="" class="form-control" placeholder="ZIP Code" value="803211">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="row">
                    			<div class="col-md-12">
                    				<div class="form-group">
                    					<label>About Me</label>
                    					<textarea rows="4" disabled="" cols="80" class="form-control" placeholder="Here can be your description" value="Dhruv">I Love Coding. It's Not My Work. It's My Life.</textarea>
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
				<div class="col-md-4">
					<div class="card card-user">
						 <div class="card-body">
						 	<p class="card-text">
						 		<div class="author">
						 			<div class="block block-one"></div>
						 			<div class="block block-two"></div>
						 			<div class="block block-three"></div>
						 			<div class="block block-four"></div>
						 			 <a href="javascript:void(0)"style="text-decoration: none;">
						 			 	 <img class="avatar" src="image/anime3.png" alt="...">
						 			 	 <h5 class="title" >Dhruv Kumar</h5>
						 			 </a>
						 			 <p class="description">
                                      Web Devloper/Coder
                                         </p>
						 		</div>
						 	</p>
						 	<div class="card-description">
						 		Do not be scared of the truth because we need to restart the human foundation in truth.
						 	</div>
						 </div>
						 <div class="card-footer">
						 	<div class="button-container">
						 		<button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
						 			<i class="fab fa-facebook-f"></i>
						 		</button>
						 	</div>
						 </div>
					</div>
				</div>
			</div>
				
						
			
					</div>
			</div>
		</div>
		<footer class="footer" style="background: linear-gradient(#1e1e24,#1e1e2f)">
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