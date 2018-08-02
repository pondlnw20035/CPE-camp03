<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>select test</title>
</head>

<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iot";
    
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset ($conn,"utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name, PhoneNumber FROM notephone";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "ชื่อ: " . $row ["Name"] . " - เบอร์โทร: " . $row ["PhoneNumber"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
    ?>
</body>

</html>
