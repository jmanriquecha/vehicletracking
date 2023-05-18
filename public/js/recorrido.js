document.addEventListener("DOMContentLoaded", function (event) {
    //código a ejecutar cuando existe la certeza de que el DOM está listo para recibir acciones

    //varibles

    let kFinal = document.getElementById("kFinal");
    let kInicial = document.getElementById("kInicial");
    let cantidad = document.getElementById("cantidad");
    let kFinalLabel = document.getElementById("kFinal-label");
    let cantidadLabel = document.getElementById("cantidad-label");
    let btnChange = document.getElementById("btnChange");
    let muestraKilometros = document.getElementById("muestraKilometros");
    let btnFinalizar = document.getElementById("btnFinalizar");

    //addEventListener
    if (kFinal !== null) {
        kFinal.addEventListener("blur", calculaCantidadKilometros);
    }

    if (cantidad !== null) {
        cantidad.addEventListener("blur", calculaKilometrosFinales);
        cantidad.addEventListener("blur", calculaCantidadKilometros);
        cantidad.classList.add("inactive");
        cantidadLabel.classList.add("inactive");
    }

    if (btnChange !== null) {
        btnChange.addEventListener("click", toggleBnt);
    }

    if (btnFinalizar !== null) {
        btnFinalizar.addEventListener("click", finalizaRecorrido);
    }

    // Styles

    if (kFinal !== null) {
        kInicial.style.display = "none";
    }

    // Functions

    function finalizaRecorrido() {
        let json = this.value;
        data = JSON.parse(json);
        document.getElementById('id').value = data.id;
    }

    function calculaCantidadKilometros() {
        if (calculaCantidadK() <= 0) {
            cantidad.value = 0;
            muestraKilometros.innerHTML = `<strong>Distancia:</strong> 0 km`;
        } else {
            cantidad.value = calculaCantidadK();
            muestraKilometros.innerHTML = `<strong>Distancia:</strong> ${calculaCantidadK()} km`;
        }

    }

    function calculaKilometrosFinales() {
        kFinal.value = calculaKFinal();
    }

    function calculaKFinal() {
        let res = Number(kInicial.value) + Number(cantidad.value);
        return Number(res).toFixed(1);
    }

    function calculaCantidadK() {
        let res = Number(kFinal.value) - Number(kInicial.value);
        return Number(res).toFixed(1);

    }

    function toggleBnt() {
        cantidad.classList.toggle("inactive");
        cantidadLabel.classList.toggle("inactive");
        kFinal.classList.toggle("inactive");
        kFinalLabel.classList.toggle("inactive");
        if (btnChange.innerText == "Cantidad") {
            btnChange.innerText = "Kilómetros";
        } else {
            btnChange.innerText = "Cantidad";
        }

    }
});