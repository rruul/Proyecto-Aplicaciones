const cursoscontenido = document.getElementById('cursos')
const cardcursos = document.getElementById('cardcursos').content
const fragment = document.createDocumentFragment()

document.addEventListener('DOMContentLoaded', () => {
    console.log(resultados)
    createCardcurso(resultados)
})

const createCardcurso = (cursos) => {
    cursoscontenido.innerHTML = ''
    cursos.forEach((curso) => { 
        cardcursos.querySelector('.titulo').innerHTML = curso.nombre_curso
        cardcursos.querySelector("#id").value = curso.curso_id
        cardcursos.querySelector('.maestro').innerHTML = 'Impartido por: ' + curso.nombre_maestro+' '+curso.apaterno+' '+curso.amaterno
        const clone = cardcursos.cloneNode(true)
        fragment.appendChild(clone)
    })
    cursoscontenido.appendChild(fragment)
} 

