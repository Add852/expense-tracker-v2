<?php

//create database instance
$db = new Database();
//current user
$username = 'add852';
//stores information about user
$userInfo = $db->query('select * from users where username = ?', [$username])->fetch(PDO::FETCH_ASSOC);
//fetch all the current user's expenses
$expenses = $db->query('select expenses.amount, expenses.description from users join expenses on users.username=expenses.username where users.username=?;', [$username])->fetchAll(PDO::FETCH_ASSOC);

// dd($expenseLog);

require('views/dashboard.view.php');
