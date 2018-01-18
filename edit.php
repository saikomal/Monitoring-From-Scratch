<?php
$i=0;
//echo "asdas";
//echo $_GET['val'];

$servername = "localhost";
$username = "root";
$password = "mysqleptp";
$dbname = "KLUIOT";

$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM TableRange where labname='".$_GET['val']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    $i = $row['iprange'];
}
}
$lan = $_GET['val'];
if(isset($_POST['submit'])){
$sql = "UPDATE TableRange SET iprange='".$_POST['range']."' WHERE labname='".$_POST['labname']."'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
header("Location: index.php#read");


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
    <form action="edit.php" method="post">
    <input type="hidden" name="labname" id="labname">    
    <input type="text" name="range" id="range">
        <input type="submit" value="submit" name="submit">
    </form>

    <script>
        var x = "<?php echo $i ?>";
        var x1 = "<?php echo $lan ?>";
        document.getElementById("labname").value = x1;
        document.getElementById("range").value = x;
    </script>

</body>
</html>