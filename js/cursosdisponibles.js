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
        cardcursos.querySelector('.maestro').innerHTML = 'Impartido por: ' + curso.nombre
        cardcursos.querySelector("#id").value = curso.curso_id
        const clone = cardcursos.cloneNode(true)
        fragment.appendChild(clone)
    })
    cursoscontenido.appendChild(fragment)
} 

