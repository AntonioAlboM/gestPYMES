$(document).ready(function () {
 $('#summernote').summernote({
         lang: 'es-ES',
        placeholder: 'Escriba el texto',
        tabsize: 2,
        height: 300,
              });
    $('#summernote').summernote('justifyLeft');

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

    
   
    })


