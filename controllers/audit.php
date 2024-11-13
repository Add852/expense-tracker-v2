<?php

//create database instance
$db = new Database();
//current user
$auditLog = $db->query('select * from audit_log;', [])->fetchAll(PDO::FETCH_ASSOC);

require('views/audit.view.php');
