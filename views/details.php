<?php
require_once 'templates/header.php';
require_once 'templates/nav.php'
?>
<body class="details-body">
    <main class="details-main">
        <section class="container ">
            <section class="details">
                <h1 class="form-h1">Détails</h1>
                <div class="transactions-list">
                    <div class="transactions-item">
                        <h2 class="form-h2">Dépenses</h2>
                        <div class="expenses-list list">
                            <?php foreach ($incomes as $income) { ?>
                                <div class="expenses-item item">
                                    <div class="info-div">
                                        <p class="info-item"><span class="highlight">ID</span> : <?= $income->inc_id ?></p>
                                        <p class="info-item"><span class="highlight">Utilisateur</span> : <?= $income->first_name ?> <?= $income->last_name ?></p>
                                        <p class="info-item"><span class="highlight">Montant</span> : <?= $income->inc_amount ?>€</p>
                                        <p class="info-item"><span class="highlight">Date</span> : <?= $income->inc_receipt_date ?></p>
                                        <p class="info-item"><span class="highlight">Catégorie</span> : <?= $income->inc_cat_name ?></p>
                                    </div>
                                    <div class="button-div">
                                        <input type="submit" value="Modifier" class="action-button" id="modify">
                                        <input type="submit" value="Supprimer" class="action-button" id="delete">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="transactions-item">
                        <h2 class="form-h2">Revenus</h2>
                        <div class="incomes-list list">
                            <?php foreach ($expenses as $expense) { ?>
                                <div class="incomes-item item">
                                    <div class="info-div">
                                        <p class="info-item"><span class="highlight">ID</span> : <span class="modifiable"><?= $expense->exp_id ?></span></p>
                                        <p class="info-item"><span class="highlight">Utilisateur</span> : <span class="modifiable"><?= $expense->first_name ?></span> <span class="modifiable"><?= $expense->last_name ?></span></p>
                                        <p class="info-item"><span class="highlight">Montant</span> : <span class="modifiable"><?= $expense->exp_amount ?></span>€</p>
                                        <p class="info-item"><span class="highlight">Date</span> : <span class="modifiable"><?= $expense->exp_date ?></span></p>
                                        <p class="info-item"><span class="highlight">Label</span> : <span class="modifiable"><?= $expense->exp_label ?></span></p>
                                    </div>
                                    <div class="button-div">
                                        <input type="submit" value="Modifier" class="action-button" id="modify">
                                        <input type="submit" value="Supprimer" class="action-button" id="delete">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
<?php require_once 'templates/footer.php' ?>