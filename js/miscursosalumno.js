const cursoscontenido = document.getElementById('cursos')
const cardcursos = document.getElementById('cardcursos').content
const fragment = document.createDocumentFragment()




document.addEventListener('DOMContentLoaded', () => {
    console.log(cursosdisp)
    createCardcurso(cursosdisp)
})

const createCardcurso = (cursos) => {
    cursos.forEach((curso) => { 
        cardcursos.querySelector('.titulo').innerHTML = curso.nombre_curso
        cardcursos.querySelector('.horas').innerHTML = 'Duración: ' + curso.horas + ' horas'
        cardcursos.querySelector('button').dataset.id = curso.curso_id
        const clone = cardcursos.cloneNode(true)
        fragment.appendChild(clone)
    })
    cursoscontenido.appendChild(fragment)
} 

function inscribirse (comp){
    let id = comp;
    console.log(id);
    $.ajax({
        url: '../back/alumno/salcurso.php',
        method: 'POST',
        data: { id: id },
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

cursoscontenido.addEventListener('click', e => {
    inscribirse(e.target.dataset.id)
    e.preventDefault()
})