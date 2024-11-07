<?php require('partials/head.php') ?>
<?php require('partials/navbar.php') ?>

<div class="min-h-screen flex items-center justify-center">

    <!-- Main Container -->
    <div class="container mx-auto max-w-lg md:max-w-4xl bg-[#072822] rounded-3xl overflow-hidden flex flex-col md:flex-row md:h-auto transition-transform transform">

        <!-- Account Settings Heading for Mobile Only -->
        <h2 class="text-3xl font-semibold text-white mb-6 text-center md:hidden leading-relaxed">Account Settings</h2>

        <!-- Profile Picture & Description Section -->
        <div class="p-8 w-full md:w-1/3 flex flex-col items-center justify-center bg-[#072820] text-gray-300 -mt-7">
            <img
                id="profileImage"
                src="https://img.icons8.com/ios-glyphs/90/ffffff/user--v1.png"
                alt="Profile"
                class="w-24 h-24 md:w-32 md:h-32 rounded-full border-4 border-gray-400 object-cover mb-4" />

            <!-- Image Selection Section -->
            <div id="imageSelection" class="hidden grid grid-cols-3 gap-4 mt-6">
                <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300" onclick="changeProfileImage('https://files.cults3d.com/uploaders/14013694/illustration-file/50f1a3a2-4979-4030-89fe-c7dfbaaa97ba/2023-05-25_22-38-38.png')">
                    <img src="https://files.cults3d.com/uploaders/14013694/illustration-file/50f1a3a2-4979-4030-89fe-c7dfbaaa97ba/2023-05-25_22-38-38.png" alt="Icon 1" class="w-16 h-16 rounded-full object-cover" />
                </div>
                <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300" onclick="changeProfileImage('https://randomuser.me/api/portraits/women/0.jpg')">
                    <img src="https://randomuser.me/api/portraits/women/0.jpg" alt="Profile 2" class="w-16 h-16 rounded-full object-cover" />
                </div>
                <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300" onclick="changeProfileImage('https://randomuser.me/api/portraits/men/1.jpg')">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile 3" class="w-16 h-16 rounded-full object-cover" />
                </div>
                <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300" onclick="changeProfileImage('https://randomuser.me/api/portraits/women/1.jpg')">
                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Profile 4" class="w-16 h-16 rounded-full object-cover" />
                </div>
                <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300" onclick="changeProfileImage('https://randomuser.me/api/portraits/men/2.jpg')">
                    <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="Profile 5" class="w-16 h-16 rounded-full object-cover" />
                </div>
                <div class="cursor-pointer p-2 border border-white rounded-full hover:scale-110 transition duration-300" onclick="changeProfileImage('https://randomuser.me/api/portraits/women/2.jpg')">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="Profile 6" class="w-16 h-16 rounded-full object-cover" />
                </div>
            </div>

            <!-- Button to Trigger Image Selection -->
            <button id="selectButton" type="button" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-6 rounded-3xl focus:outline-none" onclick="toggleImageSelection()">
                Select an icon
            </button>

            <!-- Textarea for "Tell us about yourself" -->
            <textarea id="aboutTextArea" class="pb-[1px] border-b border-white focus:outline-none focus:ring-0 text-gray-300 bg-transparent placeholder-gray-500 mt-4 w-full leading-none" placeholder="Tell us about yourself"></textarea>
        </div>

        <!-- Account Settings Form -->
        <div class="p-8 w-full md:w-2/3 flex flex-col justify-center">
            <!-- Account Settings Heading for Desktop Only -->
            <h2 class="hidden md:block text-4xl font-semibold text-gray-300 mb-6 text-center">Account Settings</h2>

            <form action="your_php_handler.php" method="POST" enctype="multipart/form-data" class="space-y-4">

                <!-- First Name Field -->
                <div class="flex flex-col">
                    <label class="text-lg font-semibold text-gray-300">First Name</label>
                    <input
                        type="text"
                        name="firstName"
                        class="px-4 py-2 border border-gray-400 rounded-lg bg-transparent focus:outline-none focus:ring focus:border-blue-300 text-gray-300 bg-[#072822]" />
                </div>

                <!-- Last Name Field -->
                <div class="flex flex-col">
                    <label class="text-lg font-semibold text-gray-300">Last Name</label>
                    <input
                        type="text"
                        name="lastName"
                        class="px-4 py-2 border border-gray-400 rounded-lg bg-transparent focus:outline-none focus:ring focus:border-blue-300 text-gray-300 bg-[#072822]" />
                </div>

                <!-- Email Field -->
                <div class="flex flex-col">
                    <label class="text-lg font-semibold text-gray-300">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="px-4 py-2 border border-gray-400 rounded-lg bg-transparent focus:outline-none focus:ring focus:border-blue-300 text-gray-300 bg-[#072822]" />
                </div>

                <!-- Current Password Field -->
                <div class="flex flex-col">
                    <label class="text-lg font-semibold text-gray-300">Current Password</label>
                    <input
                        type="password"
                        name="currentPassword"
                        class="px-4 py-2 border border-gray-400 rounded-lg bg-transparent focus:outline-none focus:ring focus:border-blue-300 text-gray-300 bg-[#072822]" />
                </div>

                <!-- New Password Field -->
                <div class="flex flex-col">
                    <label class="text-lg font-semibold text-gray-300">New Password</label>
                    <input
                        type="password"
                        name="newPassword"
                        class="px-4 py-2 border border-gray-400 rounded-lg bg-transparent focus:outline-none focus:ring focus:border-blue-300 text-gray-300 bg-[#072822]" />
                </div>

                <!-- Buttons (Back & Save) -->
                <div class="flex justify-between mt-4">
                    <!-- Back Button -->
                    <a href="#" class="flex items-center text-gray-300 bg-[#1a664d] hover:bg-[#1a664d] font-semibold py-2 px-6 rounded-3xl focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-6 h-6 text-white mr-2">
                            <path d="M19 12H5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Back
                    </a>

                    <!-- Save Button -->
                    <button type="submit" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-6 rounded-3xl focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- STYLE -->
    <style>
        /* Autofill background and text color fix */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px #072822 inset !important;
            /* Autofill background */
            -webkit-text-fill-color: #d1d5db !important;
            /* Autofill text color */
        }
    </style>

    <!-- JavaScript for Profile Image Selection -->
    <script>
        // Function to change profile image
        function changeProfileImage(imageUrl) {
            document.getElementById('profileImage').src = imageUrl;
            document.getElementById('imageSelection').classList.add('hidden'); // Hide the image selection once a choice is made
            document.getElementById('selectButton').classList.remove('hidden'); // Show the "Select an icon" button
        }

        // Function to toggle image selection
        function toggleImageSelection() {
            const imageSelection = document.getElementById('imageSelection');
            const selectButton = document.getElementById('selectButton');
            imageSelection.classList.toggle('hidden'); // Toggle the image selection
            selectButton.classList.toggle('hidden'); // Hide the "Select an icon" button while selecting
        }
    </script>

</div>

<?php require('partials/footer.php') ?>