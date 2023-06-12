const alumnoscontenido = document.getElementById('alumnos')
const btncontenedor = document.getElementById('btncontenedor')
const htexto = document.getElementById('htexto')
const cardalumno = document.getElementById('cardalumno').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(maestros)
    profes_elec(maestros)
})


const profes_elec = (profes) => {
    profes.forEach((profe) => {
        cardalumno.querySelector('.nombre').innerHTML = "<b>Nombre:</b>"+" "+profe.nombre + profe.apaterno + profe.amaterno
        cardalumno.querySelector('.correo').innerHTML = "<b>Correo:</b>"+" "+profe.correo
        cardalumno.querySelector('button').dataset.id = profe.id
        const clone = cardalumno.cloneNode(true)
        fragment.appendChild(clone)
    })
    alumnoscontenido.appendChild(fragment)
}

alumnoscontenido.addEventListener('click', e => {
    if( e.target.className == 'btn btn-danger calif' ) {
        eliminar(e.target.dataset.id)
    }
    e.preventDefault()
})

function eliminar (comp){
    let id = comp;
    $.ajax({
        url: '../back/admin/elprofe.php',
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