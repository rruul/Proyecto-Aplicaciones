const cursoscontenido = document.getElementById('cursos')
const cardcursos = document.getElementById('cardcursos').content
const fragment = document.createDocumentFragment()




document.addEventListener('DOMContentLoaded', () => {
    console.log(resultados)
    createCardcurso(resultados)
})

const createCardcurso = (cursos) => {
    cursos.forEach((curso) => { 
        cardcursos.querySelector('.titulo').innerHTML = curso.nombre
        cardcursos.querySelector('.horas').innerHTML = 'Duración: ' + curso.horas + ' horas'

        const clone = cardcursos.cloneNode(true)
        fragment.appendChild(clone)
    })
    cursoscontenido.appendChild(fragment)
} 