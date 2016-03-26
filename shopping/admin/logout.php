
<html>

<head>
<title>Secured Page</title>
</head>

<body>

<p>This is secured page with session: <b><?php echo $_SESSION['username']; ?></b>
<br>You can put your restricted information here.</p>
<p><a href="logout.php">Logout</a></p>

</body>

</html>
<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index.php');

?>