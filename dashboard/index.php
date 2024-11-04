<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Xpense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body>
    <?php
    include "../components/navbar.html";
    ?>

    <main class='pt-16 h-screen bg-gray-800'>
        <!-- BALANCE CONTAINER AND DIVIDER COL -->


        <div class='border border-one border-gray-700 bg-gray-800 fixed w-full h-20 py-2 px-5 md:px-10 lg:px-20 xl:'>
            <!-- BALANCE CONTAINER -->
            <div class='border border-one border-gray-700 bg-gray-900 rounded-xl w-full h-full items'>
                <!-- BALANCE and ADD BUTTON ROW-->
                <div class="flex flex-grow px-5 h-full items-center">
                    <!-- BALANCE and ADD ROW-->
                    <div class="flex flex-row gap w-full">
                        <p class="text-gray-100 text-2xl">Balance:</p>
                        <p class='text-gray-100 text-2xl'>$12,000.00</p>
                    </div>
                    <button class='bg-gray-300 rounded-xl h-1/2 px-5'>Add</button>
                </div>
            </div>
        </div>

        <!-- PANELS -->
        <div class='bg-gray-900 pt-24 pb-12 px-5 overflow-y-scroll grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30'>
            <?php
            for ($i = 0; $i < 5; $i++) {
                echo "<div class='border border-one border-gray-700 bg-gray-800 hover:bg-gray-700 duration-150 rounded-xl w-full h-64'></div>";
            }
            ?>
        </div>
</body>

</html>