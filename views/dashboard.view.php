<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>

<main class='test pt-16 h-screen bgGreen'>
    <!-- BALANCE CONTAINER AND DIVIDER COL -->
    <div class='border border-one border-gray-700 bgGreen fixed w-full h-20 py-2 px-5 md:px-10 lg:px-20 xl:'>
        <!-- BALANCE CONTAINER -->
        <div class='border border-one border-gray-700 tlGreen rounded-3xl w-full h-full items'>
            <!-- BALANCE and ADD BUTTON ROW-->
            <div class="flex flex-grow px-5 h-full items-center">
                <!-- BALANCE and ADD ROW-->
                <div class="flex flex-row gap w-full">
                    <p class="text-gray-300 text-2xl">Balance:</p>
                    <p class='text-gray-300 text-2xl'>$12,000.00</p>
                </div>
                <!-- ADD BUTTON -->
                <button class='text-gray-300 btGreen rounded-3xl h-1/2 px-5'>Add</button>
            </div>
        </div>
    </div>

    <!-- PANELS -->
    <div class='bgGreen pt-24 pb-12 px-5 overflow-y-scroll grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30'>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<div class='border border-one border-gray-700 tlGreen hover:bg-gray-700 duration-150 rounded-3xl w-full h-64'></div>";
        }
        ?>
    </div>
</main>

<?php require('partials/footer.php') ?>