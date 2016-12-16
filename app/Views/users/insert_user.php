<!-- <?php $this->layout('layout', ['title'=>"Ajout d'un utilisateur"]) ?> -->

<?php $this->start('main_content') ?>

<!-- <?php if (isset($formValid)) :
    if (isset($userAdded)) : ?>
        L'utilisateur a été ajouté en base de données
    <?php else : ?>
        Problème lors de l'ajout en base de données
    <?php endif;
else: ?> -->
    <form action="#" id="insert-user" method="POST">
        <div class="field">
            <input error type="text" name="mail" value="<?php if (isset($mail)) echo $mail ?>" placeholder="E-mail"><br>
            <?php if (isset($errors['mail'])) :
                if (isset($errors['mail']['empty'])) : ?>
                    <div class="error">Le mail doit être rempli</div>
                <?php endif;
                if (isset($errors['mail']['invalid'])) : ?>
                    <div class="error">Le mail n'est pas valide</div>
                <?php endif;
                if (isset($errors['mail']['exists'])) : ?>
                    <div class="error">Un compte est déjà enregistré avec cette adresse</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="field">
            <input type="password" name="pass1" placeholder="Mot de passe"><br>
            <?php if (isset($errors['pass1'])) :
                if (isset($errors['pass1']['empty'])) : ?>
                    <div class="error">Entrez un mot de passe</div>
                <?php endif;
                if (isset($errors['pass1']['size'])) : ?>
                    <div class="error">Le mot de passe doit comprendre entre 8 et 30 caractères</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="field">
            <input type="password" name="pass2" placeholder="Confirmation"><br>
            <?php if (isset($errors['pass2'])) :
                if (isset($errors['pass2']['empty'])) : ?>
                    <div class="error">Confirmez le mot de passe</div>
                <?php endif;
                if (isset($errors['pass2']['different'])) : ?>
                    <div class="error">Les mots de passe ne correspondent pas</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="field">
            <input type="text" name="lastname" value="<?php if (isset($lastname)) echo $lastname ?>"
                   placeholder="Nom de famille"><br>
            <?php if (isset($errors['lastname'])) :
                if (isset($errors['lastname']['empty'])) : ?>
                    <div class="error">Entrez votre nom</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="field">
            <input type="text" name="firstname" value="<?php if (isset($firstname)) echo $firstname ?>"
                   placeholder="Prénom"><br>
            <?php if (isset($errors['firstname'])) :
                if (isset($errors['firstname']['empty'])) : ?>
                    <div class="error">Entrez votre prénom</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <div class="field">
            <input type="submit" name="insert-user" value="Ajouter un utilisateur">
        </div>
    </form>
<?php endif; ?>

<?php $this->stop('main_content') ?> --> --> --> -->