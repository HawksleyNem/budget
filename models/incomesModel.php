<?php
require './models/connection.php';
function get_users() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT
    `users`.`user_id`, `users`.`first_name`, `users`.`last_name`
    FROM
    `users`;
    ORDER BY `first_name`, `last_name` ASC
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}

function get_inc_categories() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT
    `incomes_categories`.`inc_cat_id`, `incomes_categories`.`inc_cat_name`
    FROM
    `incomes_categories`
    ORDER BY `incomes_categories`.`inc_cat_id` ASC;
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}

function create_income($inc_amount, $inc_receipt_date, $inc_cat_id, $user_id) {
    $db = bddConnection();
    $sql = <<<UWU
    INSERT INTO `incomes` (`inc_amount`, `inc_receipt_date`, `inc_cat_id`, `user_id`) VALUES (:inc_amount, :inc_receipt_date, :inc_cat_id, :user_id);
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->bindValue(':inc_amount', $inc_amount);
    $postStmt->bindValue(':inc_receipt_date', $inc_receipt_date);
    $postStmt->bindValue(':inc_cat_id', $inc_cat_id);
    $postStmt->bindValue(':user_id', $user_id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}