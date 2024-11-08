<div class='bgGreen w-full h-20 py-2 px-5 md:px-10 lg:px-20 xl:'>
    <!-- BALANCE CONTAINER -->
    <div class="tlGreen rounded-3xl w-full h-full items">
        <!-- BALANCE and ADD BUTTON ROW-->
        <div class="flex flex-grow px-5 h-full items-center">
            <!-- BALANCE and ADD ROW-->
            <div class="flex flex-row gap-5 w-full">
                <p class="text-gray-300 text-2xl">Balance:</p>
                <p class='text-gray-300 text-2xl'><?= '$' .  (isset($userInfo['amount']) ? $userInfo['amount'] : 0)   ?></p>
            </div>
            <!-- ADD BUTTON -->
            <button class='text-gray-300 btGreen rounded-3xl h-1/2 px-5'>Add</button>
        </div>
    </div>
</div>