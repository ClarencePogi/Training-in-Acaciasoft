<table class="container">
    <thead>
        <tr>
            <th>
                <h1>Name</h1>
            </th>
            <th>
                <h1>Number</h1>
            </th>
            <th>
                <h1>Email</h1>
            </th>
            <th colspan="2"><h1>Action</h1></th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once "./query/connector.php";
        $sql = $conn->prepare("SELECT * FROM `account`");
        $sql->execute();
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['phonenumber'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td>
                        <button class="btn btn-primary" onclick='showModal("edit", <?= json_encode($row) ?>)'>Edit</button>
                </td>
                <td><a href="./query/delete-account.php?id=<?php echo $row['id']?>"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
        <?php }?>
    </tbody>
</table>