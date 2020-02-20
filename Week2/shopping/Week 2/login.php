<!doctype html>
<html>

<head>

	<title> SignIn:E-Comemrce Shopping Mart</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	

</head>

<body>
	 
	 <div class="top-nav">
		
		<a href="login.php">Log Option</a>
		<a href="contacts.php">Contacts</a>
		<a href="offer.php">Fashion</a>
		<a href="my-cart.php">MyCart</a>
		<a href="my-cart.php">Checkout</a>
		
		
		
	</div>
	
	<div align="center">
		<h2>E-Commerce Shopping Mart</h2>
    </div>

	<div class="top-nav1">
		<a class="active" href="index.php">Home</a>
		
		
	</div>
	
	<p class="Border" </p>


	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 signin">
			<h4>Sign In Here</h4>
			<form action="validation.php" method="post">
				<div class="form-group">
				
					<label> Username </label>
					<input type="text" name="user" class="form-control" required>
				
				</div>
				
				
				<div class="form-group">
				
					<label> Password </label>
					<input type="password" name="password" class="form-control" required>
				
				</div>
				
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		
		
		<div class="col-md-6 signup">
			<h4>Sign Up Here</h4>
			<form action="registration.php" method="post">
				<div class="form-group">
				
					<label> Username </label>
					<input type="text" name="user" class="form-control" required>
				
				</div>
				
				
				<div class="form-group">
				
					<label> Password </label>
					<input type="password" name="password" class="form-control" required>
				
				</div>
				
				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
		</div>
		
		
		
		
		</div>
	</div>
	
	
		
</body>



</html>









