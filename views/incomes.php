<?php
require_once 'templates/header.php';
require_once 'templates/nav.php'
?>
<body class="">
    <main class="incomes-main">
        <section class="container container-center">
            <section class="form">
                    <h1 class="">Revenus</h1>
                    <form action="" method="POST" class="incomes-form">
                        <div class="form-item">
                            <select name="user_id">
                                <option value="">-- Choisissez un utilisateur --</option>
                                <?php foreach ($users as $user) { ?>
                                    <option value="<?= $user->user_id ?>"><?= $user->last_name ?> <?= $user->first_name ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-item">
                            <label for="">Sélectionnez un montant</label>
                            <input type="text" name="inc_amount">
                        </div>

                        <div class="form-item">
                            <select name="inc_cat_id">
                                <option value="">-- Choisissez une catégorie de revenu --</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?= $category->inc_cat_id ?>"><?= $category->inc_cat_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <input type="submit" class="form-button">
                    </form>
            </section>
        </section>
    </main>
<?php require_once 'templates/footer.php' ?>