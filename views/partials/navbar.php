<nav class="fixed tlGreen z-40 w-full border-b border-one shadow-lg border-gray-800">
    <!-- NAVBAR CONTENT -->
    <div class="flex px-2 sm:px-6 lg:px-8 h-16 justify-between items-center">
        <!-- NAV Left -->
        <div>
            <!-- Image Logo -->
            <a href='/'>
                <img class="h-8 w-auto" src="https://th.bing.com/th/id/OIP.wvOQEvpiAyv7s2_c_2yG-QHaHa?w=187&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    alt="Your Company">
            </a>
        </div>

        <!-- NAV Center -->
        <div class="flex-1 text-center">
            <h1 class="ml-5 text-2xl font-bold text-gray-100">Expense Tracker</h1>
        </div>

        <!-- NAV Right -->
        <div class="relative ml-3">
            <div>
                <button type="button"
                    class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </button>
            </div>
            <div class="absolute z-50 right-0 mt-2 w-48 origin-top-right rounded-md py-2 tlGreen shadow-lg border border-gray-800">
                <a href="#" class="hover:bg-emerald-700 block px-4 py-2 text-sm text-gray-300">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300">Sign out</a>
            </div>
        </div>
    </div>


</nav>