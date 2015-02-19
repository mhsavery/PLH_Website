$(document).ready(function () {
    $("#bodyweight").focus();

    $(".submits").keyup(function (enter) {
        if (enter.keyCode == 13) {
            wilks();
        }
    });

    $("#findValue").click(function (enter) {
        enter.preventDefault();
        wilks();
    });

});

function wilks(){
        //Get value of gender input
        var gen = $('input[name="gender"]:checked').val();

        //Get value of unit of measurement input
        var unit = $('input[name="unit"]:checked').val();

        //Get bodyweight value
        var bWeight = $('#bodyweight').val();

        //Get amount of weight lifted
        var lWeight = $('#liftedweight').val();

        //Declare wilks value variable
        var wilks = 0;

        
        if (gen == 1) {

            //Coefficients for men
            a=-216.0475144;
            b=16.2606339;
            c=-0.002388645;
            d=-0.00113732;
            e=7.01863E-06;
            f=-1.291E-08;

        } else if(gen == 2){  

            //Coefficients for women
            a=594.31747775582;
            b=-27.23842536447;
            c=0.82112226871;
            d=-0.00930733913;
            e=0.00004731582;
            f=-0.00000009054;

        }

        //Convert pounds into kilograms
        if(unit == 1) {
            (bWeight / 2.20462262).toFixed(2);
            (lWeight / 2.20462262).toFixed(2);
        }


        //Calculate wilks value
        wilks = lWeight*(500/(a+(b*bWeight)+
                (c*Math.pow(bWeight,2))+
                (d*Math.pow(bWeight,3))+
                (e*Math.pow(bWeight,4))+
                (f*Math.pow(bWeight,5)))); 

        //Round Wilks to 4 places
        wilks = wilks.toFixed(4);

        $("#result").html(wilks);

}
