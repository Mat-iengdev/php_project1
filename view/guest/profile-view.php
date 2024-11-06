<?php require_once('../../view/guest/partials/_header.php'); ?>

<main>

    <h1>Mon super profile</h1>

    <article>

        <?php if ($profile['isPublished']) { ?>

            <p>Nom : <?php echo($profile['lastName']) ?></p>
            <p>Prénom : <?php echo($profile['firstName']) ?></p>
            <p>Age : <?php echo($profile['age']) ?></p>
            <p>Profession : <?php echo($profile['job']) ?></p>

    </article>

    <ul>
        <p>Mes compétences : </p>
        <?php foreach ($profile['skills'] as $skill) { ?>

            <li><?php echo $skill; ?></li>

        <?php } ?>

    </ul>

    <?php } else { ?>

        <p>Profil non publié</p>

    <?php } ?>

</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>
