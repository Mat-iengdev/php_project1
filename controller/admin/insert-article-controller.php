<?php

// je démarre la session
session_start();

require_once "../../config/config.php";
require_once '../../model/articles-repository.php';
require_once "../../service/authentification-service.php";
// si la clé is_authenticated n'existe pas dans la session de l'utilisateur
// ou qu'elle n'est pas égale à true
redirectNotLoggedUser();

$isArticleCreated = false;
$isFormValid = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $isFormValid = true;

    if ($_POST['title'] &&
        $_POST['content'] &&
        $_POST['image'] &&
        $_POST['category'] &&
        mb_strlen($_POST['title']) > 3 &&
        mb_strlen($_POST['content']) > 4 &&
        mb_strlen($_POST['image']) > 2 &&
        mb_strlen($_POST['category'])
    ) {

        // je créé un tableau contenant toutes mes valeurs
        // issues du formulaire
        $isArticleCreated = [
            "title" => $_POST['title'],
            "content" => $_POST['content'],
            "image" => $_POST['image'],
            "category" => $_POST['category'],
        ];

        insertArticle($isArticleCreated);

        $isArticleCreated = true;
    }
}

?>

<?php require_once('../../view/admin/insert-article-view.php');?>
