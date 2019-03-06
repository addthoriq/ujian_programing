<?php
include 'config.php';
// $nama   = $mysqli->real_escape_string($_POST['nama']);
// $email  = $mysqli->real_escape_string($_POST['email']);
// $pass   = $mysqli->real_escape_string($_POST['pass']);

// $sql    = "INSERT INTO users (nama, email, password) VALUES ('$nama', '$email', '$pass')";
//
// if ($con->query($sql) == TRUE) {
//   echo "Sukses";
// }else {
//   echo "Gagal";
// }

$statement = $con->prepare('INSERT INTO users (nama, email, password) VALUES (?, ?, ?)');
$statement->bind_param('sss', $nama, $email, $pass);

$nama = $_POST['nama'];
$email  = $_POST['email'];
$pass   = $_POST['pass'];
$statement->execute();

header('location: index.php');
