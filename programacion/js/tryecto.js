class Trayecto {
    constructor(origen, destino, kms, salida, llegada) {
        this.origen = origen;
        this.destino = destino;
        this.kms = kms;
        this.salida = salida;
        this.llegada = llegada;
    }

    duracion() {
        return this.llegada - this.salida;
    }

    velocidad() {
        if (this.duracion() > 0) {
            return this.kms / (this.duracion() / 3600000);
        } else {
            return 0;
        }
    }
}

class Repostaje {
    constructor(litros, importe, fecha, lugar) {
        this.litros = litros;
        this.importe = importe;
        this.fecha = fecha;
        this.lugar = lugar;
    }

    precioLitro() {
        if (this.litros > 0) {
            return this.importe / this.litros;
        } else {
            return 0;
        }
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
        return this.trayectos.reduce((total, trayecto) => total + trayecto.kms / 100 * trayecto.velocidad(), 0);
    }

    gastoCombustible() {
        return this.repostajes.reduce((total, repostaje) => total + repostaje.importe, 0);
    }

    precioMedioLitro() {
        const litrosConsumidos = this.litrosConsumidos();
        return litrosConsumidos > 0 ? this.gastoCombustible() / litrosConsumidos : 0;
    }

    kmsRealizados() {
        return this.trayectos.reduce((total, trayecto) => total + trayecto.kms, 0);
    }

    antiguedad() {
        const today = new Date();
        const oldestDate = Math.min(...this.trayectos.map(trayecto => trayecto.salida), ...this.repostajes.map(repostaje => repostaje.fecha));
        const differenceInDays = Math.floor((today - oldestDate) / (1000 * 60 * 60 * 24));
        return differenceInDays;
    }

    circulando() {
        const now = new Date();
        const startTime = Math.min(...this.trayectos.map(trayecto => trayecto.salida), ...this.repostajes.map(repostaje => repostaje.fecha));
        return now - startTime;
    }
}

// Función para solicitar datos por pantalla/teclado
function obtenerDatos(promptText) {
    return prompt(promptText);
}

// Función para convertir la entrada de fecha y hora en un objeto Date
function obtenerFecha() {
    const year = parseInt(obtenerDatos("Año:"));
    const month = parseInt(obtenerDatos("Mes:")) - 1; // Meses en JavaScript van de 0 a 11
    const day = parseInt(obtenerDatos("Día:"));
    const hour = parseInt(obtenerDatos("Hora:"));
    const minute = parseInt(obtenerDatos("Minuto:"));
    const second = parseInt(obtenerDatos("Segundo:"));
    return new Date(year, month, day, hour, minute, second);
}

// Función para preguntar si desea introducir más trayectos/repostajes
function deseaAgregarMas() {
    const respuesta = obtenerDatos("¿Desea agregar más trayectos o repostajes? (Sí/No)").toLowerCase();
    return respuesta === 'si';
}

// Crear objeto Vehiculo solicitando datos por pantalla/teclado
const modelo = obtenerDatos("Introduce el modelo del vehículo:");
const precio = parseFloat(obtenerDatos("Introduce el precio de compra del vehículo:"));
const vehiculo = new Vehiculo(modelo, precio);

do {
    const origen = obtenerDatos("Introduce la población de origen del trayecto:");
    const destino = obtenerDatos("Introduce la población de destino del trayecto:");
    const kms = parseFloat(obtenerDatos("Introduce la distancia en Kms del trayecto:"));
    const salida = obtenerFecha();
    let llegada;
    do {
        llegada = obtenerFecha();
        if (llegada <= salida) {
            alert("La fecha de llegada debe ser posterior a la fecha de salida. Inténtalo de nuevo.");
        }
    } while (llegada <= salida);

    const trayecto = new Trayecto(origen, destino, kms, salida, llegada);
    vehiculo.trayectos.push(trayecto);
} while (deseaAgregarMas());

do {
    const litros = parseFloat(obtenerDatos("Introduce el número de litros de combustible:"));
    const importe = parseFloat(obtenerDatos("Introduce el importe del repostaje:"));
    const fecha = obtenerFecha();
    const lugar = obtenerDatos("Introduce una descripción del lugar de repostaje:");

    const repostaje = new Repostaje(litros, importe, fecha, lugar);
    vehiculo.repostajes.push(repostaje);
} while (deseaAgregarMas());

// Emitir informe del vehículo
const distanciaMediaTrayectos = vehiculo.kmsRealizados() / vehiculo.trayectos.length;
const importeMedioRepostajes = vehiculo.repostajes.reduce((total, repostaje) => total + repostaje.importe, 0) / vehiculo.repostajes.length;
const consumoMedioLitrosPor100Km = vehiculo.litrosConsumidos() / (vehiculo.kmsRealizados() / 100);

console.log("Informe del Vehículo:");
console.log(`Modelo: ${vehiculo.modelo}`);
console.log(`Distancia media de los trayectos: ${distanciaMediaTrayectos.toFixed(2)} Km`);
console.log(`Importe medio de los repostajes: ${importeMedioRepostajes.toFixed(2)} €`);
console.log(`Consumo medio de litros de combustible cada 100 Km: ${consumoMedioLitrosPor100Km.toFixed(2)} litros`);
