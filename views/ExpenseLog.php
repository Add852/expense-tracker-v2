


<?php require('partials/head.php') ?>



<div class="container mx-auto p-4">

    <div>


        <!-- mobile View -->
          
        <div id="mobile_view" class="hidden" onclick="toggleView()">

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

        <div id="large_view" class="hidden" onclick="toggleView()">
           
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

            // yung mobileview/largeview/fullview is hidden by default.

            //global declaration to get Id's

            const mobileView = document.getElementById("mobile_view");
            const largeView  = document.getElementById("large_view");
            const fullView   = document.getElementById("fullView");

            const Resolution = window.innerWidth;  // che-check neto yung resolution ng device
      
            
            function checkResolution()
            {
                if(Resolution < 768)  //ibig sabihin for mobile
                {
                    alert("naread yung condition");
                    largeView.classList.add("hidden");
                    mobileView.classList.remove("hidden");
                    mobileView.className ="block max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer md:hidden xl:hidden lg:hidden";
                    fullView.className ="hidden md:hidden max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer";
                }

            }



            // dito automatic dedetect yung reso then update yung classname
            document.addEventListener('DOMContentLoaded'checkResolution()); 




            // dito yung part na kapag ki-click nani user yung simplified view.
            document.addEventListener('DOMContentLoaded', toggleView()
            {
            
            });
                


        </script>

        
    </div>





    

    
<?php  require('partials/footer.php') ?>