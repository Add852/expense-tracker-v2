<?php require('partials/headNoSide.php') ?>

<div class="flex flex-col gap-5 items-center justify-center">
    <div class="tlBgGreen w-full max-w-md p-8 rounded-3xl">
        <a href="/login" class="justify-start textTeal hover:underline">&larr; Go Back</a>
        <br />
        <br />
        <h2 class="text-4xl font-semibold text-center textGray">Forgot Password</h2>
        <br />
        <hr class="my-4 border-gray-300" />
        <br />

        <form action="/signup" method="POST" class="space-y-3">
            <label
                class="text-sm font-semibold textGray"
                for="email">
                Enter your e-mail address to reset your password
            </label>
            <input
                id="email"
                type="email"
                name="email"
                placeholder="Email Address"
                class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                required />

            <!-- Submit -->
            <div>
                <button
                    type="submit"
                    class="w-full py-3 mt-4 text-xl font-semibold textGray btGreen rounded-3xl"
                    onclick="em">
                    Next</button>
            </div>
        </form>
        <p>An e-mail has</p>
    </div>
</div>

<?php require('partials/footer.php') ?>