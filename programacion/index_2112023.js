// Objeto para almacenar la información de compras por código postal
let comprasPorCodigoPostal = {};

// Función para validar que el importe sea un número positivo
function validarImporte(importe) {
  return !isNaN(importe) && parseFloat(importe) > 0;
}

// Función para solicitar datos al usuario y actualizar el objeto de compras
function procesarCompra() {
  let codigoPostal = prompt("Ingrese el código postal del comprador: ");
  codigoPostal = codigoPostal.toUpperCase();

  if (!comprasPorCodigoPostal[codigoPostal]) {
    comprasPorCodigoPostal[codigoPostal] = 0;
  }

  let importe = prompt("Ingrese el importe de la compra: ");

  // Validar que el importe sea un número positivo
  while (!validarImporte(importe)) {
    importe = prompt("Ingrese un importe válido (número positivo): ");
  }

  // Actualizar el importe para el código postal dado
  comprasPorCodigoPostal[codigoPostal] += parseFloat(importe);

  // Preguntar al usuario si desea introducir más datos
  let continuar = confirm("¿Desea introducir más datos?");
  if (continuar) {
    procesarCompra();
  } else {
    mostrarResultados();
  }
}

// Función para mostrar los resultados ordenados por importe total de compras
function mostrarResultados() {
  // Convertir el objeto a un array de pares [código postal, importe]
  let resultadosArray = Object.entries(comprasPorCodigoPostal);

  // Ordenar el array por importe total en orden descendente
  resultadosArray.sort((a, b) => b[1] - a[1]);

  // Mostrar los resultados
  console.log("Códigos postales ordenados por importe total de compras:");
  for (let resultado of resultadosArray) {
    console.log(`Código Postal: ${resultado[0]}, Importe Total: ${resultado[1]}`);
  }
}

// Iniciar el proceso de registro de compras
procesarCompra();
