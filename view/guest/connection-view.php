<?php require_once('../../view/guest/partials/_header.php'); ?>


<main>
    <h1>Connecte toi !</h1>

    <?php if ($isFormSubmitted && $hasFormErrors) { ?>

            <p>Vous êtes bien connecté !</p>

        <?php } else { ?>

            <p>Utilisateur non reconnu. Veuillez créer un compte.</p>

        <?php } ?>

    <form method="post">

        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Entrez votre email"/>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" placeholder="Entrez votre mot de passe"/>

        <input class="submit" type="submit"/>

    </form>


    <?php require_once('../../view/guest/partials/_footer.php'); ?>
