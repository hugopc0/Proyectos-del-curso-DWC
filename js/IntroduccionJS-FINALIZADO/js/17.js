const numero1 = 20;
const numero2 = "20";

if (typeof numero2 === "number") {
    console.log("Es un número"); 
} else {
    console.log("No es un número");
}


console.log( parseInt(numero2) ); // parseInt() es una función
console.log( numero1.toString() ); // .toString() es un método