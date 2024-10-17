<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MU ICT Labs</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white shadow-lg rounded-xl p-10 max-w-lg w-full space-y-6">
            
            <div class="flex justify-center mb-4">
                <img src="mu_assets/mu_logo.png" alt="MU ICT Logo" class="w-30 h-24">
            </div>
            
            <h2 class="text-3xl font-bold text-center text-teal-600 mb-8">Welcome to ICT MU Portal</h2>
            
            <form id="loginForm" method="POST" class="space-y-6">
                
                <div class="mb-6">
                    <label for="gr_number" class="block text-lg font-medium text-gray-700 mb-2">Enrollment No / Faculty ID</label>
                    <input type="text" id="gr_number" name="gr_number" class="w-full px-5 py-3 text-lg border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500" placeholder="Enter Your User ID" required oninput="checkRole()">
                </div>
                
                <div class="relative mb-6">
                    <label for="password" class="block text-lg font-medium text-gray-700 mb-2">Enter Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="w-full px-5 py-3 text-lg border rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 pr-12" placeholder="Password" required>
                        <span class="absolute inset-y-0 right-0 flex items-center pr-4 cursor-pointer" onclick="togglePassword('password')">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12l4.5 4.5m0 0L15 21m4.5-4.5h7M5.5 21L10 16.5M4.5 16.5H2m0 0L5.5 12" />
                            </svg>
                        </span>
                    </div>
                </div>

                <button type="submit" class="w-full bg-teal-600 text-white text-lg py-3 rounded-lg hover:bg-teal-700 transition duration-300">Login</button>

                <div class="flex justify-between items-center mt-4">
                    <a href="forgot_password.php" class="text-teal-600 hover:underline">Forgot Password?</a>
                </div>

            </form>
        </div>
    </div>

    <script>
    
        function togglePassword(fieldId) {
            var field = document.getElementById(fieldId);
            if (field.type === "password") {
                field.type = "text";
            } else {
                field.type = "password";
            }
        }

        
        const checkRole = () => {
            var grNumber = document.getElementById('gr_number').value;
            var form = document.getElementById('loginForm');
            if (grNumber.length === 4) {
                form.action = 'faculty_login_api.php';
            } else if (grNumber.length === 11) {
                form.action = 'student_login_api.php';
            } else {
                form.action = '#';
            }
        }

        
        // document.getElementById('loginForm').addEventListener('submit', function (e) {
        //     var grNumber = document.getElementById('gr_number').value;
        //     if (grNumber.length !== 4 && grNumber.length !== 11) {
        //         e.preventDefault();
        //         alert('Please enter a valid 4-digit Faculty ID or 11-digit Student ID.');
        //     }
        // });
    </script>

</body>
</html>
