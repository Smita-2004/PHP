<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script>
        // Function to set a cookie
        function setCookie(name, value, days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            const expires = "expires=" + date.toUTCString();
            document.cookie = name + "=" + value + ";" + expires + ";path=/";
        }

        // Function to get a cookie by name
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Function to check if the username is stored in the cookie and auto-fill the input
        function fillUsername() {
            const savedUsername = getCookie("username");
            if (savedUsername) {
                document.getElementById("username").value = savedUsername;
            }
        }

        // Function to store the entered username in the cookie when the form is submitted
        function saveUsername() {
            const username = document.getElementById("username").value;
            setCookie("username", username, 30); // Save for 30 days
        }

        // On page load, check for saved username in cookies
        window.onload = function() {
            fillUsername();
        };
    </script>
</head>
<body>     
    <h2>Login Form</h2>
    <form onsubmit="saveUsername()">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
