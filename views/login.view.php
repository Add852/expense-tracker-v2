<?php require('partials/headNoSide.php') ?>

<div class="min-h-screen">
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

            <form method="POST" action="/login" class="space-y-1">

                <label for="user"></label>
                <br>

                <input
                    type="username"
                    name="username"
                    placeholder="Username"
                    class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                    required>
                <br>

                <label for="pass"></label>
                <br>

                <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                    required>
                <br><br>

                <!-- ERROR MESSAGE TO NAKAHIDE KAPAG WALANG ERROR -->
                <div class="<?= isset($errorMessage) ? '' : 'hidden' ?> bg-red-400 rounded-lg text-center py-2">
                    <?= $errorMessage ?>
                </div>

                <button
                    type="submit"
                    class="w-full py-3 mt-4 text-xl font-semibold textGray btGreen rounded-3xl hover:bgGreen">Login
                </button>

            </form>

            <br>

            <a href="/forgot" class="textTeal hover:underline">Forgot password</a>

            <br>
            <hr class="border-gray-300 my-4">

            <p class="text-xl text-gray-300">No account yet?
                <a href="/signup" class="textTeal hover:underline">Sign Up</a>
            </p>

        </div>

    </div>
</div>

<?php require('partials/footer.php') ?>