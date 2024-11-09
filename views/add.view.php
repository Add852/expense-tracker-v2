<?php require('partials/head.php') ?>

<main id="view">
    <div id="panel">
        <div class="form-buttons">
            <button id="btn1" class="btn" type="button" onclick="showForm('1')">
                Group
            </button>
            <button id="btn2" class="btn activeBtn" type="button" onclick="showForm('2')">
                Basic
            </button>
            <button id="btn3" class="btn" type="button" onclick="showForm('3')">
                Subscription
            </button>
        </div>
        <form>
            <div id="form1" class="form-container">
                <label for="groups">Choose a Group</label>
                <select id="groups" name="groups">
                    <option value="" disabled selected>Select here</option>
                    <option value="option1">Group 1</option>
                    <option value="option2">Group 2</option>
                    <option value="option3">Group 3</option>
                </select><br>
                <label for="amountG">Amount</label>
                <input type="number" id="amountG" name="amountG"><br>
                <label for="categoryG">Choose a Category</label>
                <select id="categoryG" name="categoryG">
                    <option value="" disabled selected>Select here</option>
                    <option value="option1">Slavery</option>
                    <option value="option2">Food</option>
                    <option value="option3">Travel</option>
                </select><br>
                <label for="descG">Description</label>
                <input type="text" id="descG" name="descG"><br>
                <label for="datetimeG">Expense Date and Time</label>
                <input type="datetime-local" id="datetimeG" name="datetimeG" required><br>
                <button class="btnSubmit" type="submit">Submit Group Expense</button>
            </div>
        </form>
        <form>
            <div id="form2" class="form-container activeForm">
                <label for="amountB">Amount</label>
                <input type="number" id="amountB" name="amountB"><br>
                <label for="categoryB">Choose a Category</label>
                <select id="categoryB" name="categoryB">
                    <option value="" disabled selected>Select here</option>
                    <option value="option1">Slavery</option>
                    <option value="option2">Food</option>
                    <option value="option3">Travel</option>
                </select><br>
                <label for="descB">Description</label>
                <input type="text" id="descB" name="descB"><br>
                <label for="datetimeB">Expense Date and Time</label>
                <input type="datetime-local" id="datetimeB" name="datetimeB" required><br>
                <button class="btnSubmit" type="submit">Submit Basic Expense</button>
            </div>
        </form>
        <form>
            <div id="form3" class="form-container">
                <label for="amountS">Amount</label>
                <input type="number" id="amountS" name="amountS"><br>
                <label for="period">Subscription Plan</label>
                <select id="period" name="period">
                    <option value="" disabled selected>Select here</option>
                    <option value="option1">Weekly</option>
                    <option value="option2">Monthly</option>
                    <option value="option3">Yearly</option>
                </select><br>
                <label for="categoryS">Choose a Category</label>
                <select id="categoryS" name="categoryS">
                    <option value="" disabled selected>Select here</option>
                    <option value="option1">Slavery</option>
                    <option value="option2">Food</option>
                    <option value="option3">Travel</option>
                </select><br>
                <label for="descS">Description</label>
                <input type="text" id="descS" name="descS"><br>
                <label for="datetimeS">Expense Date and Time</label>
                <input type="datetime-local" id="datetimeS" name="datetimeS" required><br>
                <button class="btnSubmit" type="submit">Submit Form 3</button>
            </div>
        </form>
    </div>
</main>
<script>
    function showForm(id) {
        document.querySelectorAll('.form-container').forEach(form => {
            form.classList.remove('activeForm');
        });

        document.querySelectorAll('.btn').forEach(button => {
            button.classList.remove('activeBtn');
        });

        document.getElementById('form' + id).classList.add('activeForm');
        document.getElementById('btn' + id).classList.add('activeBtn');
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