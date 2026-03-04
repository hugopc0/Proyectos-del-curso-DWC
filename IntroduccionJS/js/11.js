const producto = {
    nombre: "Monitor 20 pulgadas",
    precio: 300,
    disponible: true
};

// Forma anterior

// const nombre = producto.nombre;
// const precio = producto.precio;

// console.log(nombre);
// console.log(precio);

// Destructuring
const { nombre, precio } = producto; // Extraer propiedades de un objeto

console.log(nombre); // Monitor 20 pulgadas
console.log(precio); // 300

