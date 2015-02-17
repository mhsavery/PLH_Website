var menCoeff = {
	a: -216.0475144,
    b: 16.2606339,
    c: -0.002388645,
    d: -0.00113732,
    e: 7.01863E-06,
    f: -1.291E-08
};

var womenCoeff = {
    a: 594.31747775582,
    b: -27.23842536447,
    c: 0.82112226871,
    d: -0.00930733913,
    e: 0.00004731582,
    f: -0.00000009054
};

$("button").click(function() {

	var bWeight = $('#bodyweight').val();
    var lWeight = $('#liftedweight').val();
    var gen = $('#gender').val();

    if(gen == "m"){
         var wilksValue = 500 / (menCoeff.a + menCoeff.b * bodyweight + menCoeff.c * Math.pow(bw, 2) + menCoeff.d * Math.pow(bw, 3) + menCoeff.e
		       				* Math.pow(bw, 4) + menCoeff.f * Math.pow(bw, 5)) * lw;
       document.write(wilksValue);
     }else
     if(gen == "f"){
         var wilksValue = 500 / (womenCoeff.a + womenCoeff.b * bw + womenCoeff.c * Math.pow(bw, 2) + womenCoeff.d * Math.pow(bw, 3) + womenCoeff.e
				         * Math.pow(bw, 4) + womenCoeff.f *Math.pow(bw, 5)) * lw;
     }
});
