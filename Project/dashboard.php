<?php 

include 'Config.php';
error_reporting(0);

session_start();

$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="LogIn.css">
    <link href="http://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Log In</title>
</head>

<body>
    <p>hello</<p>

    </p><?php echo $_SESSION['email']; ?>
    <a href="logout.php">Logout</a>

</body>

</html>