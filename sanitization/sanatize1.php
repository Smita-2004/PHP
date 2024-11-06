<!-- we can sanatize a string  -->
<!-- validate an integer ,IP -->
<!-- sanatize and validate an email,URL -->

<?php
// Function to validate URL format
function validateURL($url) {
    // Remove all illegal characters from the URL
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate the URL
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        return "The URL is valid.";
    } else {
        return "The URL is not valid.";
    }
}

// Taking input from the user (through form)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    $validationMessage = validateURL($url);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Validator</title>
</head>
<body>

<h2>URL Validator</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="url">Enter a URL:</label>
    <input type="text" id="url" name="url" required>
    <input type="submit" value="Validate">
</form>

<?php
// Display validation message after form submission
if (isset($validationMessage)) {
    echo "<p>$validationMessage</p>";
}
?>

</body>
</html>