


        <!--sample front end  -->

        <!-- Tinanggal kona lahat ng  yung database related dito-->

<?php require('partials/head.php') ?>

<div class="container mx-auto p-4">



    
<div>

    <!-- Simplified View sa Small Devices -->
    <div id="simplifiedView-1" class="block max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer md:hidden xl:hidden lg:hidden" onclick="toggleSmallView(1)">
            <div class="flex justify-between border-b pb-3">
                <span class="font-semibold text-gray-300">Expense Time:</span>
                <span id="smexpense_time" class="font-semibold text-gray-300"></span>
            </div>
            <div class="flex justify-between pt-3">
                <span class="font-semibold text-gray-300">Expense Type:</span>
                <span id="smexpense_type" class="font-semibold text-gray-300">Subscription</span>
            </div>
        </div>


    <!-- Full View sa small Devices -->

    <div id="fullView-1" class="hidden md:hidden max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer">
        
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Expense ID:</span>
            <input id="expense_id" type="text" class="text-gray-300   bg-[#03352c]" value="1" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">User ID:</span>
            <input id="user_id" type="text" class="text-gray-300   bg-[#03352c]" value="1" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Amount:</span>
            <input id="amount" type="text" class="text-gray-300  bg-[#03352c]" value="12:30 PM" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Category:</span>
            <input id="category" type="text" class="text-gray-300  bg-[#03352c]" value="dont know yet" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Description:</span>
            <input id="description" type="text" class="text-gray-300  bg-[#03352c]" value="ako langto" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Expense Type:</span>
            <input id="expense_type" type="text" class="text-gray-300  bg-[#03352c]" value="Subscription" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Expense Time:</span>
            <input id="expense_time" type="text" class="text-gray-300  bg-[#03352c]" value="2022/05/04" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Goal ID:</span>
            <input id="goal_id" type="text" class="text-gray-300  bg-[#03352c]" value="0011" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Subscription ID:</span>
            <input id="subscription_id" type="text" class="text-gray-300  bg-[#03352c]" value="SB0011" />
        </div>
        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Group ID:</span>
            <input id="group_id" type="text" class="text-gray-300  bg-[#03352c]" value="0011" />
        </div>

        <div class="flex justify-start space-x-4 mt-4">
            <button onclick="saveChanges(1)" class="bg-blue-500 text-gray-300 px-4 py-1 rounded-lg hover:bg-blue-600">Save Changes</button>
            <button onclick="deleteExpense(1)" class="bg-red-500 text-gray-300 px-4 py-1 rounded-lg hover:bg-red-600">Delete</button>
        </div>
    </div>




    <!-- Simplified View sa Larger Devices -->

    <div id="largeSimplifiedView-1" class="hidden sm:hidden lg:flex lg:justify-between lg:max-w-4xl mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer" onclick="toggleLargeView(1)">
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Expense ID</span>
                <span id="large_expense_id" class="font-semibold text-gray-300">1</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Description</span>
                <span id="large_description" class="font-semibold text-gray-300">Sample description</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Expense Time</span>
                <span id="large_expense_time" class="font-semibold text-gray-300">2022/05/04</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Expense Type</span>
                <span id="large_expense_type" class="font-semibold text-gray-300">Subscription</span>
            </div>
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Amount</span>
                <span id="large_amount" class="font-semibold text-gray-300">00.00</span>
            </div>
        </div>





    <!-- Full View sa Large Devices -->
    <div id="fullViewLarge-1" class="hidden md:hidden lg:block max-w-4xl mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer">

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Expense ID:</span>
            <input id="expense_id_large" type="text" class="text-gray-300 bg-[#03352c]   rounded" value="1" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">User ID:</span>
            <input id="user_id_large" type="text" class="text-gray-300   bg-[#03352c]   rounded" value="1" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Amount:</span>
            <input id="amount_large" type="text" class="text-gray-300  bg-[#03352c]  rounded" value="12:30 PM" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Category:</span>
            <input id="category_large" type="text" class="text-gray-300  bg-[#03352c]    rounded" value="dont know yet" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Description:</span>
            <input id="description_large" type="text" class="text-gray-300 bg-[#03352c]  rounded" value="ako langto" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Expense Type:</span>
            <input id="expense_type_large" type="text" class="text-gray-300 bg-[#03352c]  rounded" value="Subscription" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Expense Time:</span>
            <input id="expense_time_large" type="text" class="text-gray-300 bg-[#03352c]  rounded" value="2022/05/04" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Goal ID:</span>
            <input id="goal_id_large" type="text" class="text-gray-300 bg-[#03352c]  rounded" value="0011" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Subscription ID:</span>
            <input id="subscription_id_large" type="text" class="text-gray-300 bg-[#03352c]  rounded" value="SB0011" />
        </div>

        <div class="flex justify-between border-b pb-3 pt-3">
            <span class="font-semibold text-gray-300">Group ID:</span>
            <input id="group_id_large" type="text" class="text-gray-300   bg-[#03352c]   rounded" value="0011" />
        </div>

        <div class="flex justify-start space-x-4 mt-4">
            <button onclick="saveChangesLarge(1)" class="bg-blue-500 text-gray-300 px-4 py-1 rounded-lg hover:bg-blue-600">Save Changes</button>
            <button onclick="deleteExpense(1)" class="bg-red-500 text-gray-300 px-4 py-1 rounded-lg hover:bg-red-600">Delete</button>
        </div>
    </div>

</div>
</div>













<script>
    function toggleSmallView(expenseId) {
        const fullView = document.getElementById('fullView-' + expenseId);
        const simplifiedView = document.getElementById('simplifiedView-' + expenseId);
        simplifiedView.classList.add('hidden');
        fullView.classList.remove('hidden'); // Show the full view for small devices
    }

    function toggleLargeView(expenseId) {
        const fullViewLarge = document.getElementById('fullViewLarge-' + expenseId);
        const largeSimplifiedView = document.getElementById('largeSimplifiedView-' + expenseId);
        
        // Check if we are currently showing the large simplified view
        largeSimplifiedView.classList.add('hidden'); // Hide the large simplified view
        fullViewLarge.classList.remove('hidden'); // Show the full view for large devices
    }

    function saveChanges(expenseId) {
        const fullView = document.getElementById('fullView-' + expenseId);
        const inputs = fullView.querySelectorAll('input');
        const updatedData = {
            update_id: expenseId,
            user_id: inputs[1].value,
            amount: inputs[2].value,
            category: inputs[3].value,
            description: inputs[4].value,
            ExpenseType: inputs[5].value,
            ExpenseTime: inputs[6].value,
            goal_id: inputs[7].value,
            subscription_id: inputs[8].value,
            group_id: inputs[9].value
        };

        // Update simplified view
        document.getElementById("smexpense_time").innerText = updatedData.ExpenseTime;
        document.getElementById("smexpense_type").innerText = updatedData.ExpenseType;

        fullView.classList.add('hidden');
        document.getElementById('simplifiedView-' + expenseId).classList.remove('hidden');
    }

    function saveChangesLarge(expenseId) {
        const fullViewLarge = document.getElementById('fullViewLarge-' + expenseId);
        const inputs = fullViewLarge.querySelectorAll('input');
        const updatedData = {
            update_id: expenseId,
            user_id: inputs[1].value,
            amount: inputs[2].value,
            category: inputs[3].value,
            description: inputs[4].value,
            ExpenseType: inputs[5].value,
            ExpenseTime: inputs[6].value,
            goal_id: inputs[7].value,
            subscription_id: inputs[8].value,
            group_id: inputs[9].value
        };

        // Update large simplified view
        document.getElementById("large_expense_time").innerText = updatedData.ExpenseTime;
        document.getElementById("large_expense_type").innerText = updatedData.ExpenseType;

        fullViewLarge.classList.add('hidden'); // Hide the full view for large
        document.getElementById('largeSimplifiedView-' + expenseId).classList.remove('hidden'); // Show simplified view
    }

    function deleteExpense(id) {
        if (confirm("Are you sure you want to delete this expense?")) {
            // Remove the elements as before
            const simplifiedView = document.getElementById('simplifiedView-' + id);
            const fullView = document.getElementById('fullView-' + id);
            const largeSimplifiedView = document.getElementById('largeSimplifiedView-' + id);
            const fullViewLarge = document.getElementById('fullViewLarge-' + id);

            if (simplifiedView) simplifiedView.remove();
            if (fullView) fullView.remove();
            if (largeSimplifiedView) largeSimplifiedView.remove();
            if (fullViewLarge) fullViewLarge.remove();

            alert("Notification: Record successfully deleted.");
        }
    }
</script>

<?php  require('partials/footer.php') ?>