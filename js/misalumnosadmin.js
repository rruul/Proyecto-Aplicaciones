const alumnoscontenido = document.getElementById('alumnos')
const btncontenedor = document.getElementById('btncontenedor')
const htexto = document.getElementById('htexto')
const cardalumno = document.getElementById('cardalumno').content
const fragment = document.createDocumentFragment()

const iddelcurso = document.getElementById('iddelcurso')

document.addEventListener('DOMContentLoaded', () => {
    iddelcurso.value = id_curso
    console.log(alumnos)
    createCardalumno(alumnos)
})

const createCardalumno = (alumnos) => {
    alumnoscontenido.innerHTML = ''
    if(alumnos.length < 1){
        htexto.innerHTML = ''
        htexto.innerHTML = 'No existen alumnos registrados a este curso'
    }
    alumnos.forEach((alumno) => { 
        cardalumno.querySelector('.nombre').innerHTML = alumno.nombre + ' ' + alumno.apaterno + ' '+ alumno.amaterno
        cardalumno.querySelector('.correo').innerHTML = alumno.correo
        cardalumno.querySelector('button').dataset.id = alumno.id
        const clone = cardalumno.cloneNode(true)
        fragment.appendChild(clone)
    })
    alumnoscontenido.appendChild(fragment)
} 

alumnoscontenido.addEventListener('click', e => {
    if( e.target.className == 'btn btn-danger btneliminar' ) {
        eliminar(e.target.dataset.id)
    }
    e.preventDefault()
})

btncontenedor.addEventListener('click', e => {
    if( e.target.className == 'btn btn-danger eliminarcurso' ) {
        eliminarcurso()
    }
})

function eliminarcurso (){
    let curso_id = id_curso
    $.ajax({
        url: '../back/maestro/eliminarcurso.php',
        method: 'POST',
        data: { id: curso_id },
        success: function(response) {
            console.log('Petición AJAX exitosa');
            console.log(response);
            location.replace('../miscursosadmin.php');
        },
        error: function(xhr, status, error) {
            console.log('Error en la petición AJAX');
            console.log(error);
        }
    });
}

function eliminar (comp){
    let id = comp;
    let curso_id = id_curso
    $.ajax({
        url: '../back/maestro/eliminaralumno.php',
        method: 'POST',
        data: { id: id, idcurso: curso_id },
        success: function(response) {
            console.log('Petición AJAX exitosa');
            console.log(response);
            location.reload();
        },
        error: function(xhr, status, error) {
            console.log('Error en la petición AJAX');
            console.log(error);
        }
    });
}