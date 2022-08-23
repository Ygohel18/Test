<?php
require "dbconnect.php";

if (isset($_POST['hiddendata'])) {
    $updateid     = $_POST['hiddendata'];
    $title        = $_POST['updateTitle'];
    $name         = $_POST['updateName'];
    $fathername   = $_POST['updateFatherName'];
    $surname      = $_POST['updateSurname'];
    $email        = $_POST['updateEmail'];
    $department   = $_POST['updateDepartment'];
    $address      = $_POST['updateAddress'];
    $mobilenumber = $_POST['updateMobileNumber'];

    $sql    = "UPDATE `faculty` SET `Title`='" . $title . "',`Name`='" . $name . "',`father_name`='" . $fathername . "',`Surname`='" . $surname . "',`Email_ID`='" . $email . "',`Department`='" . $department . "',`Address`='" . $address . "',`MobileNumber`='" . $mobilenumber . "' WHERE No=" . $updateid . ";";
    $result = mysqli_query($conn, $sql);
}
