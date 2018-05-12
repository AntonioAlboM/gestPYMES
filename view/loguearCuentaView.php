<?php 
include '/../css/inc/navbar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LOGUEARSE</title>
        <meta charset="utf-8">
    </head>
    <body>

        <fieldset>
            <legend><h3>Loguearse</h3></legend>

            <form action="<?php echo $helper->url('Empresa','loguearCuenta'); ?>" method="POST">
                <label>Usuario</label> <input type="text" name="nombre-login"><br>
                <label>Pass</label> <input type="password" name="clave-login"><br>

                <input type="submit" name="loguearCuenta" value="Iniciar sesion">
            </form>
            <form action="<?php echo $helper->url('Empresa','controlClick'); ?>" method="POST">
                <input type="submit" name="volverIndex" value="Atras">
            </form> 

        </fieldset>
<?php include 'css/inc/footer.php';?>
    </body>
</html>