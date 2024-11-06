<?php require_once('../../view/guest/partials/_header.php'); ?>

<h1>Contacte nous juste ici !</h1>
<main>
    <form method="post">

        <label for="name">Nom</label>
        <input type="text" name="name" placeholder="Entrez votre nom"/>

        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" placeholder="Entrez votre prénom"/>

        <label for="mail">Email</label>
        <input type="email" name="mail" placeholder="Entrez votre email"/>

        <label for="message">Message</label>
        <textarea id="textarea" type="text" name="message" placeholder="Entrez votre message"></textarea>

        <input class="submit" type="submit"/>

    </form>



    <?php if ($isContactValid) { ?>

        <p>
            Votre demande a bien été envoyée et sera traitée dans les plus brefs délais. Nous vous répondrons sous 48 heures ouvrées.
        </p>

    <?php } else { ?>

        <p>
            Votre message n’a pas pu être envoyé. Veuillez vérifier que tous les champs obligatoires sont remplis correctement et réessayez.
        </p>

    <?php } ?>

</main>

<?php require_once('../../view/guest/partials/_footer.php'); ?>

