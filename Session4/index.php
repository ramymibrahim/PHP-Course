<?php
// $con = mysqli_connect('localhost', 'root', '','shop');
// if ($con) {
//     if (mysqli_query($con, "INSERT INTO colors (name) values ('test')")) {
//         echo 'test added successfully';
//     }
//     mysqli_close($con);
// } else {
//     die("Connection failed: " . mysqli_connect_error());
// }

$con = new mysqli('localhost', 'root', '', 'shop');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$q = $con->query("SELECT * FROM categories");
while ($row = $q->fetch_assoc()) {
    var_export($row);
}
$con->close();