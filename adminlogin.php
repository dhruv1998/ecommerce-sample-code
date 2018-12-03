<?php
session_start();
if(isset($_SESSION["user1"])){
  header("Location: admin-page.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
	<title>Admin Login</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <style type="text/css">
  * {
  	padding: 0;
  	box-sizing: border-box;
  }
  	body {
	height: 100%;
	font-family: 'Poppins-Regular', sans-serif;
}
body {
	margin: 0;
	font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
}
.container-fluid {
    width: 100%;
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    padding: 15px;
    background: #a64bf4;
    background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
    background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
    background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
    background: linear-gradient(45deg, #00dbde, #fc00ff);
}
.container-login {
    width: 500px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    padding: 42px 55px 45px 55px;
}
.container-form {
    width: 100%;
}
.container-form-title {
    display: block;
    font-family: Poppins-Bold;
    font-size: 39px;
    color: #333333;
    line-height: 1.2;
    text-align: center;
    padding-bottom: 44px;
}
.input1 {
	position: relative;
}
.container-input {
    width: 100%;
    position: relative;
    border-bottom: 2px solid #d9d9d9;
    padding-bottom: 13px;
    margin-bottom: 27px;
}
.label-input {
    font-family: Poppins-Regular;
    font-size: 15px;
    color: #666666;
    line-height: 1.5;
    padding-left: 5px;
}
input {
	outline: none;
	border: none;
}
input.input {
	height: 40px;
} 
.input {
    display: block;
    width: 100%;
    background: transparent;
    font-family: Poppins-Medium;
    font-size: 18px;
    color: #333333;
    line-height: 1.2;
    padding: 0 5px;
}
button:hover {
	cursor: pointer;
}
.container-button {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    width: 100%;
    height: 50px;
    font-family: Poppins-Medium;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
}
button {
    outline: none !important;
    border: none;
    background: transparent;
}
button {
    overflow: visible;
}
.container-button i {
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}
.m-l-7 {
	margin-left: 7px;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.container-btn-l {
    position: absolute;
    z-index: -1;
    width: 300%;
    height: 100%;
    background: #a64bf4;
    background: -webkit-linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
    background: -o-linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
    background: -moz-linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
    background: linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
    top: 0;
    left: -100%;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}
.wrap-container2 {
    width: 100%;
    display: block;
    position: relative;
    z-index: 1;
    border-radius: 25px;
    overflow: hidden;
    margin: 0 auto;
}
.wrap-container {
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding-top: 13px;
}

  </style>
</head>
<body>
<div class="container-fluid">
	<div class="container-login">
		<form class="container-form" action="adminvalidation.php" method="post">
			<span class="container-form-title">
				Admin Login
			</span>
			<div class="container-input input1">
				<span class="label-input">
					Username
				</span>
				<input class="input" type="text" name="uname" placeholder="Enter your Username">
			</div>
			<div class="container-input input1">
				<span class="label-input">
					Password
				</span>
				<input class="input" type="password" name="psw" placeholder="Enter your Password">
			</div>
			<div class="wrap-container">
			<div class="wrap-container2">
			<div class="container-btn-l"></div>
			<button class="container-button">
				<span>
					Submit
					<i class="fas fa-long-arrow-alt-right m-l-7" aria-hidden="true"></i>
				</span>
			</button>
		</div>
	</div>
		</form>
	</div>
</div>
</body>
</html>

<?php
}
?>