
$(document).ready(function() {

    $.getJSON("hamtaData.php", function(data) {
        console.log("JSON klar");
        console.log(data);
        $.each(data, function(index, value) {
            console.log(index + ": " + value);
            console.log(value.namn);
        });
    });

});