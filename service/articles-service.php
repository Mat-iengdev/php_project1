<?php

function findArticles() {
    $articlesJsonFilePath = '../../model/articles.json';

    $articlesJson = file_get_contents($articlesJsonFilePath);

    $articles = json_decode($articlesJson, true);
    return $articles;
}