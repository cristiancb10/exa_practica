/*var edad = 5;
let nombre = "cristian";*/
/*edad = 15; 
/*console.log("hola mi nombre es:"+nombre+" y tengo :"+edad+" añós");*/

/*let a = 5;
let b = 2;
/*alert(nombre);*/
/*alert(edad);*/

/*a++;
b--;*/
/*console.log(a);
console.log(b);*/

/*++a;
--b;
console.log(a);
console.log(b);*/

/*a > b; // true
a < b; // false
a == b; // false
a != b;*/
/*let a = 10;
let b = "Hola Mundo";
let c = true;

console.log(typeof a); // number
console.log(typeof b); // string
console.log(typeof c); // boolean*/

/*function saludo() {
    console.log("holas"); 
    /*    alert("revise la consola");*/

/*saludo();*/

/*function miFuncion(){
    return "saludos";
}

const hola = miFuncion;
console.log(typeof hola());*/ 

/*const persona = {
    nombre: "cristian",
    apellido: "coca" ,
    edad: 27,
    sasc:false,
    saludar: function(){
        console.log("Hola Mundo");
    }
}

persona.saludar();*/

const persona = {
    nombre: "Juan",
    apellido: "Perez",
    edad: 25,
    casado: false,
    saludar: function(){
        console.log("Hola, mi nombre es "+this.nombre+" "+this.apellido);
    },
    matrimonio: function(){
        this.casado = true;
        console.log("Ahora estoy casado");
    }
}

// Llamada a un metodo
persona.saludar();
persona.matrimonio();
console.log(persona.casado); // Ya esta casado