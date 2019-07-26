<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="./css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-custom navbar-expand-md">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Page1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Page5</a>
                    </li>
                </ul>
            </div>
            <div class="mx-auto order-0">
                <a class="navbar-brand mx-auto" href="#">DENUMIRE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
						<a class = "nav-link" href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                    </li>
                    <li class="nav-item">
						<a class = "nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        <!--<a class="nav-link" href="#">Link</a>-->
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>





<!--
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link href="./css/main.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
	<nav class="navtop">
		<div>
			<h1>TEXT</h1>
			<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
			<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</nav>
	<div class="content">
		<h2>Home Page</h2>
		<p>Welcome back, <?=$_SESSION['name']?>!</p>
	</div>
</body>
</html>
-->