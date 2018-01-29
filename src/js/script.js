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

    var originalPrice = $('#priceShip').text();
    originalPrice = parseInt(originalPrice);
    console.log("gauta kaina: ", originalPrice);
    $('#pristatymoBudas').change(function() {
        let pasirinkta = $('#pristatymoBudas').val();
        console.log("gaunam: ", pasirinkta);
        
        
        let shipPrice2 = 5;
        let shipPrice3 = 1;
        if (pasirinkta == "option2") {
            let price = originalPrice + shipPrice2;
            $('#priceShip').html(price);
        } else if (pasirinkta == "option3") {
            let price = originalPrice + shipPrice3;
            $('#priceShip').html(price);
        }
        
    })
    
    

}); //document.reay finish