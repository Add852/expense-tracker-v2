<?php require('partials/head.php') ?>

<main class='h-screen bgGreen'>
    <!-- Username -->
    <h2 class="px-2 py-0 sm:text-3xl lg:text-4xl font-bold text-gray-300 flex justify-center items-center my-2 lg:px-2">USERNAME'S GOALS</h2>
    <!-- Sidebar -->
    <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-4">
        <div class="bgGreen pb-12 px-5 flex flex-col lg:space-y-4 md:w-full pr-4">
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-1">
                <button class="px-4 py-6 btGreen text-xl font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Current Goals
                </button>
                <button class="px-4 py-6 btGreen text-xl font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Set Goals
                </button>
                <button class="px-4 py-6 btGreen text-xl font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Set Budget
                </button>
                <button class="px-4 py-6 text-xl font-semibold btGreen text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Change Wallet
                </button>
            </div>
        </div>

        <!-- Paayos nito bagu i-uncomment, sinasakop kasi to ung sidebar, also unsuble toh :) -->
        <!-- Main Content Area --> 
        <div class="tlGreen rounded-lg">
            <!-- <?php
            // echo "
            //     <button class='px-4 py-4 my-4 btGreen text-xl w-full font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center'>
            //         Add Goal Button
            //     </button>";
            // for ($i = 1; $i <= 3; $i++) {
            //     echo "
            //     <button class='px-4 py-4 my-4 btGreen text-xl w-full font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center'>
            //         Goal Listed Goated Fanum Tax KEKW Sigma Ohio Rizz Ligma Balls Madge Sadge 
            //     </button>";
            // }
            ?> --> 
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>