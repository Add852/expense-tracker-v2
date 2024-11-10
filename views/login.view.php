<?php require('partials/head.php') ?>

<div class="bgGreen min-h-screen">

    <div class="flex items-center justify-center min-h-screen">

        <div class="h-screen flex text-center items-center justify-center">

            <div class="rounded-3xl tlGreen p-8">

                <h2 class="text-4xl font-semibold text-center textGray">Account Login</h2>
                <br>

                <hr class="border-gray-300 my-4">

                <form method="post" action="" class="space-y-1">

                    <label for="user"></label>
                    <br>

                    <input
                        type="username"
                        id="loginusername"
                        placeholder="Username"
                        class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                        required>
                    <br>

                    <label for="pass"></label>
                    <br>

                    <input
                        type="password"
                        id="loginpassword"
                        placeholder="Password"
                        class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                        required>
                    <br> <br>

                    <button
                        type="submit"
                        class="w-full py-3 mt-4 text-xl font-semibold textGray btGreen rounded-3xl hover:bgGreen">Login
                    </button>

                </form>

                <br>
                <hr class="border-gray-300 my-4">

                <h3 class="text-xl text-gray-300">No account yet?
                    <a href="/signup" class="textTeal hover:underline">Sign Up</a>
                </h3>

            </div>

        </div>

    </div>

</div>

<?php require('partials/footer.php') ?>