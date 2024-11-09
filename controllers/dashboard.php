<?php

//create database instance
$db = new Database();
//current user
$userID = '1';
//stores information about user
$userInfo = $db->query('select * from users where userid = ?;', [$userID])->fetch(PDO::FETCH_ASSOC);
//fetch all the current user's expenses
$expenses = $db->query('select expenses.amount, expenses.description from users join expenses on users.userID=expenses.userID where users.userID=?;', [$userID])->fetchAll(PDO::FETCH_ASSOC);
// dd($expenseLog);

require('views/dashboard.view.php');
