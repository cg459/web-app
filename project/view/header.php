<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="forHeader.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>
<form action="../model/SOfunction.php">
<header>
    <div class="nav-bar" id="nav-bar">
        <div class="title">
            <h1>TechDaily</h1>
        </div>
        <div class="nav1">
            <nav>
                <a href="#" id="active">Welcome <?php echo $_SESSION['name'];?>!</a>
                <a href="#">Task</a>
                <a href="#">Completed tasks</a>
                <a class="signout" name="signOut" href="../view/SOfunction.php">Sign out</a>
            </nav>
        </div>
    </div>
</header>
</form>

</body>
</html>
