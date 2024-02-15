class Compra {
    constructor(codigoPostal, importe) {
      this.codigoPostal = codigoPostal;
      this.importe = importe;
    }
  }
  
  const compras = [];
  
  // Entrada de datos
  let masCompras = true;
  while (masCompras) {
    const codigoPostal = prompt('Introduce el código postal del comprador: ');
    const importe = parseFloat(prompt('Introduce el importe de la compra: '));
  
    compras.push(new Compra(codigoPostal, importe));
  
    masCompras = confirm('¿Deseas introducir más datos de compras?');
  }
  
  // Procesamiento de datos
  const totalComprasPorCodigoPostal = {};
  
  compras.forEach(compra => {
    if (totalComprasPorCodigoPostal[compra.codigoPostal]) {
      totalComprasPorCodigoPostal[compra.codigoPostal] += compra.importe;
    } else {
      totalComprasPorCodigoPostal[compra.codigoPostal] = compra.importe;
    }
  });
  
  // Ordenar códigos postales por importe total descendentemente
  const codigosPostalesOrdenados = Object.keys(totalComprasPorCodigoPostal).sort((a, b) => totalComprasPorCodigoPostal[b] - totalComprasPorCodigoPostal[a]);
  
  // Mostrar resultados
  console.log('\nListado de códigos postales ordenados por importe total de compras:');
  codigosPostalesOrdenados.forEach(codigoPostal => {
    console.log(`Código Postal: ${codigoPostal}, Importe Total: ${totalComprasPorCodigoPostal[codigoPostal]}`);
  });
  