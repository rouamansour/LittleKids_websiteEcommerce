<header>
<input type="checkbox" id="check">
	<nav>
		<div class="icon">Little <b style="color: rgb(32, 52, 235);">Kids </b> Shop</div>
		<div class="search_box">
			<input type="search" placeholder="Search all iteams ...">
			<span class="fa fa-search"></span>
		</div>
		<ol>
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Category</a></li>
			<li><a href="customers/cart.php"><i class="fas fa-shopping-cart"></i>Cart 
			<?php

			if (isset($_SESSION['cart'])){
				$count = count($_SESSION['cart']);
				echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
			}else{
				echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
			}

			?>
		</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#"> Login<ion-icon name="log-in-outline"></ion-icon></a></li>
		</ol>
		<label for="check" class="bar">
			<span class="fa fa-bars" id="bars"></span>
			<span class="fa fa-times" id="times"></span>
		</label>
	</nav>
</header>	

