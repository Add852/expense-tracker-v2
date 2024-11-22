<?php

//protects the page from being accessed when no user is logged in. 
protectPage();
// Use $_SESSION['userid']; to get logged in user's userid

//current user
$userID = $_SESSION['userid'];

//fetch all the current user's expenses

//$expenses = $db->query('select expenses * from users join expenses on users.userid=expenses.userID where users.userid=?;', [$userID])->fetchAll(PDO::FETCH_ASSOC);

// removing expenses don sa select statement since wala naman expenses field 
// sa table ng users.

$expenses = $db->query('select * from users join expenses on users.userid=expenses.userID where users.userid=?;', [$userID])->fetchAll(PDO::FETCH_ASSOC);



$title = 'Expenses Log';

require('views/expenselog.view.php');
