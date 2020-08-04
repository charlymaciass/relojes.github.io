<div id="fondoModal">
	<div>
		<form id="formCorpo">
				<h4>PEDIR CORIZACION</h4>
				<h2>Llena el foRmulario</h2>
				<input id="nombreC" class="inputes" placeholder="Nombre" type="text">
				<input id="mailC" class="inputes" placeholder="Mail" type="email">
				<input id="empresa" class="inputes" placeholder="Nombre de la Empresa" type="text">
				<input id="telefono" class="inputes" placeholder="Whatsapp"  type="text">
				<select id="cantidad" class="inputes selectisoide">
				  	<option value="" selected disabled hidden>Cantidad</option>
    				<option value="+25">Más de 25</option>
				    <option value="+50">Más de 50</option>
				    <option value="+100">Más de 100</option>
				</select><br>
				<select id="grabado" class="inputes selectisoide">
					<option value="" selected disabled hidden>A grabar</option>
    				<option value="logo">Logo</option>
				    <option value="modelo">Nombre</option>
				</select><br>
				<input id="enviarCorpo" type="submit" onclick="enviarMail()">
				<img id="cerrarModal" src="imgs/cancel.png" alt="">
		</form>
		<p id="confirmacion">MUCHAS GRACIAS POR PONERTE EN CONTACTO CON NOSOTROS. TE RESPONDEREMOS POR MAIL LO ANTES POSIBLE PARA VER COMO PROCEDEMOS CON EL PEDIDO.</p>
	</div>
</div>
<style>

#fondoModal{
	position: fixed;
	top: 0;
	width: 100%;
	height: 100%;
	background: rgba(0,0,0,0.7);
	display: none;
	z-index: 9999!important;
	opacity: 0;
	/*filter: blur(15px);*/
}

#fondoModal>div{
	padding: 2.5% 5%;
	background: white;
	display: block;
	position: absolute;
	width: 50vw;
	/*max-height:60vh;*/
	left: 20vw;
	top: 10%;
	filter: blur(0px);
	border: 1px solid #ddd;
	border-radius: 3px;
	box-shadow: 0px 0px 3px 2px #515151;
	transition: .3s;
	transform: scale(0);
}

#modal h4{
	color: #bc8c3e;
	font-size: 1em;
}
#modal h2{
	margin-bottom: 5%;
	font-size: 2em;
}

#modal form{ position: relative; }


.inputes{
	background: #f0f0f0;
	resize: none;
	border: none;
	border: none;
	padding: 8px 2%;
	border-radius: 3px;
	outline: none;
	width: 96%;
	margin: 1% 0.5%;
	font-family: 'Montserrat';
	font-weight: 500;
	transition: .2s;
	font-size: 0.9em;
}
.inputes:placeholder{
	font-family: 'Montserrat';
}
.inputes:focus{
	box-shadow: 1px 1px 2px 1px #ddd;
}
#enviarCorpo{
	margin: auto;
	margin-top: 2%;
	padding: 7px 15px;
	cursor: pointer;
	font-family: 'Montserrat';
	text-transform: uppercase;
	font-weight: 600;
	background: transparent;
	border: 2px solid #bc8c3e;
	color: #bc8c3e;
	transition: .2s;
	display: block;
	outline: none;
}
.selectisoide{
	width: 100%;
	outline: none;
}

#confirmacion{
	font-family: 'Vincent';
	color: #bc8c3e;
	margin: 5% 1%;
	width: 100%;
	display: none;
}
#cerrarModal{
	position: absolute;
	top: -5%;
	right: -8.5%;
	cursor: pointer;
}


@media only screen and (max-width: 512px) {
	#fondoModal>div{
		padding: 5%;
    	width: 70vw;
    	left: 10vw;
	}
	.inputes{
		margin: 3% 0.5%;
	}
	#cerrarModal{
		top: -3.5%;
    	right: -5%;
	}
}
</style>

<script>

$( document ).ready(function() {
   
	 abreMod();



	$('#cerrarModal').click(function () {
		cierraMod();
	});

	

	$('#fondoModal').on('click', function(e) {
  		if (e.target !== this)
    		return;
  
 			cierraMod();
		});


	function abreMod(){
		$('body').css({'overflow-y':'hidden'})
		$('#fondoModal').css({'display':'block','opacity':'1'})

		setTimeout(function() {

			$('#fondoModal>div').css({'transform':'scale(1)'})

		}, 150)

	};
	
	function cierraMod(){
		$('body').css({'overflow-y':'auto'})
		$('#fondoModal>div').css({'transform':'scale(0)'})
		
		setTimeout(function() {
			$('#fondoModal').css({'display':'none','opacity':'0'})
		}, 150)
	};

});




// $( document ).ready(function() {

//ENVIAR MAIL CON AJAX
function enviarMail(){
    $('#formCorpo').submit(event.preventDefault());
    console.log('Breadcrumb #1')

    var nombre = $('#nombreC').val();
    console.log('nombre: ' + nombre)
    var mail = $('#mailC').val();
    console.log('mail: ' + mail);
    var empresa = $('#empresa').val();
    var telefono = $('#telefono').val();
    var cantidad = $('#cantidad').val();
    var grabado = $('#grabado').val();

    console.log('Breadcrumb #2');

    if($.trim(mail) != ''){
        console.log('antes de ajax')
        $.ajax({
            url:'enviarMail.php?corporativo=1',
            method:'POST',
            cache: false,
            data:{
            	nombre:nombre,
                mail:mail,
                empresa:empresa,
                telefono:telefono,
                cantidad:cantidad,
                grabado:grabado},
            dataType:'text',
            success:function(data){
                console.log(data)

                // Pushea un GET para que Facebook tome la conversion
              history.pushState({},"Pedido de corporativo",'?corporativo=1');

                $('#nombreC').val('')
                $('#mailC').val('')
                $('#empresa').val('')
                $('#telefono').val('')
                $('#cantidad').val('')
                $('#grabado').val('')
                var exito = $('#confirmacion');
    			exito.css('display', 'block');
            }
            
        });
   

    }

}
// });







</script>