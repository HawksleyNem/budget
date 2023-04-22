<?php
require './models/userLoginModel.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lastname = filter_input(INPUT_POST, 'lastname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $firstname = filter_input(INPUT_POST, 'firstname',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $birthDate = filter_input(INPUT_POST, 'birthDate',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $user = create_user($lastname, $firstname, $birthDate);
}

$users = get_users();

require './views/userLogin.php';