<?php

//create database instance
$db = new Database();
//current user
$auditLog = $db->query('select * from audit_log;', [])->fetchAll(PDO::FETCH_ASSOC);

dd($auditLog);

require('views/audit.view.php');
