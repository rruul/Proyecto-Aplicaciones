const alumnoscontenido = document.getElementById('alumnos')
const cardalumno = document.getElementById('cardalumno').content
const fragment = document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', () => {
    console.log(alumnos)
    createCardcurso(alumnos)
})

const createCardcurso = (alumnos) => {
    alumnoscontenido.innerHTML = ''
    alumnos.forEach((alumno) => { 
        cardalumno.querySelector('.nombre').innerHTML = alumno.nombre + alumno.apaterno + alumno.amaterno
        cardalumno.querySelector('.correo').innerHTML = alumno.correo
        const clone = cardalumno.cloneNode(true)
        fragment.appendChild(clone)
    })
    alumnoscontenido.appendChild(fragment)
} 