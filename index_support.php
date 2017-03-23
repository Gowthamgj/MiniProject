<?php
$servername = "localhost";
$username = "dbms";
$password = "Gowtham7@";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

}

header("Location: http://localhost/gj/navi.php");
//echo "$name";
//$name = $_POST['username'];
//$password=$_GET["password"];
echo "$name";
//echo "$name";
//$name=(int)$name;
$sql = "use hk";
$conn->query($sql);

//echo $password;
$conn->query("use hk");
$sql = "SELECT name  FROM rmk_student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["name"] .  "<br>";
     }
} else {
     echo "0 results";
}
$conn->close();
?>