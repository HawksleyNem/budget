<?php
require './models/incomesModel.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inc_amount = filter_input(INPUT_POST, 'inc_amount',FILTER_SANITIZE_NUMBER_FLOAT);
    $inc_receipt_date = date("Y-m-d h:i:s");
    $inc_cat_id = $_POST['inc_cat_id'];
    $user_id = filter_input(INPUT_POST, 'user_id',FILTER_SANITIZE_NUMBER_INT);
    var_dump($inc_amount);
    var_dump($inc_cat_id);
    var_dump($user_id);

    $income = create_income($inc_amount, $inc_receipt_date, $inc_cat_id ,$user_id);
}

$users = get_users();

$categories = get_inc_categories();

require './views/incomes.php';