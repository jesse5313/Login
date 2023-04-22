<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home GC</title>
    <link rel="icon" type="image/ico" href="../img/gc.ico">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" defer />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Glory&display=swap" rel="stylesheet" />
    
    <link rel="stylesheet" href="../css/styleHome.css">
</head>
<body>

    <div class="wrapper">
        <div class="wrap">
             <!-- Header -->
             <header>
                <div class="container">
                    <a href="#" class="brand">
                    <?php require '../partials/welcomeName.php' ?>
                    </a>

                    <ul class="menu" id="menu">
                        <li class="menu-item">
                            <a href="#">
                                <i class=""></i>Home
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="../php/cerrar_sesion.php">
                                <i class=""></i>Cerrar sesión
                            </a>
                        </li>
                    </ul>

                    <div class="burger" id="burger" onclick="toggleMobile()">
                        <i class="fas fa-bars" id="menu-icon"></i>
                    </div>
                    
                </div>
            </header>
            <div class="development">
                <h4>GC Develoaper. Check our
                    <a target="_blank" href="https://gc13.netlify.app">About Page.
                    </a>
                </h4>
            </div>
        </div>
    </div>
<script src="../js/script.js"></script>
</body>
</html>