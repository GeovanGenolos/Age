<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Verification</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Age Verification</h2>
        <form method="POST" action="verify.php">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>
            <label for="age">Enter your age:</label>
            <input type="number" id="age" name="age" required>
            <br><br>
            <input type="submit" value="Verify">
        </form>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $userName = $_POST["name"];
    $userAge = $_POST["age"];

    
    $minimumAge = 18;

    
    if ($userAge >= $minimumAge) {
        
        echo "<h2>Welcome to the Website, $userName!</h2>";
    } else {
        
        echo "<h2>Sorry, $userName, you are not old enough to access this website.</h2>";
    }
}
?>
