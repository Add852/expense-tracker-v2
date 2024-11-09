<?php require('partials/head.php') ?>

<main class='test h-screen bgGreen'>
    <!--  -->
    <?php require('partials/balance.php') ?>

    <!-- Sidebar -->
    <div>
        <div class="bgGreen pb-12 px-5 flex flex-col space-y-4 md:w-full lg:w-1/4 pr-4">
            <h2 class="text-4xl font-bold text-gray-300 flex justify-center items-center md:ml-4 lg:ml-16">USERNAME'S GOALS</h2>
            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-1">
                <button class="ml-16 px-4 py-6 btGreen text-xl font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Current Goals
                </button>
                <button class="ml-16 px-4 py-6 btGreen text-xl font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Set Goals
                </button>
                <button class="ml-16 px-4 py-6 btGreen text-xl font-semibold text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Set Budget
                </button>
                <button class="ml-16 px-4 py-6 text-xl font-semibold btGreen text-gray-300 border-gray-400 rounded-3xl transition duration-150 hover:bg-gray-700 text-center">
                    >> Change Wallet
                </button>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-grow tlGreen rounded-lg ml-4 p-4 text-gray-300 border-gray-400">
            <p class="text-lg">This is where the main content goes. Add any content or components here as needed.</p>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>