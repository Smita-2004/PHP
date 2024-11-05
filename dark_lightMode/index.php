<?php
// Check if a theme cookie is set, default to light mode
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';

// If the form is submitted, update the theme and set a cookie
if (isset($_POST['toggle_theme'])) {
    $theme = $theme === 'light' ? 'dark' : 'light';
    setcookie('theme', $theme, time() + (86400 * 30), "/"); // Save theme preference for 30 days
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme Toggle</title>
    <style>
        /* Default light theme styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #ffffff;
            color: #000000;
        }

        /* Dark theme styles */
        body.dark-mode {
            background-color: #2c2c2c;
            color: #ffffff;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body class="<?php echo $theme === 'dark' ? 'dark-mode' : ''; ?>">
    <h1>Welcome to the Theme Toggle Page</h1>
    <p>Click the button to switch between Dark and Light mode.</p>

    <form method="POST">
        <button type="submit" name="toggle_theme">
            Switch to <?php echo $theme === 'light' ? 'Dark' : 'Light'; ?> Mode
        </button>
    </form>
</body>
</html>
