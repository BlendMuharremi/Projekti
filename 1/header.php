<?php include("functions.php"); 
// Initialize variables
$emri = $phone = $email = $mbiemri = null;

// Check if the session variables are set and not null
if (
    isset($_SESSION['useri']['emri']) && 
    isset($_SESSION['useri']['email']) && 
    $_SESSION['useri']['emri'] !== null &&
    $_SESSION['useri']['email'] !== null 
) {
    // Assign values to variables only if they are not null
    $emri = $_SESSION['useri']['emri']; 
    $email = $_SESSION['useri']['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Restaurant</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<link rel="stylesheet" href="style.css">
</head>
<body>

    <header>

        <input type="checkbox" id="toggler">
        <label for="toggler" class="fas fa-bars"id="menu-toggle"></label>
        
        <a href="index.php" class="logo">Restaurant</a>
        <nav class="navbar">
        <a href="index.php#home">home</a>
        <a href="index.php#about">about</a>
        <a href="menu.php">Menu</a>
        <a href="index.php#review">review</a>
        <?php if ($emri==null){ ?>
        <a href="Login.php">Login/Register</a>
        <?php } else{ ?>
            <a href="logout.php">Log out</a>
        <?php } ?>
</nav>



</header>

<script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var navbar = document.querySelector('.navbar');
            navbar.style.display = (navbar.style.display === 'none' || navbar.style.display === '') ? 'block' : 'none';
        });
    </script>