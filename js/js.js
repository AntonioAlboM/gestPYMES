$(document).ready(function () {

    $(function () {
        $('.all-elements-tooltip').tooltip()
    })

    $('a').click(function() {
        //store the id of the collapsible element
        localStorage.setItem('collapseItem', $(this).attr('href'));
    })

    var collapseItem = localStorage.getItem('collapseItem'); 
    if (collapseItem) {

        $(collapseItem).collapse('show')
    }


    
    $('#summernote').summernote({
         lang: 'es-ES',
        placeholder: 'Escriba el texto del comunicado',
        tabsize: 2,
        height: 300
      });

    })


