<?php

include('../phpmethods/connect.php');

$Email = $_POST['email'];
$Bericht = $_POST['bericht'];
$Review = $_POST['review'];
$Ster = $_POST['price'];



$sql = "INSERT INTO score (Email, Bericht, Review, Ster) VALUES (?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$Email, $Bericht, $Review, $Ster]);

echo $Email, $Bericht, $Review, $Ster

?>
