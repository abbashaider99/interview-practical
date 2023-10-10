<?php
$uname = "yasriweb_prac";
$pass = "yasriweb_pratical";

try {
  $conn = new PDO("mysql:host=localhost;dbname=yasriweb_pratical", $uname, $pass);
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
