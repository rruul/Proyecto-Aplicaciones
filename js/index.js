const contenido = document.querySelector('#contenido')
const fragment = document.createDocumentFragment()
const tipocursos = document.querySelector('#tipocursos').content

let datosCursos = []

fetch('conexion.php')
  .then(response => response.json())
  .then(data => {
    datosCursos = data
    creaCards(datosCursos)
    console.log('datos', datosCursos)
    
  })
  
  .catch(error => console.error(error));


const creaCards = (tipos) => {
    contenido.innerHTML = ''
    tipos.forEach((tipe) => {
        tipocursos.querySelector('.tipo').textContent = tipe.tipo
        
        const clone = tipocursos.cloneNode(true)
        fragment.appendChild(clone)
        
    })
    contenido.appendChild(fragment)
}