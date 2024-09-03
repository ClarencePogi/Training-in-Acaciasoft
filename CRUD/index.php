<?php include "./query/connector.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>CRUD</title>
    <?php
    include "./include/style.inc.php";
    ?>
</head>

<body>
    <div class="wrapper">
        <div class="title-container">
            <h1><span class="blue">&lt;</span>Table<span class="blue">&gt;</span> <span class="yellow">Account</pan>
            </h1>
            <h2>Created with love by <a href="https://github.com/pablorgarcia" target="_blank">Clarence golez</a></h2>
        </div>
        <div class="search-container">
            <button class="btn btn-primary modalBtn" >Add account</button>
            <input type="text" name="" id="searchInput" placeholder="Search account" style="">
        </div>

        <div class="table-container">
            <table id="table">
                <thead>
                    <tr>
                        <th>
                            Name
                        </th>
                        <th>
                            Number
                        </th>
                        <th>
                            Email
                        </th>
                        <th colspan="3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody id="test">

                </tbody>
            </table>
        </div>
        <div class="footer-table">
            <div class="pagination">
           
            </div>
        </div>
    </div>

    <div class="modal-container">
        <div class="add-form-modal" id="modal"></div>
    </div>

    <script src="./libraries/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="index.js" type="module"></script>
</body>

</html>