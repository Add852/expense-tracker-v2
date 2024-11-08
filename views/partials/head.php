<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            color: white;
        }


        .textGray {
            /* same as text-gray-300 (DEFAULT TEXT COL)*/
            color: #d1d5db;
        }

        .textTeal {
            /* same as text-teal-300 (FOR HYPERLINKS) */
            color: #5eead4;
        }

        .bgOrange {
            background-color: #da801a;
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
                - hover:bg-emerald-700
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