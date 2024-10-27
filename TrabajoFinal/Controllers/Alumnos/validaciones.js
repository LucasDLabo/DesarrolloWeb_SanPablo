//CREATE

//EDIT
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('editAlumno')

  form.addEventListener('submit', function (event) {
    let isValid = true

    const nombreInputE = document.getElementById('nombreE')
    nombreInputE.classList.remove('border-indigo-500')

    const errorNombreE = document.getElementById('errorNombreE')
    errorNombreE.classList.add('hidden')

    // Validación Nombre
    if (nombreInputE.value.length < 2) {
      event.preventDefault()
      isValid = false 
      errorNombreE.textContent = 'El nombre debe tener al menos 2 caracteres.'
      errorNombreE.classList.remove('hidden') 
      nombreInputE.classList.add('border-indigo-500') 
    } else if (nombreInputE.value.length > 255) {
      event.preventDefault() 
      isValid = false 
      errorNombreE.textContent = 'El nombre debe tener menos de 255 caracteres.'
      errorNombreE.classList.remove('hidden') 
      nombreInputE.classList.add('border-indigo-500') 
    } else {
      nombreInputE.classList.remove('border-indigo-500') 
    }

    const apellidoInputE = document.getElementById('apellidoE')
    apellidoInputE.classList.remove('border-indigo-500')

    const errorApellidoE = document.getElementById('errorApellidoE')
    errorApellidoE.classList.add('hidden')

    // Validación Apellido
    if (apellidoInputE.value.length < 2) {
      event.preventDefault()
      isValid = false
      errorApellidoE.textContent =
        'El apellido debe tener al menos 2 caracteres.'
      errorApellidoE.classList.remove('hidden')
      apellidoInputE.classList.add('border-indigo-500')
    } else if (apellidoInputE.value.length > 255) {
      event.preventDefault()
      isValid = false 
      errorApellidoE.textContent =
        'El apellido debe tener menos de 255 caracteres.'
      errorApellidoE.classList.remove('hidden')
      apellidoInputE.classList.add('border-indigo-500') 
    } else {
      apellidoInputE.classList.remove('border-indigo-500')
    }

    const fechaInputE = document.getElementById('dateE')
    fechaInputE.classList.remove('border-indigo-500')

    const errorFechaE = document.getElementById('errorFechaE')
    errorFechaE.classList.add('hidden')

    const today = new Date()
    const selectedDate = new Date(fechaInputE.value)
    const minDate = new Date('1920-01-01')
    if (selectedDate > today) {
      event.preventDefault()
      isValid = false
      errorFechaE.textContent = 'La fecha no puede ser futura.'
      errorFechaE.classList.remove('hidden') 
      fechaInputE.classList.add('border-indigo-500') 
    } else if (selectedDate < minDate) {
      event.preventDefault()
      isValid = false 
      errorFechaE.textContent = 'Ingrese una fecha válida'
      errorFechaE.classList.remove('hidden') 
      fechaInputE.classList.add('border-indigo-500') 
    } else {
      fechaInputE.classList.remove('border-indigo-500') 
    }

    return isValid
  })
})
