<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="nav2.css">
<title>
 Dashboard
</title>
</head>

<body>

	<?php require('commom.php'); ?>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2> DEPARTMENT </h2>
	</div>
	</center>
	
	<a href="pos1.php" title="Add New Sale">
	<img src="carticon1.png" style="padding:8px;margin-left:450px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Add New Sale">
	</a>
	
	<a href="inventory-view.php" title="View Inventory">
	<img src="inventory.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Inventory">
	</a>
	
	<a href="employee-view.php" title="View Employees">
	<img src="emp.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Employees List">
	</a>

	<br><br>
	
	<a href="salesreport.php" title="View Transactions">
	<img src="moneyicon.png" style="padding:8px;margin-left:550px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Transactions List">
	</a>
	

	<a href="about.php" title="about">
	<img src="about.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="about">
	</a>

	<a href="help.php" title="Help">
	<img src="help.png" style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;" alt="Help">
	</a>
	
	
</body>

<script>
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
	  this.classList.toggle("active");
	  var dropdownContent = this.nextElementSibling;
	  if (dropdownContent.style.display === "block") {
	  dropdownContent.style.display = "none";
	  } else {
	  dropdownContent.style.display = "block";
	  }
	  });
	}
</script>



</html>