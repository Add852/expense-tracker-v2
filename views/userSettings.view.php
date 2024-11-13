<?php require('partials/head.php') ?>

<div class="min-h-screen flex flex-col bg-[#03352c]">

    <!-- Account Settings Form -->
    <div class="flex flex-col justify-center items-center p-4 w-full max-w-md mx-auto flex-1 overflow-y-auto">
        <!-- Account Settings Heading -->
        <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold mb-4 text-center text-gray-300">Account Settings</h2>

        <!-- Profile Section (At the Top) -->
        <div class="flex flex-col items-center mb-6">
            <!-- Profile Image -->
            <img
                id="profileImage"
                src="https://img.icons8.com/ios-glyphs/90/ffffff/user--v1.png"
                alt="Profile"
                class="w-20 h-20 sm:w-24 sm:h-24 md:w-28 md:h-28 rounded-full border-4 border-gray-400 object-cover mb-4" />

            <!-- Button to Trigger Image Selection -->
            <button id="selectButton" type="button" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-4 rounded-3xl focus:outline-none" onclick="toggleImageSelection()">
                Select an icon
            </button>

            <!-- Image Selection Section -->
            <div id="imageSelection" class="hidden grid grid-cols-3 gap-4 mt-6">
                <!-- Image Options -->
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

        <!-- Account Settings Form -->
        <form action="your_php_handler.php" method="POST" enctype="multipart/form-data" class="space-y-4 w-full sm:w-80">
            <!-- First Name Field -->
            <div class="flex flex-col">
                <label class="text-md sm:text-lg font-semibold text-gray-300">First Name</label>
                <input type="text" name="firstName" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Last Name Field -->
            <div class="flex flex-col">
                <label class="text-md sm:text-lg font-semibold text-gray-300">Last Name</label>
                <input type="text" name="lastName" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Email Field -->
            <div class="flex flex-col">
                <label class="text-md sm:text-lg font-semibold text-gray-300">Email</label>
                <input type="email" name="email" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Current Password Field -->
            <div class="flex flex-col">
                <label class="text-md sm:text-lg font-semibold text-gray-300">Current Password</label>
                <input type="password" name="currentPassword" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- New Password Field -->
            <div class="flex flex-col">
                <label class="text-md sm:text-lg font-semibold text-gray-300">New Password</label>
                <input type="password" name="newPassword" class="px-3 py-1.5 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-sm" />
            </div>

            <!-- Save Button -->
            <div class="flex justify-center mt-4 w-full">
                <button type="submit" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-6 rounded-3xl focus:outline-none w-full sm:w-auto text-sm">
                    Save
                </button>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-[#03352c] p-4 text-center text-gray-300">
        <p>&copy; 2024 Your Company</p>
    </footer>
</div>

<script>
    // Function to change profile image
    function changeProfileImage(imageUrl) {
        document.getElementById('profileImage').src = imageUrl;
        document.getElementById('imageSelection').classList.add('hidden'); // Hide the image selection once a choice is made
        document.getElementById('selectButton').classList.remove('hidden'); // Show the "Select a Picture" button
    }

    // Function to toggle image selection
    function toggleImageSelection() {
        const imageSelection = document.getElementById('imageSelection');
        const selectButton = document.getElementById('selectButton');
        imageSelection.classList.toggle('hidden'); // Toggle the image selection
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
        -webkit-box-shadow: 0 0 0px 1000px #072822 inset !important;
        -webkit-text-fill-color: #fff !important;
    }
</style>

<?php require('partials/footer.php') ?>