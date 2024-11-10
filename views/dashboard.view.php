<?php require('partials/head.php') ?>

<main class='test h-screen bgGreen'>
    <!-- PANELS -->
    <div class="textGray textOrange text-3xl px-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30">
        <?= 'Hello, ' . $userInfo['firstName'] . '!' ?>
    </div>
    <div class='bgGreen pt-4 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 px-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30'>
        <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-full h-64 px-4 py-2'>
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
        <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-full h-64 textGray'></div>
        <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-full h-64 textGray'></div>
        <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-full h-64 textGray'></div>
        <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-full h-64 textGray'></div>
    </div>
</main>

<?php require('partials/footer.php') ?>