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

<link rel="stylesheet" href="css/fullcalendar/fullcalendar.css" />

<script src="css/fullCalendar/lib/jquery.min.js"></script>
<script src="css/fullCalendar/lib/jquery-ui.min.js"></script>
<script src="css/fullCalendar/lib/moment.min.js"></script>
<script src="css/fullcalendar/fullcalendar.min.js"></script>
<script src="css/fullcalendar/locale/es.js"></script>
<script>

    $(document).ready(function() {
       
        var calendar = $('#calendar').fullCalendar({
            themeSystem: 'bootstrap4',
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
                var title = prompt("Introduzca el empleado que disfrutará de este dia");
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
                if(confirm("¿Seguro que quieres eliminar el dia libre a " +event.title+"?"))
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
            <h4  class=" text-center title calendar"><i class="fas fa-calendar-alt"></i>&nbsp;Calendario empleados</h4>
            <div id="chat">
                
                    <div class=" ">
                        <div id="calendar"></div>
                    </div>

                </div></div>


        </div> 


    













</section>




</div>





<?php include 'css/inc/footer.php';?>


