<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>gestPYMES</title>
        <?php require 'link.php'; 
        session_start(); 
        ?>

    </head>

    <body>
        <header class="navbar">
            <nav class="navbar navbar-expand-xl navbar-dark bg-dark fixed-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                        <form action="<?php echo $helper->url('Empresa','index'); ?>" method="POST">
                            <button type="submit" class="nav-link btn navbar-brand btn-link Nosotros" >
                                <h2 class="logo">gestPYMES</h2>
                            </button></form>

                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <form action="<?php echo $helper->url('Empresa','index'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <span class="oi oi-home"></span>&nbsp; Inicio
                                    </button></form>
                            </li>
                            <li class="nav-item">
                                <!--                                <a class="nav-link" href="#"><span class="oi oi-globe"></span>&nbsp;Nosotros</a>-->
                                <form action="<?php echo $helper->url('Empresa','nosotros'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link Nosotros" >
                                        <span class="oi oi-globe"></span>&nbsp; Nosotros
                                    </button></form>
                            </li>
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="#" id="servicios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-menu"></span>&nbsp;Servicios</a>
                                <div class="dropdown-menu text-light bg-dark" aria-labelledby="servicios">
                                    <!--
<a class="dropdown-item text-muted" href="#"><i class="fas fa-user-tie"></i>&nbsp;Empresa</a>

-->

                                    <form action="<?php echo $helper->url('Empresa','empresa'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empresa" >
                                            <i class="fas fa-building"></i>&nbsp;Empresa
                                        </button></form>
                                    <form action="<?php echo $helper->url('Empresa','empleado'); ?>" method="POST">
                                        <button type="submit" class="nav-link btn btn-link empleado" >
                                            <i class="fas fa-user-tie"></i>&nbsp;Empleado
                                        </button></form>




                                </div>
                            </li>
                            <li class="nav-item">

                                <form action="<?php echo $helper->url('Empresa','contacto'); ?>" method="POST">
                                    <button type="submit" class="nav-link btn btn-link" >
                                        <span class="oi oi-location"></span> &nbsp;Contacto
                                    </button></form>
                            </li>
                            <li class="nav-item" >
                                <a class="nav-link"  href="#" data-toggle="modal" data-target="#loginModal"><span class="oi oi-account-login"></span>&nbsp;Acceso</a>
                            </li> 
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" text-center text-primary id="exampleModalLabel"><span class="oi oi-account-login"></span>&nbsp;Iniciar sesión</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!--   <form action="logica/login.php" method="post" role="form" class="login" data-form="login">-->
                            <form action="<?php echo $helper->url('Empresa','loguearCuenta'); ?>" id="log" method="POST">

                                <div class="form-group">
                                    <label><span class="oi oi-person"></span>&nbsp;Correo Electrónico</label>
                                    <input type="text" class="form-control" name="nombre-login" placeholder="Escribe tu usuario" required=""/>
                                </div>
                                <div class="form-group">
                                    <label><span class="oi oi-lock-locked"></span>&nbsp;Contraseña</label>
                                    <input type="password" class="form-control" name="clave-login" placeholder="Escribe tu contraseña" required=""/>
                                </div>

                                <p>¿Cómo iniciarás sesión?</p>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name='empresa' value="Empleado" checked>
                                        Empleado
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name='empresa' value="Empresa">
                                        Empresa
                                    </label>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">Iniciar sesión</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                                </div>
                                <div class="RespuestaLogin" style="width: 100%; text-align: center; margin: 0;"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>

