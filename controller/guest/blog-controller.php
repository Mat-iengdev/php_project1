<?php

$articles = [
    "1" => [
        "title" => "Logo Nike",
        "image" => "https://laboutiqueduneon.fr/wp-content/uploads/2024/07/il_fullxfull.4247577732_e8fm-Cropped-768x768.jpg.webp",
        "content" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do",
        "isPublished" => true
    ],
    "2" => [
        "title" => "Logo Nike 2",
        "image" => "https://laboutiqueduneon.fr/wp-content/uploads/2024/07/il_fullxfull.4247577732_e8fm-Cropped-768x768.jpg.webp",
        "content" => "Poneys",
        "isPublished" => true
    ],
    "3" => [
        "title" => "Logo Nike 3",
        "image" => "https://laboutiqueduneon.fr/wp-content/uploads/2024/07/il_fullxfull.4247577732_e8fm-Cropped-768x768.jpg.webp",
        "content" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do",
        "isPublished" => true
    ]
];
function shortenString($article) {
    return substr($article['content'],0, 30);
}
function isContentTooLong($article) {
    return (mb_strlen($article["content"], 'UTF-8') > 30);
}
?>

<?php require_once('../../view/guest/blog-view.php'); ?>