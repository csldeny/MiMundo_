document.addEventListener("DOMContentLoaded", () => {

    let listaProductos = [];

    const producto = {
        id: "",
        nombre: "",
        talla: "",
        precio: "",
        temporada: "",
        categoria: ""
    }

    const formulario = document.querySelector("#formulario")
    const productoInput = document.querySelector("#txtProducto")
    const tallaInput = document.querySelector("#txtTalla")
    const precioInput = document.querySelector("#txtPrecio")

    formulario.addEventListener("submit", e => {

        e.preventDefault();

        if(productoInput.value === "" || tallaInput.value === "" ||
        precioInput.value === ""){
            alert("Hola")
        }else{
            producto.id = Date.now()
            producto.nombre = precioInput.value;
            producto.talla = tallaInput.value;

            agregarProducto();
        }
    })

    function agregarProducto (){
        listaProductos.push({...producto});

        mostrarProductos();
    }

    function mostrarProductos(){
        const cartas = document.querySelector(".cartas")
        listaProductos.forEach( producto => {
            const {id, nombre, talla} = producto

            const carta = document.createElement('P');
            carta.textContent = `${id} - ${nombre} - ${talla}`
            carta.dataset.id = id

            const editarProducto = document.createElement("BUTTON")
            // editarProducto.onclick = () => cargarProducto(producto)
            editarProducto.textContent = "Editar"
            editarProducto.classList.add("ok")
            carta.append(editarProducto)
            
            const eliminarProducto = document.createElement("BUTTON")
            //eliminarProducto.onclick = () => eliminarProducto(id)
            eliminarProducto.textContent = "Eliminar"
            eliminarProducto.classList.add("ok")
            carta.append(eliminarProducto)

            formulario.appendChild(carta)
        })
    }

})