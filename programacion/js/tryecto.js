class Trayecto {
    constructor(origen, destino, kms, salida, llegada) {
      this.origen = origen;
      this.destino = destino;
      this.kms = kms;
      this.salida = new Date(salida);
      this.llegada = new Date(llegada);
  
      if (this.salida >= this.llegada) {
        throw new Error("La fecha de salida debe ser anterior a la fecha de llegada.");
      }
    }
  
    duracion() {
      return this.llegada - this.salida;
    }
  
    velocidad() {
      const horas = this.duracion() / 3600000; // 1 hora = 3600000 milisegundos
      return this.kms / horas;
    }
  }
  
  class Repostaje {
    constructor(litros, importe, fecha, lugar) {
      this.litros = litros;
      this.importe = importe;
      this.fecha = new Date(fecha);
      this.lugar = lugar;
    }
  
    precioLitro() {
      return this.importe / this.litros;
    }
  }
  
  class Vehiculo {
    constructor(modelo, precio) {
      this.modelo = modelo;
      this.precio = precio;
      this.trayectos = [];
      this.repostajes = [];
    }
  
    litrosConsumidos() {
      return this.repostajes.reduce((total, repostaje) => total + repostaje.litros, 0);
    }
  
    gastoCombustible() {
      return this.repostajes.reduce((total, repostaje) => total + repostaje.importe, 0);
    }
  
    precioMedioLitro() {
      return this.repostajes.length > 0 ? this.gastoCombustible() / this.litrosConsumidos() : 0;
    }
  
    kmsRealizados() {
      return this.trayectos.reduce((total, trayecto) => total + trayecto.kms, 0);
    }
  
    antiguedad() {
      const fechas = [...this.trayectos.map(trayecto => trayecto.salida), ...this.repostajes.map(repostaje => repostaje.fecha)];
      const fechaMasAntigua = new Date(Math.min(...fechas));
      const fechaActual = new Date();
      return (fechaActual - fechaMasAntigua) / (1000 * 60 * 60 * 24); // 1 día = 24 horas * 60 minutos * 60 segundos * 1000 milisegundos
    }
  
    circulando() {
      const trayectosDuracion = this.trayectos.reduce((total, trayecto) => total + trayecto.duracion(), 0);
      return trayectosDuracion;
    }
  
    generarInforme() {
      console.log('\nInforme del vehículo:');
      console.log(`Modelo: ${this.modelo}`);
      console.log(`Distancia media de los trayectos: ${this.kmsRealizados() / this.trayectos.length} Kms`);
      console.log(`Importe medio de los repostajes: ${this.gastoCombustible() / this.repostajes.length} euros`);
      console.log(`Consumo medio de litros de combustible cada 100 Km: ${(this.litrosConsumidos() / this.kmsRealizados()) * 100} litros`);
    }
  }
  
  // Programa principal
  
  const obtenerFecha = (tipo) => {
    const year = parseInt(prompt(`Introduce el año de ${tipo}: `));
    const month = parseInt(prompt(`Introduce el mes de ${tipo} (1-12): `)) - 1;
    const day = parseInt(prompt(`Introduce el día de ${tipo}: `));
    const hour = parseInt(prompt(`Introduce la hora de ${tipo} (0-23): `));
    const minute = parseInt(prompt(`Introduce el minuto de ${tipo} (0-59): `));
    const second = parseInt(prompt(`Introduce el segundo de ${tipo} (0-59): `));
  
    return new Date(year, month, day, hour, minute, second);
  };
  
  const modelo = prompt('Introduce el modelo del vehículo: ');
  const precio = parseFloat(prompt('Introduce el precio del vehículo: '));
  
  const vehiculo = new Vehiculo(modelo, precio);
  
  let masTrayectos = true;
  while (masTrayectos) {
    try {
      const origen = prompt('Introduce la población de origen del trayecto: ');
      const destino = prompt('Introduce la población de destino del trayecto: ');
      const kms = parseFloat(prompt('Introduce los kilómetros del trayecto: '));
      const salida = obtenerFecha('salida');
      const llegada = obtenerFecha('llegada');
  
      vehiculo.trayectos.push(new Trayecto(origen, destino, kms, salida, llegada));
    } catch (error) {
      console.log(`Error: ${error.message}`);
    }
  
    masTrayectos = confirm('¿Deseas introducir más trayectos?');
  }
  
  let masRepostajes = true;
  while (masRepostajes) {
    const litros = parseFloat(prompt('Introduce el número de litros de combustible: '));
    const importe = parseFloat(prompt('Introduce el importe del repostaje: '));
    const fecha = obtenerFecha('repostaje');
    const lugar = prompt('Introduce una descripción del lugar de repostaje: ');
  
    vehiculo.repostajes.push(new Repostaje(litros, importe, fecha, lugar));
  
    masRepostajes = confirm('¿Deseas introducir más repostajes?');
  }
  
  // Informe del vehículo
  vehiculo.generarInforme();
  