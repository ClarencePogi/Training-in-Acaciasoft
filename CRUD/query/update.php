<?php 
require_once "connector.php";

$name = filter_input(INPUT_POST,"fullname", FILTER_SANITIZE_SPECIAL_CHARS);
$phonenum = filter_input(INPUT_POST,"phonenum", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);



$sql = $conn->prepare("UPDATE `account` SET `name` = ?, `phonenumber` = ?, `email` = ? WHERE `id` = ?");
$result = $sql->execute([$name, $phonenum, $email, $_POST['id']]);

echo 'success';
?>