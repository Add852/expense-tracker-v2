<?php require('partials/head.php') ?>

<main class="grid min-h-full place-items-center bgGreen px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-gray-400">404</p>
        <h1 class="mt-4 text-balance text-5xl font-semibold tracking-tight textGray sm:text-7xl">Page not found</h1>
        <p class="mt-6 text-pretty text-lg font-medium text-gray-400 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/dashboard" class="bgOrange rounded-3xl px-3.5 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2">Go back home</a>
            <a href="#" class="text-sm font-semibold textTeal">Contact support <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>
</main>

<?php require('partials/footer.php') ?>