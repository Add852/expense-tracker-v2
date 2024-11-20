<?php

$userID = $_SESSION['userid'];
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['amountToAdd'])) {
    $amountToAdd = $_POST['amountToAdd'];
    $db->query("UPDATE users SET amount = amount + ? WHERE userid = ?;", [$amountToAdd, $userID]);

    header("Location: {$_SERVER['REQUEST_URI']}");
    exit;
}
$balance = $db->query('select amount from users where userid = ?;', [$userID])->fetchColumn();
$_SESSION['balance'] = $balance;
?>

<!-- BALANCE ICON -->
<div class="bg-emerald-900 text-base sm:text-xl rounded-xl h-8 flex justify-between items-center pl-1 pr-2">
    <button id="addBalanceButton" class="h-6 w-6 mr-3">
        <svg class="text-gray-300 hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
        </svg>
    </button>
    <?= isset($balance) ? "₱ $balance " : '₱ 0' ?>
</div>

<!-- ADD BALANCE FORM -->
<div id="addBalanceForm" class="fixed w-96 rounded-lg tlGreen text-sm hidden gap-5 px-5 py-2 shadow-lg">
    <!-- Header and X -->
    <div class="flex flex-row justify-between">
        <h2 class="text-3xl">Add Balance</h2>
        <button id="addBalanceFormXButton">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
    <hr class="my-5">
    <form method="POST" action="" class="flex flex-col gap-5">
        <div class="flex flex-row gap-4 items-center">
            <label for="amount" class="text-2xl font-semibold">Amount: </label>
            <input
                type="number"
                name="amountToAdd"
                placeholder="0"
                class="w-full p-3 border border-gray-400 textGray bg-transparent rounded-lg focus:outline-none"
                required />
        </div>
        <button type="submit" class="btGreen rounded-lg w-full p-2">Add</button>
    </form>
</div>

<script>
    const addBalanceButton = document.getElementById('addBalanceButton');
    const addBalanceFormXButton = document.getElementById('addBalanceFormXButton');
    const addBalanceForm = document.getElementById('addBalanceForm');
    addBalanceButton.addEventListener('click', () => {
        addBalanceForm.classList.toggle('hidden');
    });
    addBalanceFormXButton.addEventListener('click', () => {
        addBalanceForm.classList.toggle('hidden');
    });
</script>