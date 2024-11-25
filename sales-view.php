<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="nav2.css">
<link rel="stylesheet" type="text/css" href="table1.css">
<title>
Sales Invoice
</title>
</head>

<body>

<?php require('commom.php'); ?>

	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2> SALES INVOICE DETAILS</h2>
	</div>
	</center>
	
	<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Sale ID</th>
			<th>Customer ID</th>
			<th>Date and Time </th>
			<th>Sale Amount</th>
			<th>Employee ID</th>
		</tr>
		
	<?php
	include "config.php";
	
		$sql = "SELECT sale_id, c_id,s_date,s_time,total_amt,e_id FROM sales";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			
			
		echo "<tr>";
			echo "<td>" . $row["sale_id"]. "</td>";
			echo "<td>" . $row["c_id"] . "</td>";
			echo "<td>" . $row["s_date"]."&nbsp;&nbsp;".$row["s_time"]."</td>";
			echo "<td>" . $row["total_amt"]. "</td>";
			echo "<td>" . $row["e_id"]. "</td>";
		echo "</tr>";
		}
	echo "</table>";
	} 
	$conn->close();
	?>
	
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
