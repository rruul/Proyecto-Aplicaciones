document.addEventListener('DOMContentLoaded', () => {
    console.log(informacion)
    defboton(informacion)
})

let boton = document.getElementById("btnsal")

const defboton = (cursos) => {
    cursos.forEach((curso) => {
        boton.id = curso.id
        
    })
}

boton.addEventListener('click', e => {
    salircurso(boton.id)
    boton.remove()
})


function salircurso (comp){
    let id = comp;
    console.log(id);
    $.ajax({
        url: '../back/alumno/salcurso.php',
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