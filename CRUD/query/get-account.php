<?php
include "connector.php";


$sql = $conn->prepare("SELECT * FROM `account`");
$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);
?>