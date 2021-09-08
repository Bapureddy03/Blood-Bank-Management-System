<?php
error_reporting(0);
if ($_GET['submit']){
	
$name=$_GET['name'];
$ph=$_GET['ph'];
$ph1=$_GET['ph1'];
$sql = "INSERT INTO Hero VALUES ('$name','$ph','$ph1')";
if(strlen($ph)<10 && strlen($ph1)<10){
    echo "Please enter a valid mobile number ".'<br>';
}
else{
if ($conn->query($sql) === TRUE) {
  echo "Registration Successful ".'<p style="font-size:2em;"> &#128077;</p>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
echo '<br>';
echo '<a href="index.php">Back to Page</a>';
}
}


?>