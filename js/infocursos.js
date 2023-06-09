document.addEventListener('DOMContentLoaded', () => {
    console.log(informacion)
    defboton(informacion)
})

let boton = document.getElementById("btninsc")

const defboton = (cursos) => {
    cursos.forEach((curso) => {
        boton.id = curso.id
        
    })
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