<?php
require_once "../query/connector.php";

// echo $_GET['data'];

$sql = $conn->prepare("SELECT * FROM account WHERE `name` LIKE ? OR `phonenumber` LIKE ? OR `email` LIKE ?;");
$sql->execute(['%' . $_GET['data'] . '%', '%' . $_GET['data'] . '%', '%' . $_GET['data'] . '%']);

if ($sql->rowCount() < 1) { ?>
    <tr>
        <td colspan="5">
            <h1 style="color: red;">Not found! 😭</h1>
        </td>
    </tr>

<?php }

while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['phonenumber'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><button class="btn btn-primary edit"  data-obj='<?php echo json_encode($row)?>'><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
        <td><button class="btn btn-success upload" data-id="<?php echo $row['id'] ?>"><i class="fa fa-upload" aria-hidden="true"></i></button></td>
        <td><button class="btn btn-danger delete" data-id="<?php echo $row['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
    </tr>
<?php } ?>