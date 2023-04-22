<?php
require './models/connection.php';
function create_user($lastname, $firstname, $birthDate) {
    $db = bddConnection();
    $sql = <<<UWU
    INSERT INTO `users` (`first_name`, `last_name`, `birth_date`) VALUES (:firstname, :lastname, :birthDate)
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->bindValue(':lastname', $lastname);
    $postStmt->bindValue(':firstname', $firstname);
    $postStmt->bindValue(':birthDate', $birthDate);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}

function get_users() {
    $db = bddConnection();
    $sql = <<<UWU
    SELECT
    `first_name`, `last_name`, `birth_date`
    FROM
    `users`;
    UWU;
    $postStmt = $db->prepare($sql);
    $postStmt->execute();

    $post = $postStmt->fetchAll(PDO::FETCH_OBJ);
    return $post;
}