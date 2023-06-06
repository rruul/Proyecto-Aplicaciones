
document.addEventListener('DOMContentLoaded', () => {
    console.log(informacion)
    defboton(informacion)
})

let boton = document.getElementById("btninsc")
let idnomas 

const defboton = (cursos) => {
    cursos.forEach((curso) => {
        boton.id = curso.id
        idnomas = curso.aprende
        
    })
    console.log(idnomas)
    otrafuncion(idnomas);
}

boton.addEventListener('click', e => {
    inscribirse(boton.id)
    boton.remove()
})


function inscribirse (comp){
    let id = comp;
    console.log(id);
    $.ajax({
        url: '../back/alumno/rcurso.php',
        method: 'POST',
        data: { id: id },
        success: function(response) {
            console.log('Petición AJAX exitosa');
            console.log(response);
            location.replace('../miscursosalumno.php');
        },
        error: function(xhr, status, error) {
            console.log('Error en la petición AJAX');
            console.log(error);
        }
    });
}

function otrafuncion(idnomas) {
    const ruta = '/cursos/' + idnomas

const contenidoDiv = document.getElementById('contenido');
contenidoDiv.innerHTML = ''

fetch(ruta)
.then(response => response.text())
.then(data => {
    contenidoDiv.innerHTML = data;
})
.catch(error => {
    console.error('No se pud0', error);
})

}
