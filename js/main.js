// ########## AUTO LOAD STAGE 1 ##########
function auto_load() {
    $.ajax({
        url: "stage-1.php",
        cache: false,
        success: function (data) {
            searchArtist();
            $(".stage-1-ajax").html(data);
        }
    });
}

$(document).ready(function () {

    auto_load(); //Call auto_load() function when DOM is Ready
    console.log('Ajax Loop 1 Runned')

});

//Refresh auto_load() function after 5000 milliseconds
setInterval(auto_load, 5000);
// ########## END OF STAGE 1 ##########





// ########## AUTO LOAD STAGE 2 ##########
function auto_load2() {
    $.ajax({
        url: "stage-2.php",
        cache: false,
        success: function (data) {
            searchArtist();
            $(".stage-2-ajax").html(data);
        }
    });
}

$(document).ready(function () {

    auto_load2(); //Call auto_load() function when DOM is Ready

});

//Refresh auto_load() function after 5000 milliseconds
setInterval(auto_load2, 5000);
// ########## END OF STAGE 2 ##########