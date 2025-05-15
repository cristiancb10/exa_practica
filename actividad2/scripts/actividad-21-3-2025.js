const boton = document.querySelector("#btn-form");

// Definimos la funcion a usar
function datos(event) {
    event.preventDefault();

    const persona = {

        /*nombre: "juan",
        edad : 15*/
        nombre: document.querySelector("#username").value,
        edad : document.querySelector("#number").value
    }
    if (persona.nombre === "" || persona.edad === "") {
        alert("Por favor, completa todos los campos.");
    } else {
        alert("Mi nombre es " + persona.nombre + " y tengo " + persona.edad + " años");
    }
}
boton.addEventListener("click", datos);