<?php
require('db.php');

$operation = $_GET['operation'];

if ($operation == 'insert') {
    $branch_id = $_GET['branch_id'];
    $Mobile_No = $_GET['Mobile_No'];
    $email = $_GET['email'];

    $q_insert = "INSERT INTO bank_account(branch_id,Mobile_No,email) VALUES ('$branch_id','$Mobile_No','$email')";

    $result = $mysqli->query($q_insert);

    $sql = "SELECT max(id) as id FROM bank_account";
    $result1 = $mysqli->query($sql);

    $json = [];

    while ($row = $result1->fetch_assoc()) {
        $json['id'] = $row['id'];
    }
} 

echo json_encode($json);

