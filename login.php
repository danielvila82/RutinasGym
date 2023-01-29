<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="loginstyle.css">
    <title>RutinasGym - Ingreso</title>
    <style>
        body{
            background-color: #2a2b30;
            background-image: url("img/back3.jpg");
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="cont">
        <div class="demo">
            <div class="login">
            <div class="login__check"></div>
            <div class="login__form">
                <div class="login__row">
                    <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                        <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                    </svg>
                    <form action="logica\loguear.php" method="POST">
                        <input type="text" class="dni" name="dni" placeholder="DNI"/>
                        <br>
                        <input type="submit" class="login__submit">Ingresar</input>  
                    </form> 
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>