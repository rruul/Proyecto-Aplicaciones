const infoprofes = document.getElementById('profes')
const cardprofes = document.getElementById('cardprofes').content
const fragment = document.createDocumentFragment()


document.addEventListener('DOMContentLoaded', () =>{
    console.log(maestros)
    profes_elec(maestros)
})


const profes_elec = (profes) => {
    profes.forEach((profe) => {
        cardprofes.querySelector('.nombre').innerHTML =  "<b>ID:</b>"+" "+profe.id
        cardprofes.querySelector('.correo').innerHTML = "<b>Correo:</b>"+" "+profe.correo
        cardprofes.querySelector('.conmutador').innerHTML = "<b>Nombre:</b>"+" "+profe.nombre + " "+profe.apaterno+" " + profe.amaterno
        cardprofes.querySelector('button').dataset.id = profe.id
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