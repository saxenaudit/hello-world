<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$query = "



INSERT INTO test1 (id,name,email) VALUES (5,'name 5','name5@test.in');


UPDATE test1 SET name = 'Alfred Schmidt' WHERE id = 1;

";

$result = $conn->multi_query($query);
if($result){
	echo "query executed successfully";
}
else{
	echo "\n error in insertion \n";
	echo "string".mysqli_error($conn);
}
?>