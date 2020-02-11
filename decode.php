<?php
// header('Content-Type: application/json');

$db_username = 'admin';
$db_password = 'root1234';
$db_hostname = 'dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com';
$db_port = '3306';
$db_name = 'db_1022647';

$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
$q = "SELECT * FROM Products";
$r = mysqli_query($conn, $q);

echo "<table border='1' padding='5'>";	
echo "<thead>";
echo "<tr>";
echo "<th> Brand </th>";
echo "<th> Name </th>";
echo "<th> Price </th>";
echo "</tr>";
echo "</thead>";
while ($item = mysqli_fetch_object($r)) {
    $json = json_encode($item);
	$dec = json_decode($json, true);
	
	echo "<tbody>";
	echo "<tr>";
	echo "<td>" . $dec["Brand"] . "</td>";
	echo "<td>" . $dec["Product"] . "</td>";
	echo "<td>" . $dec["Price"] . "</td>";
	echo "</tr>";
	echo "</tbody>";
}
echo "</table>";