<?php


require 'Database.php';

__construct();     // eto yung set up ng connection na galing sa 'Database.php'

// if needed nyong gamitin yung function sa loon ng isang file call nyo ung function na sinet nyo/

try {

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Handle delete action
    if (isset($_POST['delete_id'])) {
        $deleteId = $_POST['delete_id'];
        $stmt = $pdo->prepare("DELETE FROM expenselog WHERE id = :id");
        $stmt->bindParam(':id', $deleteId, PDO::PARAM_INT);
        $stmt->execute();
        
        // Respond for AJAX
        if (isAjaxRequest()) {
            echo json_encode(['success' => true]);
            exit;
        }
    }

    // Handle update action (real-time update)
    if (isset($_POST['update_id'])) {
        $updateId = $_POST['update_id'];
        $dateLog = $_POST['date_log'];
        $walletId = $_POST['wallet_id'];
        $timeOfPayment = $_POST['time_of_payment'];
        $expenseType = $_POST['expense_type'];
        $amount = $_POST['amount'];

        // Update the record in the database
        $stmt = $pdo->prepare("UPDATE expenselog SET date_log = :date_log, wallet_id = :wallet_id, time_of_payment = :time_of_payment, expense_type = :expense_type, amount = :amount WHERE id = :id");
        $stmt->bindParam(':date_log', $dateLog);
        $stmt->bindParam(':wallet_id', $walletId);
        $stmt->bindParam(':time_of_payment', $timeOfPayment);
        $stmt->bindParam(':expense_type', $expenseType);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':id', $updateId, PDO::PARAM_INT);
        $stmt->execute();

        // Respond for AJAX   ginagamit to para hindi kailangan irefresh yung page 
        // para magreflect yung retrieved data
        if (isAjaxRequest()) {
            echo json_encode(['success' => true]);
            exit;
        }
    }

    // Fetch records for initial page load
    $stmt = $pdo->query("SELECT * FROM expenselog");
    $expenses = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

// Helper function to detect AJAX requests
function isAjaxRequest() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="flex justify-center items-center bg-[#03352c]">












    <div class="container mx-auto p-4">


        <h1 class="text-3xl font-extrabold text-gray-400 mb-6 text-center">Expenses Logs</h1>

                <!-- Simplified View -->
        <div class="block md:hidden">

            <?php foreach ($expenses as $expense): ?>
            
                <div id="simplifiedView-<?= $expense['id'] ?>" class="block max-w-md mx-auto bg-white shadow-lg rounded-lg p-5 mt-5 cursor-pointer" onclick="toggleView(<?= $expense['id'] ?>)">
                    <div class="flex justify-between border-b pb-3">
                        <span class="font-semibold text-gray-400">Date Log:</span>
                        <span class="text-gray-600"><?= htmlspecialchars($expense['date_log']) ?></span>
                    </div>
                    <div class="flex justify-between pt-3">
                        <span class="font-semibold text-gray-400">Expense Type:</span>
                        <span class="text-gray-400"><?= htmlspecialchars($expense['expense_type']) ?></span>
                    </div>
                </div>

                <!-- Full View -->
                <div id="fullView-<?= $expense['id'] ?>" class="hidden max-w-md mx-auto bg-white shadow-lg rounded-lg p-5 mt-5 cursor-pointer">
                    <div class="flex justify-between border-b pb-3 pt-3 date-log-area">
                        <span class="font-semibold text-gray-400">Date Log:</span>
                        <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="<?= htmlspecialchars($expense['date_log']) ?>" />
                    </div>
                    <div class="flex justify-between border-b pb-3 pt-3">
                        <span class="font-semibold text-gray-400">Wallet ID:</span>
                        <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="<?= htmlspecialchars($expense['wallet_id']) ?>" />
                    </div>
                    <div class="flex justify-between border-b pb-3 pt-3">
                        <span class="font-semibold text-gray-400">Time of Payment:</span>
                        <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="<?= htmlspecialchars($expense['time_of_payment']) ?>" />
                    </div>
                    <div class="flex justify-between border-b pb-3 pt-3">
                        <span class="font-semibold text-gray-400">Expense Type:</span>
                        <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="<?= htmlspecialchars($expense['expense_type']) ?>" />
                    </div>
                    <div class="flex justify-between">
                        <span class="font-semibold text-gray-400 pb-3 pt-3">Amount:</span>
                        <input type="text" class="text-gray-400 bg-transparent border-b border-gray-300" value="<?= htmlspecialchars($expense['amount']) ?>" />
                    </div>
                    <div class="flex justify-start space-x-4 mt-4">
                        <!-- Edit button, initially set to "Edit" -->
                        <button onclick="toggleView(<?= $expense['id'] ?>)" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 edit-button">Edit</button>
                        <!-- Save Changes button, initially hidden, will be triggered after Edit is clicked -->
                        <button onclick="saveChanges(<?= $expense['id'] ?>)" class="bg-blue-500 text-white px-4 py-1 rounded-lg hover:bg-blue-600 save-changes-button hidden  text-xl font-bold ">Save Changes</button>
                        <button onclick="deleteExpense(<?= $expense['id'] ?>)" class="bg-red-500 text-white px-4 py-1 rounded-lg hover:bg-red-600  text-xl font-bold     ">Delete</button>
                    </div>
                </div>

            <?php endforeach; ?>

        </div>


        
        <!-- Table of Expenses for Larger Devices -->
        <table class="hidden md:table w-full border border-gray-300 shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-gradient-to-r from-gray-100 to-gray-200">
                <tr>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Date Log</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Wallet ID</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Time of Payment</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Type of Expense</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Paid Amount</th>
                    <th class="border px-4 py-2 text-left font-semibold text-gray-400">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($expenses as $expense): ?>
                    <tr class="bg-white transition-colors duration-200">
                        <td class="border px-4 py-2"><?= htmlspecialchars($expense['date_log']) ?></td>
                        <td class="border px-4 py-2"><?= htmlspecialchars($expense['wallet_id']) ?></td>
                        <td class="border px-4 py-2"><?= htmlspecialchars($expense['time_of_payment']) ?></td>
                        <td class="border px-4 py-2"><?= htmlspecialchars($expense['expense_type']) ?></td>
                        <td class="border px-4 py-2"><?= htmlspecialchars($expense['amount']) ?></td>
                        <td class="border px-4 py-2">
                            <button onclick="deleteExpense(<?= $expense['id'] ?>)" class="text-red-600 hover:text-red-800 text-xl font-bold ">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>




            // Function to toggle the full view to simplified view
            function toggleView(expenseId) {
                const fullView = document.getElementById('fullView-' + expenseId);
                const simplifiedView = document.getElementById('simplifiedView-' + expenseId);
                const editButton = fullView.querySelector('.edit-button');

                // Toggle the full/simplified view
                if (fullView.classList.contains('hidden')) {
                    fullView.classList.remove('hidden');
                    simplifiedView.classList.add('hidden');
                    editButton.textContent = 'Save Changes'; // Change the button label to "Save Changes"
                } else {
                    fullView.classList.add('hidden');
                    simplifiedView.classList.remove('hidden');
                }
            }

            
            // JavaScript function to save changes

            function saveChanges(expenseId) {
                const fullView = document.getElementById('fullView-' + expenseId);
                const simplifiedView = document.getElementById('simplifiedView-' + expenseId);
                const inputs = fullView.querySelectorAll('input');

                // Collect updated values from the input fields

                const updatedData = {
                    update_id: expenseId,
                    date_log: inputs[0].value,
                    wallet_id: inputs[1].value,
                    time_of_payment: inputs[2].value,
                    expense_type: inputs[3].value,
                    amount: inputs[4].value
                };

            
                // posting ng data
                $.ajax({
                    url: '', // pwede ilagay dito kung saan sya magpopost ng data // sa case dito dito mismo ipe-place yung data
                    type: 'POST',
                    data: updatedData,
                    success: function(response) {
                        const data = JSON.parse(response);
                        if (data.success) {
                            // Update the simplified view with the updated values
                            document.querySelector(`#simplifiedView-${expenseId} .text-gray-600:nth-child(2)`).textContent = updatedData.date_log;
                            document.querySelector(`#simplifiedView-${expenseId} .text-gray-600:nth-child(4)`).textContent = updatedData.expense_type;
                            
                            // Optionally update the other fields too
                            alert("Record successfully updated.");
                        } else {
                            alert("Error updating record: " + (data.message || 'Unknown error.'));
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX error: ', error);
                        alert("An error occurred while updating the record: " + xhr.responseText);
                    }
                });
                
            }







            function deleteExpense(id) {
                if (confirm("Are you sure you want to delete this expense?")) {
                    $.ajax({
                        url: '',
                        type: 'POST',
                        data: { delete_id: id },
                        success: function(response) {
                            const data = JSON.parse(response);
                            if (data.success) {
                                // Identify the correct element to remove
                                const simplifiedView = document.getElementById('simplifiedView-' + id);
                                const fullView = document.getElementById('fullView-' + id);
                                if (simplifiedView) {
                                    simplifiedView.remove();
                                }
                                if (fullView) {
                                    fullView.remove();
                                }
                                alert("Notification: Record successfully deleted.");
                            }
                        },
                        error: function() {
                            alert("An error occurred while deleting the record.");
                        }
                    });
                }
            }

        function showUpdateForm(id) {
            // Hide any previously opened form
            document.querySelectorAll('[id^="form-row-"]').forEach(row => row.classList.add('hidden'));

            // Get the data from the selected item based on the id
            const row = document.getElementById('row-' + id);
            if (row) {
                const date_log = row.querySelector('td:nth-child(1)').textContent;
                const wallet_id = row.querySelector('td:nth-child(2)').textContent;
                const time_of_payment = row.querySelector('td:nth-child(3)').textContent;
                const expense_type = row.querySelector('td:nth-child(4)').textContent;
                const amount = row.querySelector('td:nth-child(5)').textContent;

                // Set form values
                document.getElementById('update_id-' + id).value = id;
                document.getElementById('date_log-' + id).value = date_log;
                document.getElementById('wallet_id-' + id).value = wallet_id;
                document.getElementById('time_of_payment-' + id).value = time_of_payment;
                document.getElementById('expense_type-' + id).value = expense_type;
                document.getElementById('amount-' + id).value = amount;

                // Show the form under the clicked row
                document.getElementById('form-row-' + id).classList.remove('hidden');
            } else {
                // Handle the form in list view
                const formRow = document.getElementById('form-row-' + id);
                if (formRow) {
                    formRow.classList.toggle('hidden');
                }
            }
        }
    </script>






















</body>
</html>
