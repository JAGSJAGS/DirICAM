<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directorio-ICAM Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <main id="main">
        <form action="" id="form" method="POST">
            <?php
                if(isset($errorLogin)){
                    echo $errorLogin;
                }
            ?>
            <div class="logo" id="logo"><img src="../recursos/icam_logoS.png" alt=""></div>           
            <label for="username">
                <input type="username" name="username">
            </label>
            <label for="password">
                <input type="password" name="password">
            </label>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </main>
    <footer>
        
    </footer>
</body>
</html>