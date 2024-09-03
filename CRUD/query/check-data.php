<?php
include "connector.php";

$sql = $conn->prepare("SELECT `email`, `phonenumber` as phone FROM `account` WHERE (`email` = ? OR `phonenumber` = ?) AND `id` <> ?");
$sql->execute([$_GET['email'], $_GET['phonenumber'], $_GET['id']]);

$result = $sql->fetch(PDO::FETCH_ASSOC);

if ($sql->rowCount() > 0) {
    if ($_GET['email'] == $result['email']) {
        $result = [
            'status' => 'success',
            'duplicate' => 'email'
        ];

        echo json_encode($result);
    }
    if ($_GET['phonenumber'] == $result['phone']) {
        $result = [
            'status' => 'success',
            'duplicate' => 'phone'
        ];

        echo json_encode($result);
    }
} else {
    $result = [
        'status' => 'failed',
    ];
    echo json_encode($result);
}



?>