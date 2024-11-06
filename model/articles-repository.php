<?php

function findArticles() {
    $articlesJsonFilePath = '../../model/articles.json';

    $articlesJson = file_get_contents($articlesJsonFilePath);

    $articles = json_decode($articlesJson, true);
    return $articles;
}

function insertArticle($isArticleCreated) {
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
}