<?php
if(isset($_GET['page'])) {
    switch($_GET['page']) {
        case "user-login":
            require './controllers/userLoginController.php';
            break;
        case "incomes":
            require './controllers/incomesController.php';
            break;
        case "expenses":
            require './controllers/expensesController.php';
            break;
        case "details":
            require './controllers/detailsController.php';
            break;
    }
}