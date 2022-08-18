<?php


   require('db.php');

   $table=$_GET['table'];
if($table=='city'){
   $sql = "SELECT id,city_name FROM city

         WHERE state_id LIKE '%".$_GET['id']."%'"; 

$result = $mysqli->query($sql);


$json = [];

while($row = $result->fetch_assoc()){

     $json[$row['id']] = $row['city_name'];

}

}else if($table=='branch'){
      $sql = "SELECT id,branch_name FROM branch

         WHERE city_id LIKE '%".$_GET['id']."%'"; 

$result = $mysqli->query($sql);


$json = [];

while($row = $result->fetch_assoc()){

     $json[$row['id']] = $row['branch_name'];

}
}
   


   echo json_encode($json);
