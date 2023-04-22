<?php
require './models/detailsModel.php';

// if($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $exp_amount = filter_input(INPUT_POST, 'exp_amount',FILTER_SANITIZE_NUMBER_FLOAT);
//     $exp_date = date("Y-m-d h:i:s");
//     $exp_label = filter_input(INPUT_POST, 'exp_label', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
//     $user_id = filter_input(INPUT_POST, 'user_id', FILTER_SANITIZE_NUMBER_INT);

//     $expense = create_expense($exp_amount, $exp_date, $exp_label, $user_id);
// }

$incomes = get_incomes();
$expenses = get_expenses();

require './views/details.php';