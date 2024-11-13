<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom colors for the background, panel, and buttons */
        .bg-custom-background {
            background-color: #03352c;
        }

        .bg-custom-panel {
            background-color: #072822;
        }

        .bg-custom-button {
            background-color: #1a664d;
        }

        .bg-custom-button-hover {
            background-color: #1a664d;
        }

        /* Custom input styles with animation */
        .input-container {
            position: relative;
        }

        .input {
            width: 100%;
            height: 45px;
            border: 1px solid #9ca3af;
            /* 1px border with gray color */
            outline: none;
            padding: 0px 7px;
            border-radius: 6px;
            color: #fff;
            font-size: 15px;
            background-color: transparent;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 1), -1px -1px 6px rgba(255, 255, 255, 0.4);
        }

        .input:focus {
            color: #fff;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 1), -1px -1px 6px rgba(255, 255, 255, 0.4), inset 3px 3px 10px rgba(0, 0, 0, 1), inset -1px -1px 6px rgba(255, 255, 255, 0.4);
            border-color: #9ca3af;
            /* Ensure focus border color is consistent */
        }

        .label {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            transition: 0.3s ease;
            font-size: 15px;
            pointer-events: none;
        }

        .input:focus~.label,
        .input:not(:placeholder-shown)~.label {
            transform: translateY(-37px);
            font-size: 12px;
            color: #9ca3af;
        }

        /* Autofill background and text color fix */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus {
            -webkit-box-shadow: 0 0 0px 1000px #072822 inset !important;
            /* Autofill background */
            -webkit-text-fill-color: #d1d5db !important;
            /* Autofill text color */
        }
    </style>
</head>

<body class="bg-custom-background flex items-center justify-center min-h-screen">
    <div class="bg-custom-panel p-8 rounded-lg shadow-lg max-w-md w-full text-center text-white">
        <div class="flex justify-start mb-0">
            <button onclick="history.back()"
                class="bg-custom-button hover:bg-custom-button-hover w-8 h-8 flex items-center justify-center rounded-full text-white text-lg">
                &lt;
            </button>
        </div>
        <h2 class="text-4xl font-semibold mb-6 mt-0 border-b-2 border-[#1a664d] pb-6">Forgot Password?</h2>
        <p class="mb-6">Enter your e-mail address to reset your password.</p>
        <form action="forgot_password.php" method="POST" class="space-y-4">
            <div class="input-container">
                <input type="email" name="email" required class="input placeholder-transparent" placeholder=" " />
                <label class="label">Email Address</label>
            </div>
            <button type="submit" name="submit"
                class="bg-custom-button hover:bg-custom-button-hover w-full py-3 rounded-full font-semibold text-xl">Send</button>
        </form>
    </div>
</body>

</html>