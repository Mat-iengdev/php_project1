<?php

function redirectNotLoggedUser() {
    session_start();

    if (!key_exists('is_authenticated', $_SESSION)  ||
        !$_SESSION['is_authenticated']) {

        header('location: http://localhost:8888/piscine-php-test/controller/guest/connection-controller.php');
    }

}

