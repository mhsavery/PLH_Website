$(document).ready(function () {
    $("#bodyweight").focus();
});

$(".submits").keyup(function (enter) {
    if (enter.keyCode == 13) { //enter
        wilks();
    }
});

$("#findValue").click(function (enter) {
    enter.preventDefault();
    wilks();
});

function wilks(){
        //Get value of gender input
        var gender = $('input[name="gender"]:checked').val();
        var gen = gender;

        //Get value of unit of measurement input
        var unit = $('input[name="unit"]:checked').val();
        var un = unit;

        //Get bodyweight value
        var bodyweight = $('#bodyweight').val();
        var bWeight = bodyweight;

        //Get amount of weight lifted
        var liftedweight = $('#liftedweight').val();
        var lWeight = liftedweight;

        //Declare wilks value variable
        var wilks = 0;


        /*
        Need to build 2 arrays for male / female using chart found online with coefficients.
        Kilogram values will be tricky to match up.
        Weights between 40 - 206 pounds
        Each weight matches with a specific coefficient
        Wilks = total lifted * the coefficient / 2.20462
        */


        //Test run. Coefficient is for 150 pound male.
        var cf = .7661;
        
        wilks = ((lWeight * .7661) / 2.20462).toFixed(2);

        $("#result").html(wilks);

}
