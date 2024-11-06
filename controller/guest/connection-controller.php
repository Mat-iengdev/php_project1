<?php

$isFormSubmitted = false;
$hasFormErrors = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $isFormSubmitted = true;

    // vérifier en BDD que l'email existe et que le mot de passe correspond à l'email
    if ($_POST['email'] === "mathis.ieng@lapiscine.pro" &&
        $_POST['password'] === "mathis"
    ) {

        // démarre l'espace de stockage de session
        session_start();

        // variable superglobale, permettant d'accéder à la session
        // de l'utilisateur
        // ici je stocke une info permettant de vérifier si
        // l'utilisateur est connecté ou non
        $_SESSION['is_authenticated'] = true;

        // envoie au navigateur un id de session
        // lié à l'espace de stockage
        // cet id de session est stocké dans les cookies du navigateur

        header('Location : http://localhost:8888/exercice2.php/controller/admin/dashboard-controller.php');

    } else {
        $hasFormErrors = true;
    }

}

require_once('../../view/guest/connection-view.php');