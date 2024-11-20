<?php require('partials/head.php') ?>

<div class="min-h-screen bg-[#03352c] flex flex-col items-center justify-start mt-12">
    <!-- Main Content -->
    <main class="w-full max-w-4xl flex flex-col sm:flex-row sm:space-x-6 items-center justify-start">

        <!-- Profile Picture & Description Section -->
        <div class="p-6 min-h-[310px] w-full max-w-md flex flex-col items-center justify-center text-gray-300 bg-transparent sm:bg-[#072822] rounded-3xl mb-15 mt-15">
            <!-- Grouping Image and Button -->
            <div class="flex flex-col items-center space-y-3">
                <!-- Profile Image -->
                <img
                    id="profileImage"
                    src="https://img.icons8.com/ios-glyphs/90/ffffff/user--v1.png"
                    alt="Profile"
                    class="w-24 h-24 sm:w-28 sm:h-28 md:w-36 md:h-36 rounded-full border-4 border-gray-400 object-cover" />
                
                <!-- Button -->
                <button class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-5 rounded-3xl focus:outline-none" onclick="document.getElementById('fileInput').click()">
                    Select a Profile Icon
                </button>
            </div>
            <input type="file" id="fileInput" class="hidden" accept="image/*" onchange="previewImage(event)">

            <!-- Mobile Input Fields -->
            <div class="flex flex-col sm:hidden space-y-4 mt-6 w-full">
                <div class="flex flex-col">
                    <label class="text-lg font-semibold">First Name</label>
                    <input type="text" name="firstName" class="px-4 py-2 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label class="text-lg font-semibold">Last Name</label>
                    <input type="text" name="lastName" class="px-4 py-2 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label class="text-lg font-semibold">Email</label>
                    <input type="email" name="email" class="px-4 py-2 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-lg" />
                </div>

                <!-- Change Password Button -->
                <div class="flex flex-col mt-4">
                    <button type="button" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-5 rounded-3xl focus:outline-none">
                        Change Password
                    </button>
                </div>

                <!-- Save Button -->
                <div class="flex justify-center w-full mt-4">
                    <button type="submit" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-3 px-9 rounded-3xl focus:outline-none">
                        Save
                    </button>
                </div>
            </div>
        </div>

        <!-- Account Settings Form -->
        <div class="p-6 w-full max-w-lg flex flex-col justify-center text-gray-300 space-y-6 mt-6 sm:mt-0 sm:ml-6">
            <div class="hidden sm:flex flex-col space-y-4">
                <div class="flex flex-col">
                    <label class="text-lg font-semibold">First Name</label>
                    <input type="text" name="firstName" class="px-4 py-2 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label class="text-lg font-semibold">Last Name</label>
                    <input type="text" name="lastName" class="px-4 py-2 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-lg" />
                </div>
                <div class="flex flex-col">
                    <label class="text-lg font-semibold">Email</label>
                    <input type="email" name="email" class="px-4 py-2 border border-gray-400 rounded-lg bg-[#072822] text-gray-300 text-lg" />
                </div>

                <!-- Change Password Button -->
                <div class="flex flex-col mt-4">
                    <button type="button" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-2 px-5 rounded-3xl focus:outline-none">
                        Change Password
                    </button>
                </div>
            </div>
        </div>
    </main>

    <!-- Save Button -->
    <div class="flex justify-center w-full mt-6 sm:mt-2">
        <button type="submit" class="bg-[#1a664d] hover:bg-[#1a664d] text-gray-300 font-semibold py-3 px-9 rounded-3xl focus:outline-none sm:block hidden">
            Save
        </button>
    </div>
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('profileImage').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>

<?php require('partials/footer.php') ?>
