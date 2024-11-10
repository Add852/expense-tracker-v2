<?php require('partials/head.php') ?>

<div class="bgGreen flex items-center justify-center">
    <div class="w-full max-w-md p-8 tlGreen rounded-3xl shadow-lg flex items-center justify-center">
        <h2 class="text-4xl font-semibold text-center textGray">Create an account</h2>
        <br />

        <hr class="my-4 border-gray-300" />
        <br />

        <form action="" method="POST" class="space-y-6">

            <div class="flex space-x-5">
                <input
                    type="text"
                    name="first_name"
                    placeholder="First Name"
                    class="w-1/2 p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                    required />

                <input
                    type="text"
                    name="last_name"
                    placeholder="Last Name"
                    class="w-1/2 p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                    required />
            </div>

            <input

                type="text"
                name="username"
                placeholder="Username"
                class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                required />

            <input
                type="email"
                name="email"
                placeholder="Email Address"
                class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                required />

            <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                required />

            <input
                type="password"
                name="confirm_password"
                placeholder="Confirm Password"
                class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                required />

            <div>
                <button
                    type="submit"
                    class="w-full py-3 mt-4 text-xl font-semibold textGray btGreen rounded-3xl hover:bgGreen">Next</button>
            </div>

        </form>

        <p class="mt-4 text-center textGray">
            Already have an account?
            <a href="/login" class="textTeal hover:underline">Sign In</a>
        </p>

    </div>

</div>

<?php require('partials/footer.php') ?>