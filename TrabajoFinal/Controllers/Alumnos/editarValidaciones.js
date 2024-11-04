window.cleanErrores = function () {
    // Selecciona todos los elementos con mensajes de error
    const inputs = document.querySelectorAll('#editAlumno input'); 
    inputs.forEach(input => limpiarError(input)); // Aplica la función limpiarError a cada input
}
//EDIT
const form = document.getElementById('editAlumno');

//Traigo los valores de los inputs
let nombreInput = document.getElementById('nombre');
let apellidoInput = document.getElementById('apellido');
let fechaInput = document.getElementById('fecha');

form.addEventListener('submit', function (event) {
    event.preventDefault();
    validar();
})

//Función que recibe el input a mostrar error y el mensaje
const mostrarError = (input, mensaje) => {
    const elementoPadre = input.parentElement; // Etiqueta div padre del input
    const etiquetaP = elementoPadre.querySelector('p'); // Selecciona el <p>

    etiquetaP.innerText = mensaje; // Muestra el mensaje de error en el <p>
    etiquetaP.classList.add('text-blue-900'); // Aplica el estilo de la etiqueta <p>
    input.classList.remove('border-gray-300'); // Quita el estilo del input
    input.classList.add('border-blue-900'); // Aplica el estilo del input
}

const limpiarError = input => {
    const elementoPadre = input.parentElement; // Etiqueta div padre del input
    const etiquetaP = elementoPadre.querySelector('p'); // Selecciona el <p>
    if (etiquetaP) {
        etiquetaP.innerText = ''; // Limpia el mensaje de error en el <p>
        input.classList.remove('border-blue-900'); // Elimina el estilo del input
        input.classList.add('border-gray-300'); // Aplica el estilo del input
    }
    
}

//Función para validar
const validar = () => {
let enviarFormulario = true;

// Validación de Nombre
if (nombreInput.value === '') {
    mostrarError(nombreInput, 'El campo Nombre es requerido');
    enviarFormulario = false;
} else if (nombreInput.value.trim().length < 2) {
    mostrarError(nombreInput, 'El nombre debe tener al menos 2 caracteres.');
    enviarFormulario = false;
} else if (nombreInput.value.trim().length > 255) {
    mostrarError(nombreInput, 'El nombre debe tener menos de 255 caracteres.');
    enviarFormulario = false;
} else {
    limpiarError(nombreInput)
}

  // Validación de Apellido
if (apellidoInput.value === '') {
    mostrarError(apellidoInput, 'El campo Apellido es requerido.');
    enviarFormulario = false;
} else if (apellidoInput.value.trim().length < 2) {
    mostrarError(apellidoInput, 'El apellido debe tener al menos 2 caracteres.');
    enviarFormulario = false;
} else if (apellidoInput.value.trim().length > 255) {
    mostrarError(apellidoInput, 'El apellido debe tener menos de 255 caracteres.');
    enviarFormulario = false;
} else {
    limpiarError(apellidoInput);
}

//Validación de Fecha
let fechaHoy = new Date();
let fechaInputDate = new Date(fechaInput.value);
let fechaMin = new Date('1920-01-01');

const fechaHoyFormateada = fechaHoy.toISOString().split('T')[0];
const fechaInputFormateada = fechaInputDate.toISOString().split('T')[0];


if(fechaInputDate == 'Invalid Date'){
    mostrarError(fechaInput, 'El campo Fecha de Nacimiento es requerido.');
    enviarFormulario = false;
}else if (fechaInputFormateada == fechaHoyFormateada){
    mostrarError(fechaInput, 'Ingrese una fecha diferente al día de hoy.');
    enviarFormulario = false;
}else if (fechaInputDate > fechaHoy) {
    mostrarError(fechaInput, 'Ingrese una fecha anterior al día de hoy.');
    enviarFormulario = false;
} else if (fechaInputDate < fechaMin) {
    mostrarError(fechaInput, 'Ingrese una fecha válida.');
    enviarFormulario = false;
} else {
    limpiarError(fechaInput);
}

// Enviar formulario si todas las validaciones son correctas
if (enviarFormulario === true) {
    form.submit();
}
}
