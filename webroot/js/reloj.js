window.addEventListener("load", inicio);

function inicio() {
    var fotos = [
        "webroot/images/cero.png",
        "webroot/images/uno.png",
        "webroot/images/dos.png",
        "webroot/images/tres.png",
        "webroot/images/cuatro.png",
        "webroot/images/cinco.png",
        "webroot/images/seis.png",
        "webroot/images/siete.png",
        "webroot/images/ocho.png",
        "webroot/images/nueve.png"];

    var divReloj = document.getElementById("divReloj");

    var hora1 = document.createElement("img");
    divReloj.appendChild(hora1);
    var hora2 = document.createElement("img");
    divReloj.appendChild(hora2);
    var span1 = document.createElement("img");
    divReloj.appendChild(span1);
    var min1 = document.createElement("img");
    divReloj.appendChild(min1);
    var min2 = document.createElement("img");
    divReloj.appendChild(min2);
    var span2 = document.createElement("img");
    divReloj.appendChild(span2);
    var sec1 = document.createElement("img");
    divReloj.appendChild(sec1);
    var sec2 = document.createElement("img");
    divReloj.appendChild(sec2);

    setInterval(mostrarReloj, 1000);
    function mostrarReloj() {
        var horacompleta = new Date();
        hora1.setAttribute("src", fotos[parseInt(horacompleta.getHours() / 10)]);
        hora2.setAttribute("src", fotos[parseInt(horacompleta.getHours() % 10)]);
        span1.setAttribute("src", "webroot/images/colon.png");
        min1.setAttribute("src", fotos[parseInt(horacompleta.getMinutes() / 10)]);
        min2.setAttribute("src", fotos[parseInt(horacompleta.getMinutes() % 10)]);
        span2.setAttribute("src", "webroot/images/colon.png");
        sec1.setAttribute("src", fotos[parseInt(horacompleta.getSeconds() / 10)]);
        sec2.setAttribute("src", fotos[parseInt(horacompleta.getSeconds() % 10)]);
    }
}