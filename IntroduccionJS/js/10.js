const nombreProfucto = "Monitor 20 pulgadas";
const precio = 300;
const disponible = true;

const producto = {
  nombre: nombreProfucto,
  precio: precio,
  disponible: disponible
};

// Agregar propiedades al objeto
producto.imagen = "imagen.jpg";

// Eliminar propiedades del objeto
delete producto.disponible;

console.log(producto);

// console.log(producto.nombre);