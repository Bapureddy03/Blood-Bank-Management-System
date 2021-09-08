<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">   
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<style>
	table{
	    border-collapse:collapse;
	    width:100%;
	    color:#d96459;
	    font-family:monospace;
	    font-size:25px;
	    text-align:left;
	}
	th{
	    background-color:#588c7e;
	    color:white;
	}
	@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 100%; 
		padding-right: 10px; 
		white-space: nowrap;
	}

	</style>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Blood Type</th>
        <th>Address</th>
    </tr>
<?php
include("connection.php");
$sql = "SELECT *FROM Donor_Details";
$result = $conn->query($sql);
$i=0;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $count=$i+1;
    echo "<tr><td>"."$count".")".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Phone"]."</td><td>".$row["Blood Type"]."</td><td>".$row["Address"]."</td></tr>";
    echo "<br>";
    $i=$i+1;
  }
} else {
  echo "0 results";
}
$conn->close();
?>
    </table>

</body>
</html>