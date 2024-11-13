<?php require('partials/head.php') ?>

<main>
    <div class=" form-buttons">
        <button id="btn1" class="btn bg-emerald-700  " type="button" onclick="showForm('1')">
            Basic
        </button>
        <button id="btn2" class="btn btGreen" type="button" onclick="showForm('2')">
            Subscription
        </button>
        <button id="btn3" class="btn btGreen" type="button" onclick="showForm('3')">
            Group
        </button>
    </div>

    <form id="form1">
        <div class="grid max-w-16">
            <label for="amountB">Amount</label>
            <input type="number" id="amountB" name="amountB">
            <label for="categoryB">Choose a Category</label>
            <select id="categoryB" name="categoryB">
                <option value="" disabled selected>Select here</option>
                <option value="option1">Slavery</option>
                <option value="option2">Food</option>
                <option value="option3">Travel</option>
            </select>
            <label for="descB">Description</label>
            <input type="text" id="descB" name="descB">
            <label for="datetimeB">Expense Date and Time</label>
            <input type="datetime-local" id="datetimeB" name="datetimeB" required>
            <button class="btGreen" type="submit">Submit Basic Expense</button>
        </div>
    </form>
    <form id="form2" class="hidden">
        <div class="grid">
            <label for="amountS">Amount</label>
            <input type="number" id="amountS" name="amountS">
            <label for="period">Subscription Plan</label>
            <select id="period" name="period">
                <option value="" disabled selected>Select here</option>
                <option value="option1">Weekly</option>
                <option value="option2">Monthly</option>
                <option value="option3">Yearly</option>
            </select>
            <label for="categoryS">Choose a Category</label>
            <select id="categoryS" name="categoryS">
                <option value="" disabled selected>Select here</option>
                <option value="option1">Slavery</option>
                <option value="option2">Food</option>
                <option value="option3">Travel</option>
            </select>
            <label for="descS">Description</label>
            <input type="text" id="descS" name="descS">
            <label for="datetimeS">Expense Date and Time</label>
            <input type="datetime-local" id="datetimeS" name="datetimeS" required>
            <button class="btnSubmit" type="submit">Submit Form 3</button>
        </div>
    </form>
    <form id="form3" class="hidden">
        <div class="grid">
            <label for="amountG">Amount</label>
            <input type="number" id="amountG" name="amountG">
            <label for="groups">Choose a Group</label>
            <select id="groups" name="groups">
                <option value="" disabled selected>Select here</option>
                <option value="option1">Group 1</option>
                <option value="option2">Group 2</option>
                <option value="option3">Group 3</option>
            </select>
            <label for="categoryG">Choose a Category</label>
            <select id="categoryG" name="categoryG">
                <option value="" disabled selected>Select here</option>
                <option value="option1">Slavery</option>
                <option value="option2">Food</option>
                <option value="option3">Travel</option>
            </select>
            <label for="descG">Description</label>
            <input type="text" id="descG" name="descG">
            <label for="datetimeG">Expense Date and Time</label>
            <input type="datetime-local" id="datetimeG" name="datetimeG" required>
            <button class="btnSubmit" type="submit">Submit Group Expense</button>
        </div>
    </form>
</main>
<script>
    function showForm(id) {


        document.querySelectorAll('.btn').forEach(button => {
            button.classList.remove('bg-emerald-700');
        });
        document.getElementById('form1').classList.add('hidden');
        document.getElementById('form2').classList.add('hidden');
        document.getElementById('form3').classList.add('hidden');
        document.getElementById('form' + id).classList.remove('hidden');
        document.getElementById('btn' + id).classList.add('bg-emerald-700');
    }

    function setCurrentDateTime(inputId) {
        const now = new Date();
        const year = now.getFullYear();
        const month = String(now.getMonth() + 1).padStart(2, '0');
        const day = String(now.getDate()).padStart(2, '0');
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');

        const formattedDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
        document.getElementById(inputId).value = formattedDateTime;
    }

    window.onload = function() {
        setCurrentDateTime('datetimeG');
        setCurrentDateTime('datetimeB');
        setCurrentDateTime('datetimeS');
    };
</script>

<?php require('partials/footer.php') ?>