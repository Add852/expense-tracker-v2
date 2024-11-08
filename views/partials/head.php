<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* background colors */
        .bgGreen {
            background-color: #03352c;
        }

        .tlGreen {
            background-color: #072822;
        }

        .btGreen {
            background-color: #1a664d;
        }

        .textGray {
            /* same as text-gray-300 (DEFAULT TEXT COL)*/
            color: #d1d5db;
        }

        .textTeal {
            /* same as text-teal-300 (FOR HYPERLINKS) */
            color: #5eead4;
        }

        /* TAILWIND VALUES:
        MISCELLANEOUS
            - Panel/Tiles
                - border: rounded-3xl
            - Textboxes
                - Corner: rounded-lg
                - Border: border-one (1px)
                - Border Color: border-gray-400
                - Transparency: bg-transparent
                - Remove Outline: focus:outline-none
            - Buttons
                - Border: rounded-3xl
        */
    </style>
</head>

<body class="bgGreen h-full">
    <!-- NAV BAR IS HERE -->
    <?php require('navbar.php') ?>
    <div class="flex">
        <!-- SIDEBAR IS HERE -->
        <?php require('sidebar.php') ?>
        <!-- DITO NA YUNG PINAKACONTENT NINYO -->
        <content class="ml-12 mt-16 flex-grow">