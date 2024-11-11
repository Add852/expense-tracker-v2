<?php require('partials/headNoSide.php') ?>

<div class="bgGreen min-h-screen">

    <div class="grid sm:grid-cols-1 md:grid-cols-2 h-screen text-center items-center">

        <div class="hidden md:inline">
            <h1 class="text-9xl text-gray-300 font-semibold">XPENSE</h1>
        </div>

        <!-- Ayaw opacity kapag ginamit yung tlGreen -->

        <div class="bg-green-950 rounded-3xl md:mx-16 p-8 bg-opacity-0 sm:mx-4 md:bg-opacity-100">

        <!-- <div class="tlGreen rounded-3xl md:mx-16 p-8 bg-opacity-0 sm:mx-4 md:bg-opacity-100"> -->

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

            <a href="/ForgetPass.html" class="textTeal hover:underline">Forgot password</a>

            <br>
            <hr class="border-gray-300 my-4">

            <p class="text-xl text-gray-300">No account yet?
                <a href="/SignUp.php" class="textTeal hover:underline">Sign Up</a>
            </p>

        </div>

    </div>

</div>

<?php require('partials/footer.php') ?>