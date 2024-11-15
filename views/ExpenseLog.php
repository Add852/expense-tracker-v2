


        <!--sample front end  -->

        <!-- Tinanggal kona lahat ng  yung database related dito-->

<?php require('partials/head.php') ?>




<div class="container mx-auto p-4">
        <div>
            
            <div id="simplifiedView-1" class="block max-w-md mx-auto bg-white shadow-lg rounded-lg p-5 mt-5 cursor-pointer md:hidden " onclick="toggleView(1)">
               
                <div class="flex justify-between border-b pb-3">
                    <span class="font-semibold text-gray-400">Expense Time:</span>
                    <span id= "smexpense_time" class="font-semibold text-gray-400"></span>
                </div>

                <div class="flex justify-between pt-3">
                    <span class="font-semibold text-gray-400">Expense Type:</span>
                    <span id= "smexpense_type" class="font-semibold text-gray-400">Subscription</span>
                </div>

            </div>



            <!-- Full View sa details ng simplified view -->

            <!-- nag bang nako ng id sa mga inputs ready for back end-->

            <div id="fullView-1" class= " md:hidden lg:hidden xl:hidden hidden max-w-md mx-auto bg-white shadow-lg rounded-lg p-5 mt-5 cursor-pointer">
               

                
                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">Expense ID:</span>
                    <input id="expense_id" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="1" />
                </div>

                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">User ID:</span>
                    <input id="user_id" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="1" />
                </div>


                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">Amount:</span>
                    <input id="amount" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="12:30 PM" />
                </div>

                <div class="flex justify-between border-b pb-3 pt-3">
                    <span class="font-semibold text-gray-400">Category:</span>
                    <input id="category" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="dont know yet" />
                </div>


                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Description:</span>
                    <input id="description" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="ako langto" />
                </div>


                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Expense Type:</span>
                    <input id="expense_type" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="Subscription" />
                </div>


                <div class="flex justify-between border-b pb-3 pt-3 date-log-area">
                    <span class="font-semibold text-gray-400">Expense Time</span>
                    <input id="expense_time" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="2022/05/04" />
                </div>

                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Goal ID:</span>
                    <input id="goal_id" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="0011" />
                </div>

                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Subscription ID:</span>
                    <input id="subcription_id" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="SB0011" />
                </div>

                <div class="flex justify-between">
                    <span class="font-semibold text-gray-400 pb-3 pt-3">Group ID:</span>
                    <input id="group_id" type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="0011" />
                </div>



                <div class="flex justify-start space-x-4 mt-4">
                    <button onclick="toggleView(1)" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 edit-button">Edit</button>
                    <button onclick="saveChanges(1)" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 save-changes-button hidden text-xl font-bold">Save Changes</button>
                    <button onclick="deleteExpense(1)" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600 text-xl font-bold">Delete</button>
                    
                    <!--yung value na nakain-dicate dito is yung sample expenseid since wala panaman 1 muna nilagay -->
                    <!--minatch komuna sa value ng expenseid naten  -->
                </div>
            </div>
        </div>
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

                var expTime, expType;

            

                expTime = updatedData.ExpenseTime;
                expType = updatedData.ExpenseType;
                



                document.getelementbyId("smexpense_time").innerText  = expTime ;
                document.getelementbyId("smexpense_type").innerText  = expType ;
            






            alert("Updated data: " + JSON.stringify(updatedData));
        }

        
        // idedelete neto yung data sa cell 

        // pwede nadin i abang dito yung php code naten- delete by expenseid 

        function deleteExpense(id) {

            if (confirm("Are you sure you want to delete this expense?")) {

               
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