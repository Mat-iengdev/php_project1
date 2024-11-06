<?php

// je démarre la session
session_start();

require_once '../../service/articles-service.php';
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
        mb_strlen($_POST['title']) > 3 &&
        mb_strlen($_POST['content']) > 4 &&
        mb_strlen($_POST['image']) > 2
    ) {

        // je créé un tableau contenant toutes mes valeurs
        // issues du formulaire
        $isArticleCreated = [
            "title" => $_POST['title'],
            "content" => $_POST['content'],
            "image" => $_POST['image'],
        ];

        $articlesJsonPathFile = '../../model/articles.json';
        // Je rappelle ma fonction
        $currentArticles = findArticles();
        // je récupère le chemin du fichier json
        // qui servira à stocker les données
        $currentArticles[] = $isArticleCreated;

        // Convertir la liste d'articles en JSON
        $updatedArticlesJson = json_encode($currentArticles, JSON_PRETTY_PRINT);

        // j'ouvre le fichier json, je stocke mon article
        // dedans et je ferme le fichier json
        $fp = fopen($articlesJsonPathFile, 'w');
        fwrite($fp, $updatedArticlesJson);
        fclose($fp);

        $isArticleCreated = true;
    }
}

?>

<?php require_once('../../view/admin/insert-article-view.php');?>
