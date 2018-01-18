<?php
if(isset($_POST['submit'])){
    $labname = $_POST['labname'];
    $range = $_POST['range'];

    $servername = "localhost";
$username = "root";
$password = "mysqleptp";
$dbname = "KLUIOT";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "INSERT INTO TableRange (labname, iprange)
VALUES ('".$labname."', '".$range."')";

if ($conn->query($sql) === TRUE) {
} 

$conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        Name:-----  <input type="text" name="labname" id=""><br>
        Range:------    <input type="text" name="range" id=""><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>