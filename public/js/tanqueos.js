const cantidadGalon = document.getElementById('cantidadGalon');
const muestraCantidadGalon = document.getElementById('muestraCantidadGalon');
const valorGalon = document.getElementById('valorGalon');
const valorTotal = document.getElementById('valorTotal');

cantidadGalon.addEventListener('blur', calculaValorTanqueada);
valorTotal.addEventListener('blur', calculaCantidadGalones);
valorGalon.addEventListener('blur', calculaCantidadGalones);

function calculaValorTanqueada() {
    let res = cantidadGalon.value * valorGalon.value;
    valorTotal.value = Number(res).toFixed(0);
}

function calculaCantidadGalones() {
    let res = valorTotal.value / valorGalon.value;
    cantidadGalon.value = Number(res).toFixed(1);
    muestraCantidadGalon.value = Number(res).toFixed(1);
}