<?php
$servername = "localhost";
$username = "root";
$password = "mysqleptp";
$dbname = "KLUIOT";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// sql to delete a record
$sql = "DELETE FROM TableRange WHERE labname='".$_GET['val']."'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: index.php#read");

?>