<html>
	<head>
		<title>Menu Dish Management</title>
		<link rel="stylesheet" href="../styles/menuManagemant.css">
		<script src="../scripts/formResponse.js"></script>
	</head>
	<body>
		<form action="../controllers/menuManagementController.php" method="POST">
			<div class="dishFormDiv" id="addDishDiv">
				<h2>Add</h2>
				<h4>Name</h4>
				<input name="dishAddName">
				<h4>Description</h4>
				<input name="dishAddDescription">
				<h4>Price</h4>
				<input name="dishAddPrice">
				<h4>WeekDay</h4>
				<input name="dishAddWeekDay">
				<input onclick="return verifyInputAdd()" type="submit" value="+">
			</div>
			<div class="dishFormDiv" id="editDishDiv">
				<h2>Edit</h2>
				<h4>Name</h4>
				<input name="dishEditName" id="dishEditName">
				<?php 
					$nameInput = $arra['name'];
					$descriptionInput = $arra['description'];
					$priceInput = $arra['price'];
					$weekdayInput = $arra['weekday'];
					session_start();
					
					$_SESSION['oldName'] = $arra['name'];
					
					if(!empty($arra['name'])){
						echo "
							 <h4>Description</h4>
							 <input name='dishEditDescription' id='dishEditDescription'>
							 <h4>Price</h4>
							 <input name='dishEditPrice' id='dishEditPrice'>
							 <h4>WeekDay</h4>
							 <input name='dishEditWeekday' id='dishEditWeekday'>
							 <script>
								document.getElementById('dishEditName').value='$nameInput';
								document.getElementById('dishEditDescription').value='$descriptionInput';
								document.getElementById('dishEditPrice').value='$priceInput';
								document.getElementById('dishEditWeekday').value='$weekdayInput';
							 </script>";
					}
				?>
				<input onclick="return verifyInputUpdate()" type="submit" value="/">
			</div>
			<div class="dishFormDiv" id="removeDishDiv">
				<h2>Remove</h2>
				<h4>Name</h4>
				<input name="dishReName">
				<input onclick="return verifyInputRemove()"type="submit" value="-">
			</div>
		</form>
	</body>
</html>
