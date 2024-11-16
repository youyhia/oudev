<?php
session_start();
if (!isset($_SESSION['prenom'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['prenom']) . " " . htmlspecialchars($_SESSION['nom']); ?>!</h2>
        <a href="logout.php" class="button">Log Out</a>
    </div>
    <?php include('footer.php'); ?>

</body>
</html>
