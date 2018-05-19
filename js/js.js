$(document).ready(function () {

    $(function () {
        $('.all-elements-tooltip').tooltip()
    })

    $('a ul button').click(function() {
        //store the id of the collapsible element
        localStorage.setItem('collapseItem', $(this).attr('href'));
    })

    var collapseItem = localStorage.getItem('collapseItem'); 
    if (collapseItem) {

        $(collapseItem).collapse('show')
    }

// $(function () {




        $('a ul button').click(function() {
            //store the id of the collapsible element
            localStorage.setItem('collapseItem', $(this).attr('href'));
        })
      
        var collapseItem = localStorage.getItem('collapseItem'); 
        if (collapseItem) {
           $(collapseItem).collapse('show')
        }
    })



