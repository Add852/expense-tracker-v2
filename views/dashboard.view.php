<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>

<main class='test pt-16 h-screen bgGreen'>

    <!-- BALANCE CONTAINER -->
    <?php require('partials/balance.php') ?>

    <!-- PANELS -->
    <div class="pt-24 textGray text-3xl px-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30">
        <?= 'Hello, ' . $userInfo['firstName'] . '!' ?>
    </div>
    <div class='bgGreen pb-12 pt-4 overflow-y-scroll grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 px-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30'>
        <div class='border border-one border-gray-700 tlGreen hover:bg-gray-700 duration-150 rounded-3xl w-full h-64 px-4 py-2'>
            <p class="textGray font-semibold text-xl">Recent Transaction</p>
            <ul>
                <?php
                foreach ($expenses as $expense) {
                    $amount = $expense['amount'];
                    $description = $expense['description'];
                    echo "<li class='textGray'> - $ $amount | $description </li>";
                }
                ?>
            </ul>

        </div>
        <div class='border border-one border-gray-700 tlGreen hover:bg-gray-700 duration-150 rounded-3xl w-full h-64 textGray'></div>
        <div class='border border-one border-gray-700 tlGreen hover:bg-gray-700 duration-150 rounded-3xl w-full h-64 textGray'></div>
        <div class='border border-one border-gray-700 tlGreen hover:bg-gray-700 duration-150 rounded-3xl w-full h-64 textGray'></div>
        <div class='border border-one border-gray-700 tlGreen hover:bg-gray-700 duration-150 rounded-3xl w-full h-64 textGray'></div>
    </div>
</main>

<?php require('partials/footer.php') ?>