<!DOCTYPE html>
<html>

<head>
    <title>Mortid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../restor/style.css">
    <link rel="shortcut icon" href="/restor/img/logo.svg" type="image/x-icon">
    <!-- <link rel="stylesheet" type="text/javascript" href="node_modules/bootstrap/dist/js/bootstrap.js"> -->
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt=""> Mortid
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="staff.php">Сотрудники</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Бронирование
					    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="reservation.php">Забронировать столик</a>
                            <a class="dropdown-item" href="cancelreservation.php">Отменить бронирование</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">Меню</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>