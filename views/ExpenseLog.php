


  <!--sample front end  -->

    <!-- Tinanggal kona lahat ng  yung database related dito-->




<?php require('partials/head.php') ?>


    <div class="container mx-auto p-4">
        <div>
            <div id="simplifiedView-1" class="block max-w-md mx-auto bg-white shadow-lg rounded-lg p-5 mt-5 cursor-pointer md:hidden" onclick="toggleView(1)">
                
                <div class="flex justify-between border-b pb-3">
                    <span class="font-semibold text-gray-400">Date Log:</span>
                    <span class="text-gray-600">2023-06-01</span>
                </div>

                <div class="flex justify-between pt-3">
                    <span class="font-semibold text-gray-400">Expense Type:</span>
                    <span class="text-gray-400">Food</span>
                </div>

            </div>



            <!-- Full View for smaller devices, hidden in larger devices -->
            <div id="fullView-1" class="hidden max-w-md mx-auto bg-white shadow-lg rounded-lg p-5 mt-5 cursor-pointer md:hidden">
                <div class="flex justify-between border-b pb-3 pt-3 date-log-area">
                    <span class="font-semibold text-gray-400">Date Log:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="2023-06-01" />
                </div>
                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">Expense ID:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="1" />
                </div>
                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">Amount:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="12:30 PM" />
                </div>
                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">Category:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="dont know yet" />
                </div>
                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Description:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="ako langto" />
                </div>



                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Expense Type:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="Subscription" />
                </div>


                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Goal ID:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="0011" />
                </div>




                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Subscription ID:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="SB0011" />
                </div>



                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Group ID:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="GD0011" />
                </div>

                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Expense Status:</span>
                    <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="Magastos" />
                </div>

                <div class="flex justify-start space-x-4 mt-4">
                    <button onclick="toggleView(1)" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 edit-button">Edit</button>
                    <button onclick="saveChanges(1)" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 save-changes-button hidden text-xl font-bold">Save Changes</button>
                    <button onclick="deleteExpense(1)" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600 text-xl font-bold">Delete</button>
                </div>
            </div>
        </div>



        <!-- Table of Expenses for Larger Devices -->
        <table class="hidden md:table w-full border border-gray-300 shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-gray-100 to-gray-200">
                <tr>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Date Log</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">User ID</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Time of Payment</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Type of Expense</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Paid Amount</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white transition-colors duration-200">
                    <td class="border px-4 py-2" onclick="makeEditable(this, 'date_log', 1)">2023-06-01</td>
                    <td class="border px-4 py-2" onclick="makeEditable(this, 'user_id', 1)">1</td>
                    <td class="border px-4 py-2" onclick="makeEditable(this, 'time_of_payment', 1)">12:30 PM</td>
                    <td class="border px-4 py-2" onclick="makeEditable(this, 'expense_type', 1)">Food</td>
                    <td class="border px-4 py-2" onclick="makeEditable(this, 'amount', 1)">50.00</td>
                    <td class="border px-4 py-2">
                        <button onclick="deleteExpense(1)" class="text-red-600 hover:text-red-800 text-xl font-bold">Delete</button>
                    </td>
                </tr>
               
            </tbody>
        </table>
    </div>

    <script>
        function toggleView(expenseId) {
            const fullView = document.getElementById('fullView-' + expenseId);
            const simplifiedView = document.getElementById('simplifiedView-' + expenseId);
            const editButton = fullView.querySelector('.edit-button');

            if (fullView.classList.contains('hidden')) {
                fullView.classList.remove('hidden');
                simplifiedView.classList.add('hidden');
                editButton.textContent = 'Save Changes'; // Change button label
            } else {
                fullView.classList.add('hidden');
                simplifiedView.classList.remove('hidden');
            }
        }

        function saveChanges(expenseId) {
            const fullView = document.getElementById('fullView-' + expenseId);
            const inputs = fullView.querySelectorAll('input');

            const updatedData = {
                update_id: expenseId,
                date_log: inputs[0].value,
                user_id: inputs[1].value,
                time_of_payment: inputs[2].value,
                expense_type: inputs[3].value,
                amount: inputs[4].value
            };

            // Simulate updating and providing feedback
            alert("Simulated update: " + JSON.stringify(updatedData));
        }

        function makeEditable(cell, field, expenseId) {
            const originalText = cell.textContent;
            const input = document.createElement('input');
            input.value = originalText;
            input.className = 'border border-gray-300 text-gray-600'; 
            cell.innerHTML = ''; // Clear cell
            cell.appendChild(input);

            // Focus on the input to edit
            input.focus();

            // Handle blur event to update cell
            input.addEventListener('blur', () => {
                const newValue = input.value.trim(); // Get the new value
                cell.textContent = newValue; // Update cell text

                // Preparing data for simulated AJAX request
                const updatedData = {
                    update_id: expenseId, 
                    [field]: newValue   
                };

                // Simulate AJAX call
                alert("Simulated AJAX update: " + JSON.stringify(updatedData));
            });
            
            // Handle pressing Enter to also submit changes
            input.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    input.blur(); // Trigger blur to save
                }
            });
        }

        function deleteExpense(id) {
            if (confirm("Are you sure you want to delete this expense?")) {
                
                // Simulate deletion
                alert("Simulated deletion for ID: " + id);
                const simplifiedView = document.getElementById('simplifiedView-' + id);
                const fullView = document.getElementById('fullView-' + id);
                if (simplifiedView) {
                    simplifiedView.remove();
                }
                if (fullView) {
                    fullView.remove();
                }
                alert("Notification: Record successfully deleted.");
            }
        }
    </script>





     <?php  require('partials/footer.php') ?>