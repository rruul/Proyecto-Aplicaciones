const infoprofes = document.getElementById('profes')
const cardprofes = document.getElementById('cardprofes').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(alumnos)
    profes_elec(alumnos)
})


const profes_elec = (alumnos) => {
    alumnos.forEach((alumno) => {
        cardprofes.querySelector('.nombre').innerHTML = "<b>ID:</b>"+" "+alumno.id
        cardprofes.querySelector('.correo').innerHTML = "<b>Correo:</b>"+" "+alumno.correo
        cardprofes.querySelector('.conmutador').innerHTML = "<b>Nombre:</b>"+" "+alumno.nombre + alumno.apaterno + alumno.amaterno
        cardprofes.querySelector('button').dataset.id = alumno.id
        const clone = cardprofes.cloneNode(true)
        fragment.appendChild(clone)
    })
    infoprofes.appendChild(fragment)
}

infoprofes.addEventListener('click', e => {
    if( e.target.className == 'btn btn-danger calif' ) {
        eliminar(e.target.dataset.id)
    }
    e.preventDefault()
})

function eliminar (comp){
    let id = comp;
    $.ajax({
        url: '../back/admin/elalumno.php',
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