<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget and Goals - Xpense Tracker</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body>
    <?php
    include "../components/navbar.html";
    ?>
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
            
    <!-- Sidebar -->
    <div>
        <div class="bgGreen pt-24 pb-12 px-5 flex flex-col space-y-4 md:w-full lg:w-1/4 pr-4">
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

        <style>
            /* background colors */
            .bgGreen {
                background-color: #03352c;
            }

            .tlGreen {
                background-color: #072822;
            }

            .btGreen {
                background-color: #1a664d;
            }