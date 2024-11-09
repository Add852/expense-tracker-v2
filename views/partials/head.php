<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        .btnSubmit {
            justify-self: center;
            background-color: greenyellow;
            padding: 3px 6px;
        }

        .btnSubmit:hover {
            background-color: violet;
        }

        .form-container {
            display: none;
            margin-top: 20px;
        }

        .activeForm {
            display: grid;
        }


        .btn {
            margin-right: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .activeBtn {
            background-color: hotpink;
        }

        .form-buttons {
            margin-bottom: 5px;
        }

        #panel {
            margin-top: 20px;
            justify-content: center;
            align-items: center;
            padding: 20px 30px;
            background-color: teal;
            display: grid;
        }

        #view {
            width: 100%;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: red;
        }
    </style>
</head>

<body class="bgGreen h-full">
    <!-- NAV BAR IS HERE -->
    <?php require('navbar.php') ?>
    <?php require('addexpense.php') ?>
    <div class="flex">
        <!-- SIDEBAR IS HERE -->
        <?php require('sidebar.php') ?>
        <!-- DITO NA YUNG PINAKACONTENT NINYO -->
        <content class="ml-12 flex-grow">