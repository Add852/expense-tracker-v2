


<?php require('partials/head.php') ?>


<div class="container mx-auto p-4">

    <div>


        <!-- mobile View -->
          
        <div id="mobile_view" class="hidden" onclick="toggleView()">

            <div class="flex justify-between border-b pb-3">
                <span class="font-semibold text-gray-300">Time of payment:</span>
                <span id="label_paymentDateTime" class="font-semibold text-gray-300"> 2022/05/04 : 8:45pm</span>
            </div>

            <div class="flex justify-between pt-3">
                <span class="font-semibold text-gray-300">Amount:</span>
                <span id="label_Amount" class="font-semibold text-gray-300">Amount</span>
            </div>

        </div>

        <!-- desktop/tablet/laptop View -->

        <div id="large_view" class="hidden" onclick="toggleView()">
           
            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Subscription ID</span>
                <span id="label_subscriptionID" class="font-semibold text-gray-300">1</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">User ID</span>
                <span id="label_userID" class="font-semibold text-gray-300">1</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Time of Payment</span>
                <span id="label_paymentDateTime" class="font-semibold text-gray-300">2022/05/04 : 8:45pm</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Amount</span>
                <span id="label_Amount" class="font-semibold text-gray-300">$20</span>
            </div>

            <div class="flex flex-col items-center">
                <span class="font-semibold text-gray-300">Category</span>
                <span id="label_category" class="font-semibold text-gray-300">Food</span>
            </div>

        </div>



        <!-- Full View -->


        <form id="fullView" method="POST"  action=""  class="hidden">

            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Subscription ID:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]"  id="subscriptionID" value="1" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">User ID:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]"  id="userID" value="1" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Time of Payment:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="paymentDateTime" value="$20" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Category:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]" id="category"  value="Food" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Amount:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="description" value="ako langto" />
            </div>

            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Description:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="description" value="Lorem ipsum" />
            </div>



            <div class="flex justify-start space-x-4 mt-4">
                <button onclick="saveChanges()" class="bg-blue-500  text-gray-300 px-4 py-1 rounded-lg hover:bg-blue-600">Save Changes</button>
                <button onclick="deleteExpense()" class="bg-red-500 text-gray-300 px-4 py-1 rounded-lg hover:bg-red-600">Delete</button>
            </div>

            
        </form>













        <script>
          
            //global declaration para kunin yung id's nung simplified and fullview

            const mobileView = document.getElementById("mobile_view");
            const largeView  = document.getElementById("large_view");
            let fullView   = document.getElementById("fullView");
            
            let Resolution;


            // eto ung default design class nila. - dineclare ko since - naka-

            mobileView.className = " block max-w-md mx-auto bg-stone-600 shadow-lg rounded-lg p-5 mt-5 cursor-pointer xl:hidden ";
            largeView.className  = " flex lg:flex lg:justify-between lg:max-w-4xl   md:flex md:justify-between md:max-w-4xl   mx-auto bg-stone-600  shadow-lg rounded-lg p-5 mt-5 cursor-pointer";
           

            // eto naman object sababa - eto yung fullview na pagpipilian if mobile size yung resolution or hindi.

            let fullView_class = {              

                mobile:         '  lg:hidden xl:hidden max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer',
                NotMobile:      '  sm:hidden md:block max-w-4xl mx-auto bg-[#03352c]   lg:block max-w-4xl mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer'

            };

    

            function checkResolution()                                      
            {

                Resolution = window.innerWidth;                            // kukunin neto yung current resolution

                if(Resolution < 768)                                       // if mobile yung resolution
                {
                    mobileView.classList.remove("hidden");               
                    largeView.classList.add("hidden");             
                }                                                                         
                else                                                      
                {        
                    largeView.classList.remove("hidden");                 
                    mobileView.classList.add("hidden");                  
                }

                                                                            // yung classList.add(""); bali eto yung nagda-dagdag ng value 
                                                                            // sa loob ng isang className
                fullView.className = 'hidden';                              // hahide neto yung fullview by default
            }

                

            function toggleView()
            {
                Resolution = window.innerWidth;                             // kukunin neto yung current resolution    
                
                if(Resolution < 768)                                       
                {              
                    fullView.className = fullView_class.mobile;                                                                      
                }

                if(Resolution > 767)                                                         
                {                                                           
                    fullView.className = fullView_class.NotMobile;          
                }         
            }

            function saveChanges()
            {             
                // pwede na iabang dito yung back-end.
                // update and retrieved dito.

                fullView.className = 'hidden';                  // hahide neto fullview after iclick save changes
            }

            function deleteExpense()
            {

                // if unique yung expenseID yun ung gagawin kong reference - geget ko value nya lage

                // after madelete base sa id then loop record ulit
              

                // pero pansamantala - ha-hide mona yung fullview satwing nagde-delete
                fullView.className = 'hidden';                  // hahide neto fullview after iclick save changes

            }

            document.addEventListener('DOMContentLoaded', checkResolution);         // eto yung initial load state ng checking ng reso
            window.addEventListener('resize', checkResolution);                     // eto naman yung continous checking satwing may changes sa size ng window or webpage


        </script>

        
</div>
    

    
<?php  require('partials/footer.php') ?>