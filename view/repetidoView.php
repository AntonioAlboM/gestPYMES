


<?php 
include '/../css/inc/navbar.php';
?>
<section id="intro">
    <div class="container">

        <!-- Heading Row -->

        <div class="row titulo ">
            <div class="col-md-4 offset-4">
                <h2>La empresa que intenta registrar ya existe</h2>

                <div class="row justify-content-md-center">

                    <i class="red notfound fas fa-times-circle fa-10x"></i>
                </div>





                <div class= "row justify-content-md-center">


                    <form action="<?php echo $helper->url('Usuarios','controlClick'); ?>" method="POST">
                        <input type="submit" class="btn btn-primary" name="volverLogin" value="Volver">

                    </form>
                </div></div>

        </div></div></section>


    <?php include 'css/inc/footer.php';?> 