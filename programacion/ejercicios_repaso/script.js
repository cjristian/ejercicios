const libros = [];
class Libro {

    constructor(titulo, nombre, anio) {
        this.titulo = titulo;
        this.nombre = nombre;
        this.anio = anio;

    }
    getTitulo() {
        return this.titulo;

    }
    getNombre() {
        return this.nombre;

    }
    getAnio() {
        return this.anio;

    }

}
function hacerLibros() {
    const numero = prompt("Escribe cuantos libros quieres ");
    for (let i = 0; i < numero; i++) {
        let titulo = prompt(`Escrime el titulo del  libro ${i + 1}`);
        let nombre = prompt(`Escrime el nombre del autor `);
        let anio = parseInt(prompt("Escrime el año de publicacion"));
        const libro = new Libro(titulo, nombre, anio);
        libros.push(libro);

    }



}
function recorrerArray() {
    if (libros.length !== 0) {
        libros.forEach((elemento, index) => {
            console.log(`${index + 1} Titulo:${elemento.getTitulo()} Autor: ${elemento.getNombre()} Añio de publicacion: ${elemento.getAnio()}`);
        });
    } else {
        alert("Tienes que añadir libros a tu lista");
    }
}
function recorrerAutor() {
    if (libros.length !== 0) {
        libros.forEach((elemento, index) => {
            console.log(`${index + 1}  Autor: ${elemento.getNombre()}`);
        });
    } else {
        alert("Tienes que añadir libros a tu lista");
    }
}
function ultimo() {
    if (libros.length !== 0) {
        const ultimo = libros[libros.length - 1];
        console.log(`Titulo:${ultimo.getTitulo()} Autor: ${ultimo.getNombre()} Añio de publicacion: ${ultimo.getAnio()}`);


    } else {
        alert("Tienes que añadir libros a tu lista");
    }
}
function promedioAnios() {
    if (libros.length !== 0) {
        let media=0;
        libros.forEach((elemento, index) => {
            media += elemento.getAnio();
        });
        media/=libros.length;
        console.log(`La media de los libros es ${media}`);

    } else {
        alert("Tienes que añadir libros a tu lista");
    }
}