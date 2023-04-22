<?php
require_once 'templates/header.php';
require_once 'templates/nav.php'
?>
<body>
    <main class="incomes-main">
        <section class="container container-center">
            <section class="form">
                    <h1 class="">Dépenses</h1>
                    <form action="" method="POST">
                        <div class="form-item">
                            <select name="user_id">
                                <option value="">-- Choisissez un utilisateur --</option>
                                <?php foreach ($users as $user) { ?>
                                    <option value="<?= $user->user_id ?>"><?= $user->last_name ?> <?= $user->first_name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-item">
                            <label for="">Entrez un montant</label>
                            <input type="text" name="exp_amount">
                        </div>
                        <div class="form-item">
                            <label for="">Entrez un label</label>
                            <input type="text" name="exp_label">
                        </div>
                        <input type="submit" class="form-button">
                    </form>
            </section>
        </section>
    </main>
<?php require_once 'templates/footer.php' ?>