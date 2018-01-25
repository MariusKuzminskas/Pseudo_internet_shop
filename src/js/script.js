$(document).ready(function() {
    //inicial items generated on page load
    $('#items_row').load('./components/generate_items_sort.php');
    //sorting from selection meniu
    var sortType;
    
    $('#isrikiavimas').on("change", function() {
        var sortType = $(this).val();
        $('#items_row').load('./components/generate_items_sort.php', {
            sortType: sortType
        });
    })

    
    
    
    

}); //document.reay finish