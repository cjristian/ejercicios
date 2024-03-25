const propinas = document.getElementById("propinas");
const btnCalcular = document.getElementById("calcular");
const btnPropinas = document.getElementById("botonPropinas");

propinas.addEventListener("input", () => { // Escucha cambios en el input
    if (propinas.value === "") {
        btnCalcular.setAttribute("disabled", true);
    } else {
        btnCalcular.removeAttribute("disabled");
        btnPropinas.removeAttribute("disabled");
    }
});
btnPropinas.addEventListener("mouseenter", () => {
    
})
