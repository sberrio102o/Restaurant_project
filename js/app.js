// console.log("hola restaurante")

// //querySelector
// const proof = document.querySelector("h1")//retorna el primer elemento que encuentre
// const proof2 = document.querySelector("a")//retorna el primer elemento que encuentre
// const proof3 = document.querySelector(".footer-bottom p")//retorna el primer elemento que encuentre
// const prof4 = document.querySelector("#gallery #plate12")//retorna el primer elemento que encuentreq


// const prof5 = document.querySelector("#secondarytext")
// prof5.textContent = "free delivery for orders over $50"
// const prof6 = document.querySelector("#gallery_title")
// prof6.textContent = "Our dishes"

// console.log(proof)
// console.log(proof2)
// console.log(proof3)
// console.log(prof4)
// console.log(prof5)

// // querySelectorAll()
// const proof7 = document.querySelectorAll("p")//retorna todos los elementos que encuentre
// console.log(proof7)

// const imagen = document.querySelector("#gallery")
// console.log(imagen)

// const contact = document.querySelectorAll("#footer-nav a")
// console.log(contact [3])
// contact [3].textContent = "new contact"

// /* <a href="contact.html">Contact</a> */
// const new1 = document.createElement("A")

// //agregsr href
// new1.href = "https://www.google.com"

// //agregar texto
// new1.textContent = "Google"

// //agregar una clase 
// new1.classList.add("proof")

// //agregarlo al documento
// const add = document.querySelector(".nav nav")
// add.appendChild(new1)


// console.log(new1)

// const email = document.createElement("A")
// email.classList.add("email")
// email.textContent = "email: sberrio0003@gmail.com"
// console.log(email)

// const contact2 = document.querySelector(".contact")
// contact2.appendChild(email)

// console.log (1)
// console.log (2)
// console.log (3)


// window.addEventListener("load", function() {
//     console.log (2)
// })

// document.addEventListener("DOMContentLoaded", function() {
//     console.log (4)
// })

// console.log (5)

// function imprimir() {
//     console.log (4)
// }

// console.log("hola restaurante")
// const btn_enviar =document.querySelector(".btn-enviar")
// console.log(btn_enviar)


// btn_enviar.addEventListener("click", function(evento) {
//     console.log(evento);
//     evento.preventDefault();
//     console.log("enviando formulario")
// })



// const nombre =document.querySelector("#nombre")
// nombre.addEventListener("input", function(e) {
//     console.log(e.value)
// })



const nombre =document.querySelector("#nombre")
console.log(nombre)

const datos= {
    nombre: "",
    apellido: "",
    celular: "",
    email: "",
    mensaje: ""   
}
const apellido =document.querySelector("#apellido")
const celular =document.querySelector("#celular")
const email =document.querySelector("#email")
const mensaje =document.querySelector("#mensaje")

nombre.addEventListener("input", leerDatos)
apellido.addEventListener("input", leerDatos)
celular.addEventListener("input", leerDatos)
email.addEventListener("input", leerDatos)
mensaje.addEventListener("input", leerDatos)

function leerDatos(e) {
    // console.log(e.target.value)
    datos[e.target.id] = e.target.value

    console.log(datos)
}

const formulario = document.querySelector(".formulario")
formulario.addEventListener('submit', function(e) {
    e.preventDefault();
     //VALIDAR FORMULARIO
    const {nombre, email, mensaje } = datos;
    if (nombre === "" || email==="" || mensaje ==="" ){
        mostrarError("El nombre, email y mensaje son obligatorio")
        return
    }
    //  ENVIAR EL FORMULARIO
    mostrarMensaje("¡Formulario enviado con exito!")
})

function mostrarError (mensaje) {
    
    const error = document.createElement('P')
    error.textContent = mensaje;
    error.classList.add('error');
    formulario.appendChild(error)
    //desaparezca de 2seg
    setTimeout(()=> {
        error.remove();
    }, 2000)
    console.log(error)
}

function mostrarMensaje (mensaje) {
    const mensajeOk = document.createElement('P')
    mensajeOk.textContent = mensaje;
    mensajeOk.classList.add('mensajeOk');
    formulario.appendChild(mensajeOk)

    //desaparezca de 2seg
    setTimeout(()=> {
        mensajeOk.remove();
    }, 2000)
}

// PESTAÑAS
const botones = document.querySelectorAll(".tab-btn");
const contenidos = document.querySelectorAll(".tab-content");

botones.forEach(boton => {
    boton.addEventListener("click", () => {

        if (boton.classList.contains("active")) return;

        botones.forEach(b => b.classList.remove("active"));
        contenidos.forEach(c => c.classList.remove("active"));

        boton.classList.add("active");

        const id = boton.dataset.tab;
        document.getElementById(id).classList.add("active");
    });
});

