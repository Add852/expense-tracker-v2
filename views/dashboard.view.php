<?php require('partials/head.php') ?>

<main class='test h-screen bgGreen'>
    <!-- HELLO, USER -->
    <div class="textGray textOrange text-3xl flex justify-between pb-4">
        <?= 'Hello, ' . $userInfo['firstName'] . '!' ?>
        <?php require('partials/balance.php') ?>
    </div>

    <!-- PANELS -->
    <div class="flex flex-col sm:flex-row gap-5">
        <!-- LEFT PANEL PANELS sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 -->
        <div class='flex-1 flex flex-wrap gap-5'>
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 px-4 py-2'>
                <p class="textGray font-semibold">Recent Transaction</p>
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
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Goals
            </div>
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Groups
            </div>
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Subscriptions
            </div>
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Overspending Alarm
            </div>
        </div>
        <!-- RIGHT CHART HERE -->
        <div class='w-96 h-96 shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl textGray '>
            PIE CHART HERE
        </div>
    </div>

</main>

<?php require('partials/footer.php') ?>