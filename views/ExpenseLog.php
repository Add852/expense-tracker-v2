


<?php require('partials/head.php') ?>




<div class="container mx-auto p-4">
    
    <div>


        <!-- mobile View -->
          
        <!-- yung magiging default css netong mga to nasa javascrtipt. sundan nalng per ID -->

        <div id="mobile_view" class="hidden" onclick="toggleView()">

            <h2 class = "text-xl font-bold text-white bg-green-700 rounded-t-lg" id = "amount"  >             ₱ 35                      </h2>
            
            <div class="flex justify-between items-center  rounded-t-lg ">
                                                              <!--Concatenate nalang dito ung Title saka yung value -->
                <p  class = "text-sm  " id = "category"       >    Category: food               </p>
                <p  class = "text-sm  " id = "expense_time"   >    11 Sep 2001                  </p> 
    
            </div>

        </div>
        

        <!-- desktop/tablet/laptop View -->

        <!-- yung magiging default css netong mga to nasa javascrtipt. sundan nalng per ID -->

        <div id="large_view" class="hidden" onclick="toggleView()">
           
            <div class="flex justify-between items-center bg-green-800 rounded-t-lg px-4 py-2">

                <h2 class = "text-lg  " id = "description"  >                                 New York Flight                 </h2>
                <p  class = "text-sm  " id = "expense_time" >                                 11 Sep 2001                     </p>

            </div>
      
            <div class="flex justify-between items-start px-4 py-3 bg-[#03352c] ">
          
                <div>                                                                     <!--Concatenate nalang dito ung Title saka yung value -->
                    <p class="text-sm text-gray-300"  id="category"      >              Category: Transportation         </p>
                    <p class="text-sm text-gray-300"  id="expense_type"  >              Type: Basic                      </p>
                </div>                                                                    <!--Concatenate nalang dito ung Title saka yung value -->

                <p class="text-lg font-bold"  id="amount">                                 ₱ 35                             </p> 

            </div>

        </div>




        <!-- Full View -->

        <form id="fullView" method="POST"  action=""  class="hidden">




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
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="description" value="New York Flight" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Expense Type:</span>
                <input type="text" class="text-gray-300 bg-[#03352c]"  id="expense_type" value="Subscription" />
            </div>


            <div class="flex justify-between border-b pb-3 pt-3">
                <span class="font-semibold text-gray-300">Expense Time:</span>
                <input  type="text" class="text-gray-300 bg-[#03352c]" id="expense_time" value="11 Sep 2001" />
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

            mobileView.className = " block max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer xl:hidden ";
            largeView.className  = " max-w-5xl mx-auto bg-green-900 text-white rounded-lg shadow-lg cursor-pointer";
           

            // eto naman object sababa - eto yung fullview na pagpipilian if mobile size yung resolution or hindi.

            let fullView_class = {              

                mobile:         '  lg:hidden xl:hidden max-w-md mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer',
                NotMobile:      '  sm:hidden md:block max-w-5xl mx-auto bg-[#03352c]  lg:block max-w-5xl mx-auto bg-[#03352c] shadow-lg rounded-lg p-5 mt-5 cursor-pointer'

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
                    fullView.className = fullView_class.mobile;             // if yung reso pang mobile - then mobile pang mobile yung design                                                         
                }

                if(Resolution > 767)                                                         
                {                                                           
                    fullView.className = fullView_class.NotMobile;         // desktop/tablet/laptop view
                }         
            }

            function saveChanges()
            {             
                // pwede na iabang dito yung back-end.
                // update and retrieved dito.

                fullView.className = 'hidden';                              // hahide neto fullview after iclick save changes
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