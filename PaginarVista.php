    <?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}else if(isset($_SESSION['nombreEmpleado'])){
include 'css/inc/navbarEmpleado.php';
    include'css/inc/sidebarEmpleado.php';

}
?>


<?php

        require_once 'Paginar.php';
     
        $conexion = new mysqli( '127.0.0.1', 'root', '', 'Solvetic');
        $conexion->query("SET NAMES 'utf8'");
     
        $pagina       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
        $enlaces      = ( isset( $_GET['enlaces'] ) ) ? $_GET['enlaces'] : 5;
        $consulta      = "SELECT * FROM localizar";
        
        $paginar  = new Paginar($conexion, $consulta);
        $resultados    = $paginar->getDatos($pagina);
    ?>
        <head>
            <title>Paginación en PHP</title>
     
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
            crossorigin="anonymous">
     
            <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        </head>
        <body>
            <div class="container">
                    <div class="col-md-12 ">
                        <h1 style="text-align:center">Test Páginacion en PHP</h1>
                        <ul class="pager">
                            <?php echo $paginar->crearLinks( $enlaces); ?>
                        </ul>
                        <table class="table table-hover table-condensed table-bordered ">
                                <thead>
                                    <tr style="background:#337ab7; color:white;">
                                        <th width="30%">País</th>
                                        <th width="30%">Capital</th>
                                        <th width="30%">Continente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for( $i = 0; $i < count($resultados->datos); $i++ ): ?>
                                   <tr>
                                                <td><?php echo $resultados->datos[$i]['Pais']; ?></td>
                                                <td><?php echo $resultados->datos[$i]['Capital']; ?></td>
                                                <td><?php echo $resultados->datos[$i]['Continente']; ?></td>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                        </table>
                        <ul class="pagination">
                            <?php echo $paginar->crearLinks( $enlaces); ?>
                        </ul>
                  
                    </div>
            </div>
            </body>
    </html>