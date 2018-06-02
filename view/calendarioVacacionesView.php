<?php 
session_start();
if (isset($_SESSION['gerente'])){
    include 'css/inc/navbarGerente.php';
    include'css/inc/prueba.php';
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script>

    $(document).ready(function() {
       
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events: '../gestPYMES/view/load.php',
            selectable:true,
         
            selectHelper:true,
            select: function(start, end, allDay)
            {
                var title = prompt("Introduzca el empleado que disfrutará de éste dia");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"../gestPYMES/view/insert.php",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Dia libre añadido con éxito");
                        }
                    })
                }
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"../gestPYMES/view/update.php",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function(){
                        calendar.fullCalendar('refetchEvents');
                        alert('Dia libre quitado con éxito');
                    }
                })
            },

            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"../gestPYMES/view/update.php",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Libranza actualizada con éxito");
                    }
                });
            },

            eventClick:function(event)
            {
                if(confirm("¿Seguro que quieres eliminar el dia libre?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"../gestPYMES/view/delete.php",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Libranza eliminada");
                        }
                    })
                }
            },

        });
    });

</script>



<section class="modificarEmpleado">
    <div class="container">
        <div class="row justify-content-center">

        </div>
        <!--            <div class="form-row justify-content-center">-->
        <div class="col mb-12 ">
            <h4  justify-content-center ><i class="fas fa-comments"></i>&nbsp;Calendario empleados</h4>
            <div id="chat">
                <div class="col mb-6 offset-4">
                    <div class=" ">
                        <div id="calendar"></div>
                    </div>

                </div></div>


        </div> 


    </div>













</section>




</div>





<?php include 'css/inc/footer.php';?>


