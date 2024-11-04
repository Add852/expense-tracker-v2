<!DOCTYPE html>
<html>
<head>
	<title>Create Wallet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<style type="text/css">
		.container{
			display: flex;
			gap: 20px;
			background-color: #0b4d4f;
			padding: 200px;
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
		}
		.profile-section{
			background-color: #0a3b3d;
			color: #fff;
			border-radius: 10px;
			padding: 20px;
			text-align: center;
			width: 500px;
		}
		.profile-section .icon{
			background-color: black;
			width: 100px;
			height: 100px;
            border-radius: 50%;
            margin: 0 auto 20px;
		}
		.profile-section button{
			background-color: #74a494;
			color: #fff;
			border: none;
			padding: 10px;
			margin-top: 10px;
			width: 100%;
			border-radius: 12px;
			cursor: pointer;

		}
		.form-section{
			display: flex;
			flex-direction: column;
			justify-content: center;
			width: 900px;
		}
		.form-section h1{
			 margin-top: 0;
			 margin-bottom: 10px;
			 font-size: 24px;
			 color: #fff;
		}
		.form-section label{
			font-size: 20px;
			margin: 10px 0 5px;
			color: #fff;
		}
		.form-section input,
        .form-section select,
        .form-section button{
        	background-color: #5e9f93;
        	border: none;
        	padding: 10px;
        	font-size: 14px;
        	color: #fff;
        	border-radius: 10px;
        	width: 100%;
        }
        .form-section input[type="checkbox"] {
            width: 50px;
            margin: 0 10px 0 0;
        }
        .form-section button{
        	margin-top: 20px;
        	cursor: pointer;
        	font-weight: bold;
        }
        .checkbox-container{
        	display: flex;
        	align-items: center;
        }
	</style>
<body>
<?php
echo "<section>
	<div class='container'>
		<div class='profile-section'>
			<h1 align='center'>Profile</h1><br>
			<div class='icon'></div>
			<button>Change Icon</button>
			<button>Select From Device</button>
		</div>
		<div class='form-section'>
			<h1 align='center'>Create Your Wallet</h1>
			<label for='wallet-category'>Wallet Category</label>
			<select id='wallet-category'>
				<option value='personal'>Personal</option>
				<option value='business'>Business</option>
				<option value='savings'>Savings</option>
			</select>
			<label for='amount'>Amount</label>
			<input type='number' name='amount' id='amount' placeholder='Enter amount'>

			<label for='description'>Description</label>
			<input type='text' name='description' id='description' placeholder='Enter description'>

			<label for='budget-limit'>Budget Limit</label>
			<input type='number' name='budget-limit' id='budget-limit' placeholder='Enter budget limit'>

			<div class='checkbox-container'>
				<label for='overspending-alarm'>Overspending Alarm</label>
				<input type='checkbox' name='overspending-alarm' id='overspending-alarm'>
			</div>
			<button>Create</button>
		</div>
	</div>
</section>";
?>
</body>
</html>