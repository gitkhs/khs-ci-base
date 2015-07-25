<!DOCTYPE html>
<html lang="ko">
<head>
	<?php include_once '_header.php';?>
</head>

<body>
	<div class="container-full">
		<div class="row">
			<div class="col-lg-12 v-center">
<form class="form-signin" style="margin:0 auto; padding:20px; max-width:330px; border: 1px solid;">
	<h2 class="form-signin-heading">Please sign in</h2>

	<div class="form-group">
		<label for="inputEmail" class="sr-only">Email address</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
	</div>
	<div class="form-group">
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
	</div>
	<div class="checkbox">
		<label><input type="checkbox" value="remember-me"> Remember me</label>
	</div>

	<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="location.href='main.php';">Sign in</button>
</form>

			</div>
		</div> <!-- /row -->

	</div> <!-- /container full -->

	<div class="container">
	  	<hr>
	  	<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Hello.</h3></div>
					<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
					Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
					dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
					Aliquam in felis sit amet augue.
					</div>
				</div>
			</div>
	
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Hello.</h3></div>
					<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
					Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
					dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
					Aliquam in felis sit amet augue.
					</div>
				</div>
			</div>
	
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><h3>Hello.</h3></div>
					<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
					Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
					dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
					Aliquam in felis sit amet augue.
					</div>
				</div>
			</div>
	
	    </div>
	  
		<div class="row">
			<div class="col-lg-12">
			<br><br>
			<p class="pull-right"><a href="http://www.bootply.com">Template from Bootply</a> &nbsp; ©Copyright 2013 ACME<sup>TM</sup> Brand.</p>
			<br><br>
			</div>
		</div>
	</div>


<style>
html,body {
	height:100%;
}
h1 {
	font-family: Arial,sans-serif
	font-size:80px;
	color:#DDCCEE;
}
.lead {
	color:#DDCCEE;
}
/* Custom container */
.container-full {
	margin: 0 auto;
	width: 100%;
	min-height:100%;
	background-color:#110022;
	color:#eee;
	overflow:hidden;
}
.container-full a {
	color:#efefef;
	text-decoration:none;
}
.v-center {
	margin-top:7%;
}
</style>

	<?php include_once '_bottom.php';?>
  </body>
</html>