<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Archivos css-->
        <link rel="stylesheet" href="data.css">
        <title>Registro</title>
    </head>
    <body>
        <div>
            <form action="" method="post">
                <a href="nuevo_tramite2.php">Nuevo Tramite</a>
            </form>
        </div>
        <div>
            <table border="1">
                <tr>
                    <td>ID tramite</td>
                    <td>Tramite</td>
                    <td>Opciones</td>
                </tr>
                <?php
                    ##Creamos las variables onde guardaremos el host, el name, y el nombre de la bd con su contraseña
                    $servername='localhost';
                    $username='id19568871_bienestra_user';
                    $password='@Bien-database22';
                    $dbname = "id19568871_bienestar";
                    ##Creamos una variable para conectar con el servidor de mysql
                    $conn=mysqli_connect($servername,$username,$password,"$dbname");
                    $sql = "SELECT idtramite2, tramite2_nom FROM tramites2 order by idtramite2 desc";
                    $rta = mysqli_query($conn, $sql);
                    while($mostrar = mysqli_fetch_row($rta)){
                        ?>
                        <tr>
                            <td><?php echo $mostrar['0'] ?></td>
                            <td><?php echo $mostrar['1'] ?></td>
                            <td>
                                <a href="spt_eliminar2.php? idtramite2=<?php echo $mostrar['0'] ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                    }                    
                ?>
            </table>
        </div>
        <a href="https://bien-filtro.000webhostapp.com/admi.php">Pantalla Principal</a>
    </body>
</html>