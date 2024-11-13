<?php require('partials/head.php') ?>

<main class="h-screen bg-[#03352c] mt-4 overflow-y-auto flex flex-col"> <!-- Main container with flex layout -->

    <!-- Account Settings Section -->
    <div class="text-gray-300 text-3xl px-5 sm:px-10 md:px-16 lg:px-20 xl:px-24 xl:px-30 mt-0">
        <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold text-center">Account Settings</h2>
    </div>

    <!-- Account Settings Form Container -->
    <div class="flex flex-col flex-grow p-4 w-full max-w-sm sm:max-w-md mx-auto mt-0">

        <!-- Profile Section (At the Top) -->
        <div class="flex flex-col items-center mb-2 w-full space-y-2">
            <!-- Profile Image -->
            <img
                id="profileImage"
                src="https://img.icons8.com/ios-glyphs/90/ffffff/user--v1.png"
                alt="Profile"
                class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-4 border-gray-400 object-cover mb-2" />

            <!-- Button to Trigger Image Selection -->
            <button id="selectButton" type="button" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-4 rounded-3xl focus:outline-none" onclick="toggleImageSelection()">
                Select an icon
            </button>

            <!-- Image Selection Section -->
            <div id="imageSelection" class="mt-2 w-full max-w-sm">
                <!-- Hidden Div -->
                <div id="hiddenSelection" class="hidden">
                    <!-- Grid Layout -->
                    <div class="grid grid-cols-3 gap-2 mt-4">
                        <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300"
                            onclick="changeProfileImage('https://files.cults3d.com/uploaders/14013694/illustration-file/50f1a3a2-4979-4030-89fe-c7dfbaaa97ba/2023-05-25_22-38-38.png')">
                            <img src="https://files.cults3d.com/uploaders/14013694/illustration-file/50f1a3a2-4979-4030-89fe-c7dfbaaa97ba/2023-05-25_22-38-38.png"
                                alt="Icon 1" class="w-16 h-16 rounded-full object-cover" />
                        </div>
                        <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300"
                            onclick="changeProfileImage('https://randomuser.me/api/portraits/women/0.jpg')">
                            <img src="https://randomuser.me/api/portraits/women/0.jpg" alt="Profile 2" class="w-16 h-16 rounded-full object-cover" />
                        </div>
                        <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300"
                            onclick="changeProfileImage('https://randomuser.me/api/portraits/men/1.jpg')">
                            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile 3" class="w-16 h-16 rounded-full object-cover" />
                        </div>
                        <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300"
                            onclick="changeProfileImage('https://randomuser.me/api/portraits/women/1.jpg')">
                            <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Profile 4" class="w-16 h-16 rounded-full object-cover" />
                        </div>
                        <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300"
                            onclick="changeProfileImage('https://randomuser.me/api/portraits/men/2.jpg')">
                            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Profile 5" class="w-16 h-16 rounded-full object-cover" />
                        </div>
                        <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300"
                            onclick="changeProfileImage('https://randomuser.me/api/portraits/women/2.jpg')">
                            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Profile 6" class="w-16 h-16 rounded-full object-cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Account Settings Form -->
        <form action="your_php_handler.php" method="POST" enctype="multipart/form-data" class="space-y-2 w-full max-w-md mx-auto sm:w-80 flex-grow">
            <!-- First Name Field -->
            <div class="flex flex-col mb-2">
                <label class="text-md sm:text-lg font-semibold text-gray-300">First Name</label>
                <input type="text" name="firstName" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Last Name Field -->
            <div class="flex flex-col mb-2">
                <label class="text-md sm:text-lg font-semibold text-gray-300">Last Name</label>
                <input type="text" name="lastName" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Email Field -->
            <div class="flex flex-col mb-2">
                <label class="text-md sm:text-lg font-semibold text-gray-300">Email</label>
                <input type="email" name="email" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Current Password Field -->
            <div class="flex flex-col mb-2">
                <label class="text-md sm:text-lg font-semibold text-gray-300">Current Password</label>
                <input type="password" name="currentPassword" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- New Password Field -->
            <div class="flex flex-col mb-2">
                <label class="text-md sm:text-lg font-semibold text-gray-300">New Password</label>
                <input type="password" name="newPassword" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Save Button -->
            <div class="flex justify-center mt-4 w-full">
                <button type="submit" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-3 px-6 rounded-3xl focus:outline-none w-full sm:w-auto text-sm mt-2">
                    Save
                </button>
            </div>
        </form>

    </div>

       <!-- Footer Section to scroll when viewed into very small screen sizes -->
       <footer class="bg-[#03352c] text-gray-300 py-4 mt-auto">
        <div class="text-center">
            <p>&copy; </p>
        </div>
    </footer>


</main>

<script>
    // Function to change profile image
    function changeProfileImage(imageUrl) {
        document.getElementById('profileImage').src = imageUrl;
        document.getElementById('hiddenSelection').classList.add('hidden'); // Hide the image selection once a choice is made
        document.getElementById('selectButton').classList.remove('hidden'); // Show the "Select a Picture" button
    }

    // Function to toggle image selection
    function toggleImageSelection() {
        const hiddenSelection = document.getElementById('hiddenSelection');
        const selectButton = document.getElementById('selectButton');
        hiddenSelection.classList.toggle('hidden'); // Toggle the image selection
        selectButton.classList.toggle('hidden'); // Hide the "Select an icon" button
    }
</script>

<style>
    /* Autofill background and text color fix */
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    textarea:-webkit-autofill:hover,
    textarea:-webkit-autofill:focus {
        -webkit-box-shadow: 0 0 0px 1000px #03352c inset !important;
        -webkit-text-fill-color: #fff !important;
    }
</style>

<?php require('partials/footer.php') ?>
