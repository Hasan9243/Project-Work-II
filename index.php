<!doctype html>
<html>

<head>

	<title> Homepage:E-Comemrce Shopping Mart</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="css/style.css">
	

</head>

<body>
	 
	
<div class="top-nav">
		<i class='fas fa-shopping-cart' style='font-size:32px; color:darkblue; padding: 6px 14px;'></i>
		<a href="login.php">SignIn</a>
		<a href="signup.php">SignUp</a>
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
		<a href="categories.php">Books</a>
		<a href="categories.php">Furniture</a>
		<a href="categories.php">Fashion</a>
		<a href="categories.php">Electronics</a>
		<a href="categories.php">Anime</a>
		
		<input type="text" placeholder="Search...">
		
	</div>
	
	<p class="Border" </p>

	<div class="w3-content w3-display-container">
	  <img class="Slidepic" src="img/books.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/cloths1.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/cloths2.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/ele1.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/ele2.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/ele3.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/furniture1.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/furniture2.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/furniture3.jpg" width="750px" height="600px">
	  <img class="Slidepic" src="img/furniture4.jpg" width="750px" height="600px">
	  
	  
	 

	  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
	  
	</div>
	
	
		
<script>

		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("Slidepic");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		  }
		  x[slideIndex-1].style.display = "block";  
		}
		
</script>	

		
		<button class="button">SPECIAL SALE<br><p class="small-text">ALL ITEMS-SALE UP TO 20% OFF</p></button>
		<button class="button">FREE SHIPPING<br><p class="small-text">FREE SHIP-ON ODER OVER RS. 600.00</p></button>
		<button class="button">MONEY BACK<br><p class="small-text">30 DAY MONEY BACK GUARANTEE.</p></button>
		
	
		
</body>



</html>









