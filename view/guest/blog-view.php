<?php require_once('../../view/guest/partials/_header.php'); ?>

    <main>
        <figure>

            <?php foreach ($articles

            as $article) { ?>
            <?php if ($article["isPublished"]) { ?>


                <h2><?php echo $article["title"] ?></h2>

                <img src="<?php echo $article["image"] ?>">
                <?php if (isContentTooLong($article)) { ?>

                    <p><?php echo shortenString($article) ?></p>
                <?php } else { ?>
                    <p> <?php echo $article["content"] ?></p>
                <?php } ?>
                <?php } ?>
                <?php } ?>

        </figure>
    </main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>