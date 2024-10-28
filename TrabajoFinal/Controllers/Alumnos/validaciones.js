//EDIT
const formEdit = document.getElementById('editAlumno')

//Traigo los valores de los inputs
const nombreInput = document.getElementById('nombreEdit')
const apellidoInput = document.getElementById('apellidoEdit')
const fechaInput = document.getElementById('fechaEdit')

formEdit.addEventListener('submit', function (event) {
  event.preventDefault()
  validar() 
})

//Función que recibe el input a mostrar error y el mensaje
const mostrarError = (input, mensaje) => {
  const elementoPadre = input.parentElement // Etiqueta div padre del input
  const etiquetaP = elementoPadre.querySelector('p') // Selecciona el <p>

  etiquetaP.innerText = mensaje // Muestra el mensaje de error en el <p>
  etiquetaP.classList.add('text-indigo-700') // Aplica el estilo de la etiqueta <p>
  input.classList.remove('border-gray-300') // Quita el estilo del input
  input.classList.add('border-indigo-500') // Aplica el estilo del input
}

const limpiarError = input => {
  const elementoPadre = input.parentElement // Etiqueta div padre del input
  const etiquetaP = elementoPadre.querySelector('p') // Selecciona el <p>

  etiquetaP.innerText = '' // Limpia el mensaje de error en el <p>
  input.classList.remove('border-indigo-500') // Elimina el estilo del input
  input.classList.add('border-gray-300') // Aplica el estilo del input
}

//Función para validar
const validar = () => {
  const enviarFormulario = true

  // Validación de Nombre
  if (nombreInput.value === '') {
    mostrarError(nombreInput, 'El campo nombre es requerido')
    enviarFormulario = false
  } else if (nombreInput.value.trim().length < 2) {
    mostrarError(nombreInput, 'El nombre debe tener al menos 2 caracteres.')
    enviarFormulario = false
  } else if (nombreInput.value.trim().length > 255) {
    mostrarError(nombreInput, 'El nombre debe tener menos de 255 caracteres.')
    enviarFormulario = false
  } else {
    limpiarError(nombreInput)
  }

  // Validación de Apellido
  if (apellidoInput.value === '') {
    mostrarError(apellidoInput, 'El apellido es requerido')
    enviarFormulario = false
  } else if (apellidoInput.value.trim().length < 2) {
    mostrarError(apellidoInput, 'El apellido debe tener al menos 2 caracteres.')
    enviarFormulario = false
  } else if (apellidoInput.value.trim().length > 255) {
    mostrarError(apellidoInput, 'El apellido debe tener menos de 255 caracteres.'
    )
    enviarFormulario = false
  } else {
    limpiarError(apellidoInput)
  }

  //Validación de Fecha
  const fechaHoy = new Date()
  const fechaInputDate = new Date(fechaInput.value)
  const fechaMin = new Date('1920-01-01')

  if (fechaInputDate > fechaHoy) {
    mostrarError(fechaInput, 'Ingrese una fecha posterior al día de hoy.')
    enviarFormulario = false
  } else if (fechaInputDate < fechaMin) {
    mostrarError(fechaInput, 'Ingrese una fecha válida.')
    enviarFormulario = false
  } else {
    limpiarError(fechaInput)
  }

  // Enviar formulario si todas las validaciones son correctas
  if (enviarFormulario == true) {
    formEdit.submit()
  }
}
