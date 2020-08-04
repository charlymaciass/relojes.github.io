$( document ).ready(function() {

// nuevo carrito
if (localStorage.getItem("carrito") == null) {
    var carrito = {};
    var carrito = JSON.stringify(carrito);
    localStorage.setItem("carrito", carrito);
}


function ProductoInfo(foto, nombre, precio, id_prd, desc, cantidad) {
    this.foto = foto;
    this.nombre = nombre;
    this.precio = precio;
    this.id_prd = id_prd;
    this.desc = desc;
    this.cantidad = cantidad;
}



var cantidad = 1;

    $('.btnComprar').click(function () {
        var nombre = $('#nombre-modelo>h1').text().toLowerCase();
        let foto = 'imgs/carrito-'+nombre+'.jpg'
        var precio = $('#comprar-info p').text()
        var precio = precio.replace("U$D", "");
        let id_prd = 00;
        let desc = '';

        let modelo_nombre = 'modelo_'+nombre;
        
        var carritoObj = localStorage.getItem('carrito')
        var carritoObj = JSON.parse(carritoObj)
        
        if(nombre in carritoObj){
            // console.log(carritoObj[nombre].cantidad)
            var cantidadNew = carritoObj[nombre].cantidad + 1
            carritoObj[nombre].cantidad = cantidadNew;
            // console.log(carritoObj[nombre].cantidad)
            
        }else{
            var prd = new ProductoInfo(foto, nombre, precio, id_prd, desc, cantidad);
            carritoObj[nombre] = prd;
        }
          
        // console.log(carritoObj)
        var carrito_str = JSON.stringify(carritoObj)
        // console.log(carrito_str)

        localStorage.setItem("carrito", carrito_str);
        window.location="/latam/carrito"
    })
 


});