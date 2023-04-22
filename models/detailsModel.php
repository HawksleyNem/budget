<?php
require './models/connection.php';

function get_incomes() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT
    `incomes`.`inc_id`,
    `incomes`.`inc_amount`,
    `incomes`.`inc_receipt_date`,
    `incomes`.`inc_cat_id`,
    `incomes`.`user_id`,
    `users`.`last_name`,
    `users`.`first_name`,
    `incomes_categories`.`inc_cat_name`
    FROM `incomes`
    JOIN `users` ON `users`.`user_id` = `incomes`.`user_id`
    JOIN `incomes_categories` ON `incomes_categories`.`inc_cat_id` = `incomes`.`inc_cat_id`
    ORDER BY `incomes`.`inc_id`;
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}

function get_expenses() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT
    `expenses`.`exp_id`,
    `expenses`.`exp_amount`,
    `expenses`.`exp_date`,
    `expenses`.`exp_label`,
    `expenses`.`user_id`,
    `users`.`last_name`,
    `users`.`first_name`
    FROM `expenses`
    JOIN `users` ON `users`.`user_id` = `expenses`.`user_id`
    ORDER BY `expenses`.`exp_id`;
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}