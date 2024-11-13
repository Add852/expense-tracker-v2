<?php

$userID = '1';

$userInfo = $db->query('select * from users where userid = ?;', [$userID])->fetch(PDO::FETCH_ASSOC);

$title = "{$userInfo['username']}'s Goals";

require('views/goal.view.php');
