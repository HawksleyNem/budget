<?php
require_once 'templates/header.php';
require_once 'templates/nav.php'
?>
<body>
    <main>
        <section class="container container-center">
            <section class="form">
                <div>
                    <h1 class="ul-form-h1">Création de compte</h1>
                </div>
                <form action="" method="POST">
                    <div class="form-item">
                        <label for="">Nom</label>
                        <input type="text" name="lastname">
                    </div>
                    <div class="form-item">
                        <label for="">Prénom</label>
                        <input type="text" name="firstname">
                    </div>
                    <div class="form-item">
                        <label for="">Date de naissance</label>
                        <input type="date" name="birthDate">
                    </div>
                    <input type="submit" class="form-button">
                </form>

                <h2 class="form-h2">Liste des utilisateurs</h2>
                <div class="user-list">
                    <?php foreach($users as $user) { ?>
                        <div class="user">
                            <p class="user-name"><?= $user->first_name ?> <?= $user->last_name ?></p>
                            <p class="user-birthdate"><?= $user->birth_date ?></p>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </section>
    </main>
<?php require_once 'templates/footer.php' ?>