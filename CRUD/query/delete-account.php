<?php
include "connector.php";

$sql = $conn->prepare("DELETE FROM account WHERE id = ?");
if($sql->execute([$_GET['id']])) echo json_encode(['status' => 'success']);