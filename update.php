<?php
require('db.php');
$json = [];
// $operation = $_POST[operation];
$json["sucess"] = "Updating...";
$id = $_POST["id"];
$f_name = $_POST["f_name"];
$m_name = $_POST["m_name"];
$l_name = $_POST["l_name"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$other_mobile = $_POST["other_mobile"];
$other_email = $_POST["other_email"];
$house_no = $_POST["house_no"];
$street = $_POST["street"];
$pincode = $_POST["pincode"];
$area_id = $_POST["area_id"];
$city_id = $_POST["h_city"];
$state_id = $_POST["h_state"];
$comm_house_no = $_POST["comm_house_no"];
$comm_street = $_POST["comm_street"];
$comm_pincode = $_POST["comm_pincode"];
$comm_area_id = $_POST["comm_area"];
$comm_city_id = $_POST["comm_city_id"];
$Occupation = $_POST["occupation"];
$income = $_POST["income"];
$marrital_status = $_POST["marrital_status"];
$mother_m_name = $_POST["mother_m_name"];
$mother_full_name = $_POST["mother_full_name"];
$father_name = $_POST["father_name"];
$spouse_name = $_POST["spouse_name"];
$type_of_acc = $_POST["type_of_acc"];
$mode_of_operation = $_POST["mode_of_operation"];
$nominee_name = $_POST["nominee_name"];
$nominee_dob = $_POST["nominee_dob"];
$relationship = $_POST["relationship"];
$other_relation = $_POST["other_relation"];
$g_dob = $_POST["g_dob"];
$relation_nominee = $_POST["relation_nominee"];
$witness_name_1 = $_POST["witness_name_1"];
$witness_name_2 = $_POST["witness_name_2"];

$poaFileName = uploadFile($_FILES["poaFile"]);
$comm_poa = uploadFile($_FILES["commpoaFile"]);
$identity_front = uploadFile($_FILES["identity_front"]);
$identity_back = uploadFile($_FILES["identity_back"]);
$document_image = uploadFile($_FILES["document_image"]);
$photo = uploadFile($_FILES["photo"]);
$form_60 = uploadFile($_FILES["form_60"]);



$q_update = "UPDATE bank_account SET f_name='$f_name',m_name='$m_name',l_name='$l_name',gender='$gender',dob='$dob',other_mobile='$other_mobile',other_email='$other_email',house_no='$house_no',street='$street',pincode='$pincode',area_id='$area_id',city_id='$city_id',state_id='$state_id',comm_house_no='$comm_house_no',comm_street='$comm_street',comm_pincode='$comm_pincode',comm_area_id='$comm_area_id',comm_city_id='$comm_city_id',Occupation='$Occupation',income='$income',marrital_status='$marrital_status',mother_m_name='$mother_m_name',mother_full_name='$mother_full_name',father_name='$father_name',spouse_name='$spouse_name',type_of_acc='$type_of_acc',mode_of_operation='$mode_of_operation',nominee_name='$nominee_name',nominee_dob='$nominee_dob',relationship='$relationship',other_relation='$other_relation',g_dob='$g_dob',relation_nominee='$relation_nominee',witness_name_1='$witness_name_1',witness_name_2='$witness_name_2',poa='$poaFileName',comm_poa='$comm_poa',identity_front='$identity_front',identity_back='$identity_back',document_image='$document_image',photo='$photo',form_60='$form_60' WHERE id= '$id'";

$json["sucess"] = $q_update;

$result = $mysqli->query($q_update);


ob_start();
header('Location: success.html');
ob_end_flush();
die();

function uploadFile($file)
{
    if (isset($file)) {
        $errors = array();
        $file_name = $file['name'];
        $file_size = $file['size'];
        $file_tmp = $file['tmp_name'];
        $file_type = $file['type'];
        $file_ext = strtolower(end(explode('.', $file['name'])));

        $extensions = array("jpeg", "jpg", "png");

        // if (in_array($file_ext, $extensions) === false) {
        //     $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        // }

        // if (empty($errors) == true) {
            move_uploaded_file($file_tmp, 'uploads/'.$file_name);
            return  $file_name;
        // } else {
        //     print_r($errors);
        // }
    }
}
