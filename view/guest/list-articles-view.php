<?php require_once('../../view/guest/partials/_header.php'); ?>

    <main>
        <h1>Les articles du blog</h1>

        <p>Filtrer les articles : </p>

        <form method="get">
        <select id="" name="category">
            <option value="series">Séries</option>
            <option value="films">Films</option>
            <option value="animes">Animés</option>
        </select>
        <input type="submit">
        </form>


        <?php foreach ($articles as $article) { ?>

            <article>
                <?php if (isStringTooLong($article['title'])) { ?>
                    <h2><?php echo shortenString($article['title']) ?></h2>
                <?php } else { ?>
                    <h2><?php echo $article['title']; ?></h2>
                <?php } ?>

                <p><?php echo $article['content']; ?></p>
                <img src="<?php echo $article['image']; ?>">

                <p><?php echo $article['category']; ?></p>

            </article>

        <?php } ?>


    </main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>