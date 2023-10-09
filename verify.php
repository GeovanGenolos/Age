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
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $userName = $_POST["name"];
            $userAge = $_POST["age"];

            
            $minimumAge = 18;

            
            if ($userAge >= $minimumAge) {
                
                echo "<h2>Welcome, $userName!</h2>";
                echo "<p>You are $userAge years old and eligible to access this website.</p>";
            } else {
                
                echo "<h2>Sorry, $userName.</h2>";
                echo "<p>You are $userAge years old, and you are not old enough to access this website.</p>";
            }
        }
        ?>
        <br>
        <a class="back-button" href="index.php">Back</a> 
    </div>
</body>
</html>
