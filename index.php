<?php
include("Auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?></p>
        <p>This is Secure Area.</p>
        <p><a href="dashboard.php">Dashboard</a></p>
        <a href="logout.php">LogOut</a>
    </div>   
</body>
</html>