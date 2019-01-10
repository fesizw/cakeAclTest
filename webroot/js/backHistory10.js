"use strict";
var i = 11;
function contagemRegressiva() {
    i <= 0 ? window.history.go(-1) : i > 0 && (i--, document.getElementById("numberCountdown").innerHTML = i + " segundos")
}
setInterval("contagemRegressiva()", 1e3);