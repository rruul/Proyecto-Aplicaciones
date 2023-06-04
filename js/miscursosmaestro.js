const cursoscontenido = document.getElementById('cursos')
const cardcursos = document.getElementById('cardcursos').content
const cardalumno = document.getElementById('cardalumno').content
const cardsalir = document.getElementById('cardsalir').content
const fragment = document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', () => {
    console.log(resultados)
    createCardcurso(resultados)
})

const createCardcurso = (cursos) => {
    cursoscontenido.innerHTML = ''
    cursos.forEach((curso) => { 
        cardcursos.querySelector('.titulo').innerHTML = curso.nombre
        cardcursos.querySelector('.horas').innerHTML = 'Duración: ' + curso.horas + ' horas'
        cardcursos.querySelector('.btnalumnos').dataset.id = curso.id
        const clone = cardcursos.cloneNode(true)
        fragment.appendChild(clone)
    })
    cursoscontenido.appendChild(fragment)
} 

const createCardalumno = (alumnos) => {
    cursoscontenido.innerHTML = ''
    if(alumnos.length < 1){
        cardsalir.querySelector('.nocursos').innerHTML = 'No tienes alumnos registrados '
    }
    console.log(alumnos)
    alumnos.forEach((alumno) => { 
        //cardalumno.querySelector('.titulo').innerHTML = alumno.nombre
        //cardalumno.querySelector('.correo').innerHTML = 'Correo: ' + alumno.correo
        //cardalumno.querySelector('button').dataset.id = alumno.id
        const clone = cardalumno.cloneNode(true)
        fragment.appendChild(clone)
    })
    const clone2 = cardsalir.cloneNode(true)
    fragment.appendChild(clone2)
    cursoscontenido.appendChild(fragment)
} 

function loadalumnos (comp){
    let id = comp;
    $.ajax({
        url: '../back/maestro/loadalumnos.php',
        method: 'POST',
        data: { id: id },
        success: function(response) {
            console.log('Petición AJAX exitosa');
            createCardalumno(alumnos)
        },
        error: function(xhr, status, error) {
            console.log('Error en la petición AJAX');
            console.log(error);
        }
    });
}

cursoscontenido.addEventListener('click', e => {
    if( e.target.className == 'btnalumnos btn btn-primary' ) {
        console.log('yoooo')
        loadalumnos(e.target.dataset.id)
    }
    if( e.target.className == 'btn btn-primary btnsalir' ) {
        location.reload();
    }
    e.preventDefault()
})