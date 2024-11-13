<!DOCTYPE html>
<html class="h-full overflow-hidden" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.js"></script>
    <link rel="stylesheet" href="/styles/style.css">
</head>

<body class="bgGreen h-full">
    <!-- NAV BAR IS HERE -->
    <?php require('navbar.php') ?>
    <!-- SIDEBAR IS HERE -->
    <?php require('addexpense.php') ?>
    <div class="flex h-full">
        <!-- FLOATING ADD EXPENSE BUTTON HERE -->
        <?php require('sidebar.php') ?>

        <!-- DITO NA YUNG PINAKACONTENT NINYO -->
        <content class=" overflow-auto flex-grow pl-16 pr-4 py-4 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <!-- Header and Balance -->
            <?php require('header.php') ?>