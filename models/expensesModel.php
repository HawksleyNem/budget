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

function create_expense($exp_amount, $exp_date, $exp_label, $user_id) {
    $db = bddConnection();
    $sql = <<<UWU
    INSERT INTO `expenses` (`exp_amount`, `exp_date`, `exp_label`, `user_id`) VALUES (:exp_amount, :exp_date, :exp_label, :user_id);
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->bindValue(':exp_date', $exp_date);
    $postStmt->bindValue(':exp_amount', $exp_amount);
    $postStmt->bindValue(':exp_label', $exp_label);
    $postStmt->bindValue(':user_id', $user_id);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}