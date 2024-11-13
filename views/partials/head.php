<!DOCTYPE html>
<html class="h-full overflow-hidden" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/forms.min.js"></script>
    <style>
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
        /* Temporary Styles */
    </style>
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