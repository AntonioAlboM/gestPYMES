<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gestPYMES</title>
        <?php include 'link.php'; 
//        session_start(); 
        
        $gerente = $_SESSION['nombreEmpleado'];
        ?>

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                        <form action="<?php echo $helper->url('Empresa','logueo'); ?>" method="POST">
                            <button type="submit" class="nav-link btn navbar-brand btn-link Nosotros" >
                                <h2 class="logo">gestPYMES</h2>
                            </button></form>

                        <ul class="navbar-nav ml-auto">
                          
                            <li class="">
                                 <form action="<?php echo $helper->url('Empresa','sancionesArchivadasEmpleado'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empresa" >
                                           <i class="fas fa-shield-alt"></i>&nbsp;Mis Sanciones
                                        </button></form>
                                   
                                    
                            </li>
                            <li class=" ">
                                 <form action="<?php echo $helper->url('Empresa','comunicadosArchivados'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                          <i class="fas fa-envelope"></i>&nbsp;Comunicados
                                        </button></form>
                                    <!--
<a class="dropdown-item text-muted" href="#"><i class="fas fa-user-tie"></i>&nbsp;Empresa</a>

-->

                                   
                            </li>
                            <li class="nav-item">
                                 <form action="<?php echo $helper->url('Empresa','nuevoMensaje'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <i class="fas fa-comment"></i>&nbsp;Chat
                                    </button></form>
                               </li>
                            <li class="nav-item ">
                                 <form action="<?php echo $helper->url('Empresa','vacaciones'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <i class="fas fa-calendar-alt"></i>&nbsp;Vacaciones
                                    </button></form>
                             
                             <li class="nav-item">
                                <!--                                <a class="nav-link" href="#"><span class="oi oi-globe"></span>&nbsp;Nosotros</a>-->
                                <form action="<?php echo $helper->url('Empresa','salir'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <i class="fas fa-sign-out-alt"></i>&nbsp;Salir
                                    </button></form>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            
                
        </header>

