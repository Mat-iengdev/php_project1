<?php

require_once "../../config/config.php";
require_once '../../model/articles-repository.php';
// Je rappelle ma fonction
$articles = findArticles();

function isStringTooLong($stringToCheck) {
    return mb_strlen($stringToCheck, 'UTF-8') > 50;
}

function shortenString($stringToCut) {
    return substr($stringToCut, 0, 30);
}

?>

<?php require_once('../../view/guest/list-articles-view.php'); ?>


