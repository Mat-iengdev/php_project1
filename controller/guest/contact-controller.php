<?php

$isContactValid = false;

$isFormValid = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

if ($_POST['name'] &&
    $_POST['firstName'] &&
    $_POST['message'] &&
    $_POST['mail'] &&
    mb_strlen($_POST['name']) > 2 &&
    mb_strlen($_POST['firstName']) > 2 &&
    mb_strlen($_POST['message']) >= 20 && mb_strlen($_POST['message']) <= 200 &&
    mb_strlen($_POST['mail']) > 4
) {

$isContactValid = true;

}}

?>

<?php require_once('../../view/guest/contact-view.php');?>