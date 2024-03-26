function calcularAreaCirculo(radio) {
    const area = Math.PI * Math.pow(radio, 2);
    return area;
  }
  
  function calcularPerimetroCuadrado(lado) {
    const perimetro = 4 * lado;
    return perimetro;
  }
  
  function calcularHipotenusaTriangulo(catetoA, catetoB) {
    const hipotenusa = Math.sqrt(Math.pow(catetoA, 2) + Math.pow(catetoB, 2));
    return hipotenusa;
  }
  
  const radioCirculo = 5;
  const areaCirculo = calcularAreaCirculo(radioCirculo);
  console.log(`El área del círculo con radio ${radioCirculo} es: ${areaCirculo}`);
  
  const ladoCuadrado = 3;
  const perimetroCuadrado = calcularPerimetroCuadrado(ladoCuadrado);
  console.log(`El perímetro del cuadrado con lado ${ladoCuadrado} es: ${perimetroCuadrado}`);
  
  const catetoA = 4;
  const catetoB = 3;
  const hipotenusaTriangulo = calcularHipotenusaTriangulo(catetoA, catetoB);
  console.log(`La hipotenusa del triángulo rectángulo con catetos ${catetoA} y ${catetoB} es: ${hipotenusaTriangulo}`);
  