


<?php require('partials/head.php') ?>



<div class="container mx-auto p-4">

    <div>


        <!-- mobile View -->
          
        <div id="mobile_view-1" class="hidden" onclick="toggleView(1)">

            <div class="flex justify-between border-b pb-3">
                <span class="font-semibold text-gray-300">Expense Time:</span>
                <span id="label_expense_time" class="font-semibold text-gray-300"></span>
            </div>

            <div class="flex justify-between pt-3">
                <span class="font-semibold text-gray-300">Expense Type:</span>
                <span id="label_expense_type" class="font-semibold text-gray-300">Subscription</span>
            </div>

        </div>

        <!-- desktop/tablet/laptop View -->

        <div id="large_view" class="hidden" onclick="toggleView(1)">
           
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Expense ID</span>
                <span id="label_expense_id" class="font-semibold text-gray-300">1</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Description</span>
                <span id="label_description" class="font-semibold text-gray-300">Sample description</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Expense Time</span>
                <span id="label_expense_time" class="font-semibold text-gray-300">2022/05/04</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Expense Type</span>
                <span id="label_expense_type" class="font-semibold text-gray-300">Subscription</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Amount</span>
                <span id="label_amount" class="font-semibold text-gray-300">00.00</span>
            </div>

        </div>



        <!-- Full View -->


        <div id="fullView" class="hidden">

            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Expense ID:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]"  id="expense_id" value="1" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">User ID:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]"  id="user_id" value="1" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Amount:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="amount" value="$20" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Category:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]" id="category"  value="dont know yet" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Description:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="description" value="ako langto" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Expense Type:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]"  id="expense_type" value="Subscription" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Expense Time:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="expense_time" value="2022/05/04 : 8:45 PM" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Goal ID:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]" id="goal_id"  value="0011" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Subscription ID:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="subscription_id" value="SB0011" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Group ID:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]"  id="group_id"  value="0011" />
            </div>


            <div class="flex justify-start space-x-4 mt-4">
                <button onclick="saveChanges()" class="bg-blue-500  text-gray-300 px-4 py-1 rounded-lg hover:bg-blue-600">Save Changes</button>
                <button onclick="deleteExpense()" class="bg-red-500 text-gray-300 px-4 py-1 rounded-lg hover:bg-red-600">Delete</button>
            </div>

            
        </div>

        <script>

            function toggleView(expenseId) 
            {
                const fullView = document.getElementById('fullView');
                const mobile_view = document.getElementById('mobile_view-' + expenseId);
                
                // Check current visibility and toggle
                if (fullView.classList.contains('hidden')) {
   
                    fullView.classList.remove('hidden');
                    mobile_view.classList.add('hidden');
                } else {

                    fullView.classList.add('hidden');
                    mobile_view.classList.remove('hidden');
                }
            }


            function saveChanges() 
            {

                const fullView = document.getElementById('fullView');

                const updatedData = {  // pansamantala lang to since dipa tapos
                                       // pero if ok na, yung update ang ilalagay dito tas loop retrieve ng records.
                    
                    expense_id:             document.getElementById("expense_id").value,
                    user_id:                document.getElementById("user_id").value,

                    amount:                 document.getElementById("amount").value,
                    category:               document.getElementById("category").value,

                    description:            document.getElementById("description").value,
                    expense_type:           document.getElementById("expense_type").value,

                    expense_time:           document.getElementById("expense_time").value,                   
                    goal_id:                document.getElementById("goal_id").value,

                    subscription_id:        document.getElementById("subscription_id").value,
                    group_id:               document.getElementById("group_id").value

                };

                    // eto naman output ng mga labels sa simplified view.
                    // nagche-change depende sa save inputs ng user
                    // etong mga nasa baba is yung label ng simplified view ng mobile to larger device

                    document.getElementById("label_expense_id").innerText = updatedData.expense_id; 
                    document.getElementById("label_amount").innerText = updatedData.amount; 

                    document.getElementById("label_expense_time").innerText = updatedData.expense_time; 
                    document.getElementById("label_expense_type").innerText = updatedData.expense_type; 

                    document.getElementById("goal_id").innerText = updatedData.goal_id; 


                    // fullView.classList.add('hidden');  //  eto hide fullview  if kinlick yung save changes.
                                                       // and kaso, nagwowork sya sa smaller device pero sa higher reso hindi.

                                                    
                    if (window.innerWidth < 768)  // if mobile size yung reso
                    {
                        document.getElementById('mobile_view-1').classList.remove('hidden'); // balik sa simplified view
                        fullView.classList.add('hidden'); 
                        alert("sa small reso to ");
                    } 
     
                    else   // if  Desktop/Tablet/Laptop  yung reso
                    {
                        document.getElementById('large_view').classList.remove('hidden'); // balik sa simplified view
                        
                        fullView.classList.add('hidden'); 
                        alert("sa large reso to ");
                    }
            }




            function deleteExpense() {
                if (confirm("Are you sure you want to delete this expense?")) {
                    const fullView = document.getElementById('fullView');
                    const mobile_view = document.getElementById('mobile_view-1');

                    if (mobile_view) mobile_view.remove();
                    if (fullView) fullView.remove();

                    alert("Notification: Record successfully deleted.");
                }
            }

          

            function updateResolution() 
            {
                const mobile_view = document.getElementById('mobile_view-1');
                const large_view = document.getElementById('large_view');
                const fullView = document.getElementById('fullView');

                if (window.innerWidth < 768) { // Mobile resolution
                   
                    // kapag yung reso nasa mobile  view eto yung magiging classname nila

                    mobile_view.className = "block max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer md:hidden xl:hidden lg:hidden";
                    fullView.className = "hidden md:hidden max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer";
                    mobile_view.classList.remove('hidden');
                    large_view.classList.add('hidden');

                } 
                
                else   // Desktop/tablet/laptop resolutions
                { 
                    // kapag yung reso nasa desktop/tablet/laptop  view eto yung magiging classname nila

                    large_view.className = "hidden sm:hidden lg:flex lg:justify-between lg:max-w-4xl mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer";
                    fullView.className = "hidden sm:hidden lg:block max-w-4xl mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer";
                    large_view.classList.remove('hidden');
                    mobile_view.classList.add('hidden');
                    fullView.classList.add('hidden');
                }
            }

      
            document.addEventListener('DOMContentLoaded', updateResolution); 
            window.addEventListener('resize', updateResolution);

        </script>
        
    </div>





    

    
<?php  require('partials/footer.php') ?>