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

    //getting price from the page
    var originalPrice = $('#priceShip').text();
    originalPrice = parseInt(originalPrice);
    console.log("gauta kaina: ", originalPrice);
    
    var classPrice = $('#priceShip').text();
    classPrice = parseInt(classPrice);
    console.log("klases kaina: ", classPrice);
    
    // listening to a change in a delivery selection box
    $('#pristatymoBudas').change(function() {
        let pasirinkta = $('#pristatymoBudas').val();
        console.log("gaunam: ", pasirinkta);
        
        
        let shipPrice2 = 5;
        let shipPrice3 = 1;
        if (pasirinkta == "kurjeris") {
            let price = originalPrice + shipPrice2;
            $('#priceShip').html(price);
            $('.priceShip').html(price);
        } else if (pasirinkta == "omniva") {
            let price = originalPrice + shipPrice3;
            $('#priceShip').html(price);
            $('.priceShip').html(price);
        } else if (pasirinkta == "nemokamas_siuntimas") {
            $('#priceShip').html(originalPrice);
            $('.priceShip').html(originalPrice);
        }
        
    })

    
    
    

}); //document.reay finish