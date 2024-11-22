<?php require('partials/head.php') ?>

<main>
    <!-- PANELS -->
    <div class="flex flex-col sm:flex-row gap-5">

        <!-- LEFT PANEL PANELS -->
        <div class='flex-1 flex flex-wrap gap-5'>
            <a href='/expenselog' class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 px-4 py-2'>
                <p class="textGray font-semibold">Recent Transaction</p>
                <ul>
                    <?php
                    foreach ($expenses as $expense) {
                        $amount = $expense['amount'];
                        $description = stringShortener($expense['description'], 10);
                        echo "<li class='textGray'> - $ $amount | $description </li>";
                    }
                    ?>
                </ul>
            </a>
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Goals
            </div>
            <div class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Groups
            </div>



            <a href='/subscriptionList' class='shadow-lg tlGreen hover:bg-emerald-900 duration-150 rounded-3xl w-48 h-48 textGray'>
                Subscription List
            </a>



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