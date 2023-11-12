<!DOCTYPE html>
<html>
	<head>
		<title>Assignment_2</title>
		<link rel="stylesheet" href="index.css" />
		<?php include 'get-customer.php';?>
		<?php include 'get-product.php';?>
		<script>
			function showMenu(){
				document.getElementById('menu').style.display = 'flex';
				//Display
				document.getElementById('buttons').style.display = 'none';
				document.getElementById('displayBox').style.display = 'none';
				document.getElementById('back1').style.display = 'none';
				//Insert
				document.getElementById('menuIns').style.display = 'none';
				document.getElementById('back2').style.display = 'none';
			}
			function showProj(){
				document.getElementById('menu').style.display = 'none';
				//Display
				document.getElementById('buttons').style.display = 'flex';
				document.getElementById('displayBox').style.display = 'flex';
				document.getElementById('back1').style.display = 'flex';
				//Insert
				document.getElementById('menuIns').style.display = 'none';
				document.getElementById('back2').style.display = 'none';
				console.log("WHYYY");
			}
			function showIns(){
				document.getElementById('menu').style.display = 'none';
				//Display
				document.getElementById('buttons').style.display = 'none';
				document.getElementById('displayBox').style.display = 'none';
				document.getElementById('back1').style.display = 'none';
				//Insert
				document.getElementById('menuIns').style.display = 'flex';
				document.getElementById('back2').style.display = 'flex';
			}
			function generateCustomers(){
				//Convert php lists to JavaScript lists
				var userIds = <?php echo json_encode($user_id_array) ?>;
				var fnames = <?php echo json_encode($fname_array) ?>;
				var lnames = <?php echo json_encode($lname_array) ?>;
				var genders = <?php echo json_encode($gender_array) ?>;
				var ages = <?php echo json_encode($age_array) ?>;
				var phoneNums = <?php echo json_encode($phone_num_array) ?>;
				var aids = <?php echo json_encode($aid_array) ?>;
				var len = userIds.length;
				document.getElementById('p').innerHTML = "";
				for(var i = 0; i < len; i++){ 
					//Display info
					document.getElementById('p').innerHTML += ("<br><b>user_id:</b> " + userIds[i] + "<br><b>fname:</b> " + fnames[i]
					+ "<br><b>lname:</b> " + lnames[i] + "<br><b>gender:</b> " + genders[i] + "<br><b>age:</b> " + ages[i]
					+ "<br><b>phone_num:</b> " + phoneNums[i] + "<br><b>aid:</b> " + aids[i]);
					document.getElementById('p').innerHTML += ("<br>");
				}
			}
			function generateProducts(){
				//Convert php lists to JavaScript lists
				var itemNames = <?php echo json_encode($item_name_array) ?>;
				var brands = <?php echo json_encode($brand_array) ?>;
				var prices = <?php echo json_encode($price_array) ?>;
				var categorys = <?php echo json_encode($category_array) ?>;
				var len = itemNames.length;
				document.getElementById('p').innerHTML = "";
				for(var i = 0; i < len; i++){ 
					//Display info
					document.getElementById('p').innerHTML += ("<br><b>Item_Name:</b> " + itemNames[i] + "<br><b>Brand:</b> " + brands[i]
					+ "<br><b>Price:</b> " + prices[i] + "<br><b>Category:</b> " + categorys[i]);
					document.getElementById('p').innerHTML += ("<br>");
				}
			}
		</script>
	</head>
	<body onload="showMenu()">
	
		<!-- TITLE -->
		<h1>Assignment 2</h1>
		<!-- TITLE -->
	
		<!-- MENU1 --> 
		<div class="menu" id="menu">
			<div class="menuOpt insert" id="ins" onclick="showIns()">Insert</div>
			<div class="menuOpt project" id="dis" onclick="showProj()">Display</div>
		</div>
		<!-- MENU1 --> 
		
		<!-- DISPLAY -->
		<div class="buttons" id="buttons">
			<button id="disUsers" onclick="generateCustomers()">Display Users</button>
			<button class="backBtn" id="back1" onclick="showMenu()">Back</button>
			<button id="disProducts" onclick="generateProducts()">Display Products</button>
		</div>
		<div class="displayBox" id="displayBox">
			<p class="p" id="p"></p>
		</div>
		<!-- DISPLAY -->
		
		<!-- INSERT -->
		<div class="menuIns" id="menuIns">
			<div class="menuInsOpt">
				<form action="add-address.php" method="POST">
					<p1> Address Table </p1> <br>
					<p1> aid: </p1> <br> <input type="text" name="aid"> <br>
					<p1> state: </p1> <br> <input type="text" name="state"> <br>
					<p1> city: </p1> <br> <input type="text" name="city"> <br>
					<p1> street: </p1> <br> <input type="text" name="street"> <br>
					<p1> street_num: </p1> <br> <input type="text" name="street_num"> <br>
					<input class="submitBtn" type="submit"></input>
				</form>
			</div>
			<div class="menuInsOpt">
				<form action="add-cart.php" method="POST">
					<p1> Cart Table </p1> <br>
					<p1> cart_id: </p1> <br> <input type="text" name="cart_id"> <br>
					<p1> item_name: </p1> <br> <input type="text" name="item_name"> <br>
					<p1> user_id: </p1> <br> <input type="text" name="user_id"> <br>
					<input class="submitBtn" type="submit"></input>
				</form>
			</div>
			<div class="menuInsOpt">
				<form action="add-customer.php" method="POST">
					<p1> Customer Table </p1> <br>
					<p1> user_id: </p1> <br> <input type="text" name="user_id"> <br>
					<p1> fname: </p1> <br> <input type="text" name="fname"> <br>
					<p1> lname: </p1> <br> <input type="text" name="lname"> <br>
					<p1> gender: </p1> <br> <input type="text" name="gender"> <br>
					<p1> age: </p1> <br> <input type="text" name="age"> <br>
					<p1> phone_num: </p1> <br> <input type="text" name="phone_num"> <br>
					<p1> aid: </p1> <br> <input type="text" name="aid"> <br>
					<input class="submitBtn" type="submit"></input>
				</form>
			</div>
			<div class="menuInsOpt">
				<form action="add-product.php" method="POST">
					<p1> Product Table </p1> <br>
					<p1> item_name: </p1> <br> <input type="text" name="item_name"> <br>
					<p1> brand: </p1> <br> <input type="text" name="brand"> <br>
					<p1> price: </p1> <br> <input type="text" name="price"> <br>
					<p1> category: </p1> <br> <input type="text" name="category"> <br>
					<input class="submitBtn" type="submit"></input>
				</form>
			</div>
			<div class="menuInsOpt">
				<form action="add-sales.php" method="POST">
					<p1> Sales Table </p1> <br>
					<p1> sales_id: </p1> <br> <input type="text" name="sales_id"> <br>
					<p1> item_name: </p1> <br> <input type="text" name="item_name"> <br>
					<p1> user_id: </p1> <br> <input type="text" name="user_id"> <br>
					<input class="submitBtn" type="submit"></input>
				</form>
			</div>
		</div>
		<center><button class="backBtn" id="back2" onclick="showMenu()">Back</button></center>
		<!-- INSERT -->
	</body>
</html>