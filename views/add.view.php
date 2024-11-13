<?php require('partials/head.php') ?>

<main class="flex justify-center sm:justify-start text-base sm:text-lg text-gray-200">
    <div>
        <div class="form-buttons space-x-1 text-lg sm:text-xl font-semibold my-3">
            <button
                id="btn1"
                class="btn py-1 px-4 rounded-3xl btActive"
                type="button"
                onclick="showForm('1')"
                disabled>
                Basic
            </button>
            <button
                id="btn2"
                class="btn py-1 px-4 rounded-3xl btGreen2"
                type="button"
                onclick="showForm('2')">
                Subscription
            </button>
            <button
                id="btn3"
                class="btn py-1 px-4 rounded-3xl btGreen2"
                type="button"
                onclick="showForm('3')">
                Group
            </button>
        </div>

        <form class="grid space-y-5">
            <input
                type="number"
                id="amount"
                name="amount"
                placeholder="Amount"
                required
                class="p-1 pl-2 rounded-lg border border-gray-400 bgGreen focus:outline-none">
            <select
                id="form2"
                name="period"
                required
                class="p-1 rounded-lg border border-gray-400 bgGreen focus:outline-none hidden">
                <option value="" disabled selected>Subscription Plan</option>
                <option value="option1">Weekly</option>
                <option value="option2">Monthly</option>
                <option value="option3">Yearly</option>
            </select>
            <select
                id="form3"
                name="group"
                required
                class="p-1 rounded-lg border border-gray-400 bgGreen focus:outline-none hidden">
                <option value="" disabled selected>Group</option>
                <option value="option1">Group 1</option>
                <option value="option2">Group 2</option>
                <option value="option3">Group 3</option>
            </select>
            <select
                id="category"
                name="category"
                required
                class="p-1 rounded-lg border border-gray-400 bgGreen focus:outline-none">
                <option value="" selected disabled>Category</option>
                <option value="option1">Slavery</option>
                <option value="option2">Food</option>
                <option value="option3">Travel</option>
            </select>
            <input
                type="text"
                id="desc"
                name="desc"
                placeholder="Description"
                required
                class="p-1 rounded-lg border border-gray-400 bgGreen focus:outline-none">
            <input
                type="datetime-local"
                id="datetime"
                name="datetime"
                required
                class="p-1 rounded-lg border border-gray-400 bgGreen focus:outline-none">
            <input
                type="hidden"
                id="type"
                name="type"
                value="basic">
            <button
                class="py-1 text-lg sm:text-xl font-semibold btGreen2 rounded-3xl"
                type="submit">
                Add Expense
            </button>
        </form>
    </div>
</main>
<script>
    function showForm(id) {
        document.querySelectorAll('.btn').forEach(btn => {
            btn.classList.remove('btActive');
            btn.classList.add('btGreen2');
            btn.disabled = false;
        });

        document.getElementById('btn' + id).classList.add('btActive');
        document.getElementById('btn' + id).classList.remove('btGreen2');
        document.getElementById('btn' + id).disabled = true;

        document.getElementById('form2').classList.add('hidden');
        document.getElementById('form3').classList.add('hidden');
        document.getElementById('form' + id)?.classList.remove('hidden');
    }

    window.onload = function() {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
        document.getElementById('datetime').value = formattedDateTime;
    };
</script>

<?php require('partials/footer.php') ?>