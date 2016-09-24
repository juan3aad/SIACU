jQuery(document).ready(function() {
    
    /*CUANDO SE REALIZA CLIC EN EL BOTON ACTUALIZAR AFILIADO CARGA UNA VENTA*/
    
     $('#beditarAfil').on('click', function(){
         
         //funcrestablecer();
              alert($('#beditarAfil').attr("name"));
                
               
         
         
     });
    
    /*LA SIGUIENTE CONDICION SE ENCARGA DE VERIFICAR SI EXISTE EL FORMULARIO frmlistaPerosna*/
    if ($('#frmlistaPersona').length) {
        verlistado(); 
    }
    
    //--FUNCION PARA VERIFICAR SI SE CARGO EL FORMULARIO
    if ($('#frmActualiza').length) {//verificando si existe el formulario departamento

    $('#badjuntar').attr("disabled", true);
    var marcaCampo="";
    $('#capaDatos').hide();
    $('#capaFechaNac').hide();
    $('#capaSexo').hide();
    $('#capaTipoDoc').hide();
    $('#capaDocumento').hide();
    $('#capaMunicipio').hide();
    $('#capaDireccion').hide();
    $('#capaTelefono').hide();
    $('#capaEmail').hide();
    $('#capaDepartamento').hide();

    cargar_departamentos();//funcion para cargar la lista de departamentos
    //cargar_mensajes();//funcion para cargar mensajes
    $("#sMunicipio").attr("disabled",true);
    }

    //-----Funcion para el datePiCker
    $( "#tmfechanac" ).datepicker({dateFormat: "yy-mm-dd",minDate: "-100Y -10M -30D", maxDate: "+0M -0D" ,  changeMonth: true, changeYear: true});
    //----------------------
    //VALIDANDO QUE SOLO PERMITA EL INGRESO DE NUMEROS
    $(".number").keydown(function (e) {
           // Permite: backspace, delete, tab, escape, enter and .
           if ($.inArray(e.keyCode, [8, 9, 27, 13]) !== -1 ||
               // Permite: Ctrl+A
               (e.keyCode == 65 && e.ctrlKey === true) ||
               // Permite: home, end, left, right
               (e.keyCode >= 35 && e.keyCode <= 39)) {
               // solo permitir lo que no este dentro de estas condiciones es un return false
               return;
           }
           // Aseguramos que son numeros
           if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
               e.preventDefault();
           }
       });
      $(".letras").keypress(function (key) {
            window.console.log(key.charCode)
            if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
                && (key.charCode < 65 || key.charCode > 90) //letras minusculas
                && (key.charCode != 45) //retroceso
                && (key.charCode != 241) //ñ
                 && (key.charCode != 209) //Ñ
                 && (key.charCode != 32) //espacio
                 && (key.charCode != 225) //á
                 && (key.charCode != 233) //é
                 && (key.charCode != 237) //í
                 && (key.charCode != 243) //ó
                 && (key.charCode != 250) //ú
                 && (key.charCode != 193) //Á
                 && (key.charCode != 201) //É
                 && (key.charCode != 205) //Í
                 && (key.charCode != 211) //Ó
                 && (key.charCode != 218) //Ú
 
                )
                return false;
        });

    //---------------------------------------------------
    //---------------------------------------------------
    //---------------------------//Boton que se encarga de realizar la busqueda
        $('#bbuscar').on('click', function(){
	 	//funcrestablecer();
              
                
                if($('#Stipo').val()!="")
                {
                    if($('#tdato').val()!="")
                    {
                       $("#mensaje").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                       
                       var url = "TblpersonaAjax.php"; // El script a dónde se realizará la petición.
			var dataString = $('#frmActualiza').serialize();
                        //alert("Datos"+dataString);    
                       var valores = new Array();
			$.ajax({
			   type: "POST",
			   url: url,
			   data: dataString , // Adjuntar los campos del formulario enviado.
			   error: function(){
			   		mostrarMensaje('Error inesperado al validar crendenciales',false);
			   },
			   success: function(data)
			   {
                              
				  //alert("Hola"+data);
					if(data!=="" && data!=0){
						mostrarMensaje('Usuario registrado',true);
                                                //mostrarMensaje(data,true);
                                               
                                               valores=data.split(",");//pasa la cadena a un arreglo separada por el caracter 
                                                
                                                
                                                $('#tidunica').val(valores[0]);
                                                $('#tpnombre').val(valores[1]);
                                                $('#tsnombre').val(valores[2]);
                                                $('#tpapellido').val(valores[3]);
                                                $('#tsapellido').val(valores[4]);
                                                 
                                                
                                                $('#tfechanac').val(valores[5]);
                                                $('#tsexo').val(valores[6]);
                                                $('#ttipodoc').val(valores[7]);
                                                $('#tdocumento').val(valores[8]);
                                                $('#testadocivil').val(valores[9]);
                                                
                                                $('#tdepartamento').val(valores[10]);
                                                $('#tdepartamentoCod').val(valores[11]);
                                                //cargar_municipios(valores[14]);
                                                
                                                $('#tmunicipio').val(valores[12]);
                                                $('#tmunicipioCod').val(valores[13]);
                                                $('#tdireccion').val(valores[14]);
                                                $('#ttelefono').val(valores[15]);
                                                $('#tcelular').val(valores[16]);
                                                $('#temail').val(valores[17]);
                                                
                                               $('#badjuntar').attr("disabled", false);//habilitamos el bonton para adjuntar anexos
						//window.location="./index.php?controller=Tblcampo&action=index";
                                                //mostrarArchivos1(valores[0].trim());
											
					}
					else{
                                                $('#badjuntar').attr("disabled", true);//deshabilitamos el bonton para adjuntar anexos
						// DIRECCIONAR PAGINA DE ERROR
                                                //$("#myModal2").modal("show");
                                               var alert = alertify.alert("<h4 class='modal-title' style='color: firebrick'><span class='glyphicon glyphicon-warning-sign'>  Alerta</span></h4>","<strong>Afiliado</strong> en estado retirado por translado a otra EPS o en estado inactivo.</p><p> PARA MAYOR INFORMACIÓN COMUNÍQUESE CON EL CALL CENTER DE EMSSANAR EN PASTO TEL. (2) 7336889 Y EN CALI TEL. (2) 3850212. LÍNEA NACIONAL 01-8000-129393.</p>").set('label', 'Aceptar');     	 
                                               alert.set({transition:'flipx'}); //slide, zoom, flipx, flipy, fade, pulse (default)
                                               alert.set('modal', false);  //al pulsar fuera del dialog se cierra o no	
                                               funcrestablecer();
                                               mostrarMensaje('Error afiliado no registrado',false);
                                        	
					}
                                        
			   }
			 });
                       
                       
                    }
                    else
                    {
                       //funcrestablecer();
                       mostrarMensaje('Ingrese el valor a buscar',false);
                        
                    }
                }
                else
                {
                   //funcrestablecer();
                   mostrarMensaje('Debe seleccionar el tipo de busqueda',false);
                    
                    
                }


	 });


	
    
    
    
    //-----------------------------------------------------
    //-----------------------------------------------------
    $('#benviar').on('click', function(){
	 	
	 	
	 	var nombre1 =$('#login').val();
	 

	 	if(nombre1 != ""){
			
			var resultado;
			var url = "usuarioAjax.php"; // El script a dónde se realizará la petición.
			var dataString = $('#frmLogin').serialize();

                        	 
			$.ajax({
			   type: "POST",
			   url: url,
			   data: dataString , // Adjuntar los campos del formulario enviado.
			   error: function(){
			   		mostrarMensaje('Error inesperado al validar crendenciales',false);
                                       
			   },
			   success: function(data)
			   {
				  
					if(data==1){
						mostrarMensaje('Usuario Encontrado',true);
						window.location="./index.php?controller=Tblpersona&action=index";
											
					}
					else{
						// DIRECCIONAR PAGINA DE ERROR
						mostrarMensaje('Error usuario no registrado',false);
						
					}
			   }
			 });
			
		}
		else
		{
			mostrarMensaje('Favor ingresar usuario y contraseña ',false)
		}


	 });





 function mostrarMensaje(mensaje, ok){
                $("#mensaje").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#mensaje").addClass('alert-success');
                }else{
                    $("#mensaje").addClass('alert-danger');
                }
            }




//---------------
$('#benviar1').on('click', function(){   

	alert("loco");
	cargar_motivos();

	 }); 

//------------BOTONES PARA EL CAMBIO DE MENSAJE EN LA VENTANA MODAL
   $('#bCancelarActualizacion').on('click', function(){
         funcrestablecer();

     });
     //----------
     $('#bCancelarActualizacion1').on('click', function(){
         funcrestablecer();

     });

    //Cuando se realiza clic desde la ventana modal
    $('#bguardarModal1').on('click', function(){
      /*
        Este codigo que se comento permite adicionar campos de texto
          var MaxInputs       = 2; //Número Maximo de Campos
          var contenedor       = $("#contenedor2"); //ID del contenedor
          //var AddButton       = $("#agregarCampo"); //ID del Botón Agregar

         //var x = número de campos existentes en el contenedor
          var x = $("#contenedor2 div").length + 1;
          var FieldCount = x-1; //para el seguimiento de los campos

        */


       var letra= $('#tnumcontrol').val();
       var val1;
       if ($('#tdocumento').val() !="")
       {
       switch(letra)
        {
            case '1':
                //alert("Ralizo clic en el control 1");
                val1=validarVacios($('#tdatosp').val());
                if(val1!=0)
                {
                /*
                 * Codigo para adicionar cajas de texto
                if(x <= MaxInputs) //max input box allowed
                {
                    FieldCount++;
                    //agregar campo
                    $(contenedor2).append('<div><input type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'" value='+$('#tpnombre').val()+'><input type="text" name="mitexto2[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'" value='+$('#tdatosp').val()+'><a href="#" class="eliminar">&times;</a></div>');

                    x++; //text box increment
                }*/
                marcaCampo=marcaCampo+"1,";

                $('#tmarca').val(marcaCampo);
                $('#tpnombreAnt').val($('#tpnombre').val());
                $('#tpnombre').val($('#tdatosp').val().toUpperCase());
                //--------------------
                $('#tpnombre').removeClass('alert-success').removeClass('alert-danger');
                $("#tpnombre").addClass('alert-danger');
                //------------
                $('#beditar1').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar1").addClass('btn-warning');



                }
                break;

            case '2':
                //alert("Ralizo clic en el control 2");
                /*
                 * Adiciona cajas de texto
                if(x <= MaxInputs) //max input box allowed
                {
                    FieldCount++;
                    //agregar campo
                    $(contenedor2).append('<div><input type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'" value='+$('#tsnombre').val()+'><input type="text" name="mitexto2[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'" value='+$('#tdatosp').val()+'><a href="#" class="eliminar">&times;</a></div>');

                    x++; //text box increment
                }*/
                marcaCampo=marcaCampo+"2,";

                $('#tmarca').val(marcaCampo);
                $('#tsnombreAnt').val($('#tsnombre').val());
                $('#tsnombre').val($('#tdatosp').val().toUpperCase());
                //-------------------------------------
                $('#tsnombre').removeClass('alert-success').removeClass('alert-danger');
                $("#tsnombre").addClass('alert-danger');
                //------------
                $('#beditar2').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar2").addClass('btn-warning');
                break;

            case '3':
                val1=validarVacios($('#tdatosp').val());
                if(val1!=0)
                {
                /*
                 * Adiciona caja de texto
                if(x <= MaxInputs) //max input box allowed
                {
                    FieldCount++;
                    //agregar campo
                    $(contenedor2).append('<div><input type="text" name="mitexto[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'" value='+$('#tpapellido').val()+'><input type="text" name="mitexto2[]" id="campo_'+ FieldCount +'" placeholder="Texto '+ FieldCount +'" value='+$('#tdatosp').val()+'><a href="#" class="eliminar">&times;</a></div>');

                    x++; //text box increment
                }
                */
                marcaCampo=marcaCampo+"3,";
                $('#tmarca').val(marcaCampo);
                //alert("Ralizo clic en el control 3");
                $('#tpapellidoAnt').val($('#tpapellido').val());
                $('#tpapellido').val($('#tdatosp').val().toUpperCase());
                //-------------------------------------
                $('#tpapellido').removeClass('alert-success').removeClass('alert-danger');
                $("#tpapellido").addClass('alert-danger');
                //------------
                $('#beditar3').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar3").addClass('btn-warning');
                }

                break;

            case '4':
                val1=validarVacios($('#tdatosp').val());
                if(val1!=0)
                {
                marcaCampo=marcaCampo+"4,";
                //alert("Ralizo clic en el control 4");
                $('#tsapellidoAnt').val($('#tsapellido').val());
                $('#tsapellido').val($('#tdatosp').val().toUpperCase());
                //--------------------
                $('#tsapellido').removeClass('alert-success').removeClass('alert-danger');
                $("#tsapellido").addClass('alert-danger');
                //------------
                $('#beditar4').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar4").addClass('btn-warning');
                }
                break;

            case '5':
                val1=validarVacios($('#tmfechanac').val());
                if(val1!=0)
                {
                marcaCampo=marcaCampo+"5,";
                //alert("Ralizo clic en el control 5");
                $('#tfechanacAnt').val($('#tfechanac').val());
                $('#tfechanac').val($('#tmfechanac').val());
                //--------------------
                $('#tfechanac').removeClass('alert-success').removeClass('alert-danger');
                $("#tfechanac").addClass('alert-danger');
                //------------
                $('#beditar5').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar5").addClass('btn-warning');
                }
                break;

            case '6':
                //alert("Ralizo clic en el control 6");
                marcaCampo=marcaCampo+"6,";
                $('#tsexoAnt').val($("#tsexo").val());
                $('#tsexo').val($("#sSexo option:selected").val());
                //--------------------
                $('#tsexo').removeClass('alert-success').removeClass('alert-danger');
                $("#tsexo").addClass('alert-danger');
                //------------
                $('#beditar6').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar6").addClass('btn-warning');

                break;

            case '7':
                marcaCampo=marcaCampo+"7,";
                //alert("Ralizo clic en el control 7");
                $('#ttipodocAnt').val($('#ttipodoc').val());
                $('#ttipodoc').val($("#sTipoDoc option:selected").val());

                //--------------------
                $('#ttipodoc').removeClass('alert-success').removeClass('alert-danger');
                $("#ttipodoc").addClass('alert-danger');
                //------------
                $('#beditar7').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar7").addClass('btn-warning');
                break;

            case '8':

                val1=validarVacios($('#tmdocumento').val());
                if(val1!=0)
                {
                marcaCampo=marcaCampo+"8,";
                //alert("Ralizo clic en el control 8");
                $('#tdocumentoAnt').val($('#tdocumento').val());
                $('#tdocumento').val($('#tmdocumento').val());
                //--------------------
                $('#tdocumento').removeClass('alert-success').removeClass('alert-danger');
                $("#tdocumento").addClass('alert-danger');
                //------------
                $('#beditar8').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar8").addClass('btn-warning');
                }

                break;

            case '9':
                val1=validarVacios($('#sMunicipio').val());
                if(val1!=0)
                {
                marcaCampo=marcaCampo+"9,";
                //alert("Ralizo clic en el control 9");
                $('#tmunicipioAnt').val($('#tmunicipioCod').val());
                $('#tmunicipio').val($("#sMunicipio option:selected").text());
                $('#tmunicipioCod').val($("#sMunicipio option:selected").val());
               //--------------------
                $('#tmunicipio').removeClass('alert-success').removeClass('alert-danger');
                $("#tmunicipio").addClass('alert-danger');
                //------------
                $('#beditar9').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar9").addClass('btn-warning');
                }
                break;

            case '10':
                val1=validarVacios($('#tmdireccion').val());
                if(val1!=0)
                {
                marcaCampo=marcaCampo+"10,";
                //alert("Ralizo clic en el control 10");
                $('#tdireccionAnt').val($('#tdireccion').val());
                $('#tdireccion').val($('#tmdireccion').val());
                //--------------------
                $('#tdireccion').removeClass('alert-success').removeClass('alert-danger');
                $("#tdireccion").addClass('alert-danger');
                //------------
                $('#beditar10').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar10").addClass('btn-warning');
                }
                break;

            case '11':
               // val1=validarVacios($('#tmtelefono').val());
                //if(val1!=0)
                //{
                     if(EsTelefonoFijo($('#tmtelefono').val()))
                    {
                        marcaCampo=marcaCampo+"11,";
                        //alert("Ralizo clic en el control 11");
                        $('#ttelefonoAnt').val($('#ttelefono').val());
                        $('#ttelefono').val($('#tmtelefono').val());
                        //--------------------
                        $('#ttelefono').removeClass('alert-success').removeClass('alert-danger');
                        $("#ttelefono").addClass('alert-danger');
                        //------------
                        $('#beditar11').removeClass('btn-primary').removeClass('btn-warning');
                        $("#beditar11").addClass('btn-warning');
                    }
                    else
                    {
                        alert('No cumple con el formato de un telefono fijo [7201700]');
                    }
                //}
                break;

            case '12':
                val1=validarVacios($('#tmemail').val());
                if(val1!=0)
                {

                    if(EsEmail($('#tmemail').val()))
                    {
                        marcaCampo=marcaCampo+"12,";
                        //alert("Ralizo clic en el control 12");
                        $('#temailAnt').val($('#temail').val());
                        $('#temail').val($('#tmemail').val());
                        //--------------------
                        $('#temail').removeClass('alert-success').removeClass('alert-danger');
                        $("#temail").addClass('alert-danger');
                        //------------
                        $('#beditar12').removeClass('btn-primary').removeClass('btn-warning');
                        $("#beditar12").addClass('btn-warning');
                    }
                    else
                    {
                        alert('Formato de Email es incorrecto [cuenta@correo.com]');
                    }
                }
                break;

            case '13':
                //val1=validarVacios($('#tmcelular').val());
                //if(val1!=0)
                //{
                    if(EsTelefonoMovil($('#tmcelular').val()))
                    {
                        marcaCampo=marcaCampo+"13,";
                        //alert("Ralizo clic en el control 12");
                        $('#tcelularAnt').val($('#tcelular').val());
                        $('#tcelular').val($('#tmcelular').val());

                        //--------------------
                        $('#tcelular').removeClass('alert-success').removeClass('alert-danger');
                        $("#tcelular").addClass('alert-danger');
                        //------------
                        $('#beditar13').removeClass('btn-primary').removeClass('btn-warning');
                        $("#beditar13").addClass('btn-warning');

                    }
                    else
                    {
                        alert("No cumple con el formato del celular [311XXXXXXX]");

                    }
                //}
                break;

                case '14':
                val1=validarVacios($('#sDepartamento').val());
                if(val1!=0)
                {
                marcaCampo=marcaCampo+"14,";

                //alert("Ralizo clic en el control 14");
                $('#tdepartamentoAnt').val($('#tdepartamentoCod').val());
                $('#tdepartamento').val($("#sDepartamento option:selected").text());
                $('#tdepartamentoCod').val($("#sDepartamento option:selected").val());
               //--------------------
                $('#tdepartamento').removeClass('alert-success').removeClass('alert-danger');
                $("#tdepartamento").addClass('alert-danger');
                //------------
                $('#beditar14').removeClass('btn-primary').removeClass('btn-warning');
                $("#beditar14").addClass('btn-warning');

                $('#tmunicipio').val('');

                }
                break;

        }//fin switch
    }

    });

    //------------------------------
    //--ACTUALIZA CAJA DE TEXTO
    //--ACTUALIZANDO PRIMER NOMBRE
     $('#beditar1').on('click', function(){
          /*
          if($('#tpnombre').is(':disabled'))
          {
            $('#tpnombre').removeAttr('disabled');
          }
          else
          {
              $('#tpnombre').attr('disabled','-1')
          }*/
          $('#tnumcontrol').val("1");
          mostrarCapa('1');
          $('#tdatosp').val($('#tpnombre').val());




         cambiaHeadModal('Cambiar primer nombre');//para cambiar el titulo


     });
      //--ACTUALIZANDO SEGUNDO NOMBRE
     $('#beditar2').on('click', function(){
           $('#tnumcontrol').val("2");
          //PARA MOSTRAR CAPAS
          mostrarCapa('1');
          //--------------------
          $('#tdatosp').val($('#tsnombre').val());


          cambiaHeadModal('Cambiar segundo nombre');


     });
         //--ACTUALIZANDO Primer Apellido
     $('#beditar3').on('click', function(){
          $('#tnumcontrol').val("3");
          mostrarCapa('1');
          //--------------------
          $('#tdatosp').val($('#tpapellido').val());


          cambiaHeadModal('Cambiar Primer Apellido');

     });
          //--ACTUALIZANDO Segundo Apellido
     $('#beditar4').on('click', function(){
         $('#tnumcontrol').val("4");
         mostrarCapa('1');
         $('#tdatosp').val($('#tsapellido').val());

          cambiaHeadModal('Cambiar Segundo Apellido');


     });

     //ACTUALIZACION DEL SEGUNDO BLOQUE
     //--ACTUALIZANDO FECHA DE NACIMIENTO
     $('#beditar5').on('click', function(){
         $('#tnumcontrol').val("5");
         mostrarCapa('5');
         $('#tmfechanac').val($('#dfechanac').val());


          cambiaHeadModal('Cambiar Fecha de Nacimiento');


     });
        //--ACTUALIZANDO SEXO
     $('#beditar6').on('click', function(){
         $('#tnumcontrol').val("6");
         mostrarCapa('6');
         //$('#tmfechanac').val($('#dfechanac').val());
         //--------------------


          cambiaHeadModal('Cambiar Sexo');


     });
        //--ACTUALIZANDO TIPO DE DOCUMENTO
     $('#beditar7').on('click', function(){
         $('#tnumcontrol').val("7");
         mostrarCapa('7');
         //$('#tmfechanac').val($('#dfechanac').val());
         //--------------------
          cambiaHeadModal('Cambiar Tipo de Documento');


     });
        //--ACTUALIZANDO DOCUMENTO
     $('#beditar8').on('click', function(){
         $('#tnumcontrol').val("8");
         mostrarCapa('8');
         $('#tmdocumento').val($('#tdocumento').val());
         //--------------------
          cambiaHeadModal('Cambiar Documento');


     });

         //--ACTUALIZANDO MUNICIPIO
     $('#beditar9').on('click', function(){
         $('#tnumcontrol').val("9");
         mostrarCapa('9');
         //$('#tmunicipio').val($('#sMunicipio').val());
         //--------------------
          cambiaHeadModal('Actualizando Municipio');

     });

          //--ACTUALIZANDO DIRECCION
     $('#beditar10').on('click', function(){
         $('#tnumcontrol').val("10");
         mostrarCapa('10');
         $('#tmdireccion').val($('#tdireccion').val());
         //--------------------
          cambiaHeadModal('Actualizando Dirección');

     });

           //--ACTUALIZANDO TELEFONO
     $('#beditar11').on('click', function(){
         $('#tnumcontrol').val("11");
         mostrarCapa('11');
         $('#tmtelefono').val($('#ttelefono').val());
         //--------------------
          cambiaHeadModal('Actualizando Telefono');

     });
         //--ACTUALIZANDO EMAIL
     $('#beditar12').on('click', function(){
         $('#tnumcontrol').val("12");
         mostrarCapa('12');
         $('#tmemail').val($('#temail').val());
         //--------------------
          cambiaHeadModal('Actualizando Email');

     });
     //--ACTUALIZANDO CELULAR
     $('#beditar13').on('click', function(){
         $('#tnumcontrol').val("13");
         mostrarCapa('13');
         $('#tmcelular').val($('#tcelular').val());
         //--------------------
          cambiaHeadModal('Actualizando Celular');

     });

     //--Actualizando DEPARTAMENTO
     $('#beditar14').on('click', function(){
         $('#tnumcontrol').val("14");
         mostrarCapa('14');
         //$('#tmunicipio').val($('#sMunicipio').val());
         //--------------------
          cambiaHeadModal('Actualizando Departamento');

     });

//-----------------
$("#sDepartamento").change(function(){

    cargar_municipios($("#sDepartamento").val());
    alert('Favor Cambiar Municipio');



}); //cuando se realiza el cambio en un departamento se actualiza la lista de municipios

//---------------

//falta colocar lafuncion que valida cuando el formulario se cargo
if ($('#frmDepartamento').length) {//cuando se encuentre en el formulario de departamentos mostraria los paises	
     cargar_paises();
}
//------------------
if ($('#frmMunicipio').length) {//cuando se encuentre en el formulario de municipios mostraria los departamentos	
     cargar_departamentos();
}

function cargar_motivos()
{
	alert("Cargar Motivos");
	
	$.get("MotivoAjax.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#secMotivo').append(resultado);			
		}
	});	
}
//-------------
function cargar_paises()
{
	
	
	$.get("PaisAjax.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#id_pais').append(resultado);			
		}
	});	
}

//-------------
function cargar_departamentos()
{


	$.get("DepartamentoAjax.php", function(resultado){
		if(resultado == false)
		{
			alert("Error3");
		}
		else
		{
			$('#sDepartamento').append(resultado);
		}
	});
     
}
//--------------------
//-----------------
function cargar_municipios(valor1)
{
	//alert("cargando municipios"+$("#sDepartamento").val());
	//var code = $("#sDepartamento").val();
        var code = valor1;

	$.get("MunicipioAjax.php?", { code: code },
		function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$("#sMunicipio").attr("disabled",false);
			document.getElementById("sMunicipio").options.length=1;
			$('#sMunicipio').append(resultado);
		}
	});

}
//--------------------
//---FUNCION PARA VISUALIZAR EL LISTADO PAGINADO DE AFILIADOS
function verlistado(){ //FUNCION PARA MOSTRAR EL LISTADO EN EL INDEX POR JQUERY
              var randomnumber=Math.random()*11;
            $.post("./index.php?controller=Tblpersona&action=index2", {
                randomnumber:randomnumber
            }/*, function(data){
              $("#contenido").html(data);
            }*/
             );
            
            //----------------
            $('#tabla_listaPersonas').dataTable( { //CONVERTIMOS NUESTRO LISTADO DE LA FORMA DEL JQUERY.DATATABLES- PASAMOS EL ID DE LA TABLA
                "sPaginationType": "full_numbers" //DAMOS FORMATO A LA PAGINACION(NUMEROS)
             } );
        
            //debugger;
            
            }

//--------------
//----FUNCION PARA RESTABLECER LOS CONTROLES DE LOS FORMULARIOS
function funcrestablecer()
{
    $('#badjuntar').attr("disabled", true);//deshabilitamos el bonton para adjuntar anexos
    $('#tidunica').val("");
    $('#tpnombre').val("");
    $('#tsnombre').val("");
    $('#tpapellido').val("");
    $('#tsapellido').val("");
    $('#testadocivil').val("")
    
                                                
    $('#tfechanac').val("");
    $('#tsexo').val("");
    $('#ttipodoc').val("");
    $('#tdocumento').val("");
                                                
    $('#departamento').val("");
    $('#departamentoCod').val("");
    $('#tmunicipio').val("");
    $('#tmunicipioCod').val("");
    $('#tdireccion').val("");
    $('#ttelefono').val("");
    $('#tcelular').val("");
    $('#temail').val("");
    marcaCampo="";
    $('#tnumcontrol').val("");
    
    
    //------------
    //$('#tdatosp').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
    
    //_______________
    $('#beditar1').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar1").addClass('btn-primary');
    
    $('#beditar2').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar2").addClass('btn-primary');
    
    $('#beditar3').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar3").addClass('btn-primary');
    
    $('#beditar4').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar4").addClass('btn-primary');
    
    $('#beditar5').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar5").addClass('btn-primary');
    
    $('#beditar6').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar6").addClass('btn-primary');
    
    $('#beditar7').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar7").addClass('btn-primary');
    
    $('#beditar8').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar8").addClass('btn-primary');
    
    $('#beditar9').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar9").addClass('btn-primary');
    
    $('#beditar10').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar10").addClass('btn-primary');
    
    $('#beditar11').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar11").addClass('btn-primary');
    
    $('#beditar12').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar12").addClass('btn-primary');
    
    $('#beditar13').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar13").addClass('btn-primary');
    
    $('#beditar14').removeClass('btn-primary').removeClass('btn-warning');
    $("#beditar14").addClass('btn-primary');
    
    $("#mensaje").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
    
    
}

//------FUNCION PARA VALIDAR SI EL NUMERO TELEFONICO ES VALIDO
function EsTelefonoFijo(tel) {
				var test = /^[7]\d{6}$/;
				var telReg = new RegExp(test);
				return telReg.test(tel);
			}
//------FUNCION PARA VALIDAR SI EL NUMERO CELULAR ES VALIDO
function EsTelefonoMovil(tel) {

				var test = /^[3]\d{9}$/;
				var telReg = new RegExp(test);
				return telReg.test(tel);
			}
//------FUNCION PARA VALIDAR SI EL EMAIL ES VALIDO
function EsEmail(w_email) {

	var test = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var emailReg = new RegExp(test);

	return emailReg.test(w_email);
}

//------FUNCION PARA CAMBIAR EL TITULO DE LA MODAL
function cambiaHeadModal(titulo){
                $("#TituloModal").removeClass('alert-success').removeClass('alert-danger').html(titulo);

            }
 //---------------------
 //------FUNCION PARA MOSTRAR Y OCULTAR CAPAS DE LAS VENTANAS MODALES
function mostrarCapa(capa)
{
    switch(capa)
    {
        case '1'://mostrar capa de datos
            $('#capaDatos').show();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '5'://mostrar capa de fechaNac
            $('#capaDatos').hide();
            $('#capaFechaNac').show();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '6'://mostrar capa de Sexo
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').show();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '7'://mostrar capa Tipo de documento
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').show();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '8'://mostrar capa de Documento
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').show();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '9'://mostrar capa Municipio
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').show();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '10'://mostrar capa Dirección
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').show();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '11'://mostrar capa Telefono
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').show();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '12'://mostrar capa Email
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').show();
            $('#capaCelular').hide();
            $('#capaDepartamento').hide();
            break;
        case '13'://mostrar capa Celular
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').show();
            $('#capaDepartamento').hide();
            break;

        case '14'://mostrar capa Departamento
            $('#capaDatos').hide();
            $('#capaFechaNac').hide();
            $('#capaSexo').hide();
            $('#capaTipoDoc').hide();
            $('#capaDocumento').hide();
            $('#capaMunicipio').hide();
            $('#capaDireccion').hide();
            $('#capaTelefono').hide();
            $('#capaEmail').hide();
            $('#capaCelular').hide();
            $('#capaDepartamento').show();
            break;
    }
}
//------FUNCION PARA MOSTRAR LOS MENSAJES DE ALERTA EN EL DIV
function mostrarMensaje(mensaje, ok){
                $("#mensaje").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#mensaje").addClass('alert-success');
                }else{
                    $("#mensaje").addClass('alert-danger');
                }
            }
//------FUNCION PARA MOSTRAR LOS MENSAJES DE ALERTA EN LOS DIV
function mostrarMensaje2(mensaje, ok){
                $("#mensajeAlert").removeClass('alert-success').removeClass('alert-danger').html(mensaje);
                if(ok){
                    $("#mensajeAlert").addClass('alert-success');
                }else{
                    $("#mensajeAlert").addClass('alert-danger');
                }
            }

    
    //------FUNCION PARA VALIDAR LOS VALORES VACIOS  
function validarVacios(vdato)
{
    if (vdato=="" || vdato=="0")
    {
         return 0;
    }
    else
    {
        return 1;
    }
}


//-----------FUNCION PARA CON¿FIRMAR QUE LOS DATOS SE VAN ACTUALIZAR

$('#bguardarActualizacion').on('click', function(){
		
    
    
         //alert("Datos Ingresas");
                $('#tmarca').val(marcaCampo);
	 	//alert("CAMPO"+marcaCampo);
	 	var idunica =$('#tidunica').val();
                //alert("idunica"+idunica);


	 	if(idunica != "" && marcaCampo!=""){

                    var confirm= alertify.confirm('Apreciado Usuario','Desea confirmar la actualización?',null,null).set('labels', {ok:'Actualizar', cancel:'Cancelar'});

                    confirm.set({transition:'slide'});  //Efecto de la ventana de confirmación

                    confirm.set('onok', function(){ //callbak al pulsar botón positivo
                    alertify.success('Actualizando Información');


			var resultado;
			var url = "actualizaAjax.php"; // El script a dónde se realizará la petición.
			var dataString = $('#frmActualiza').serialize();

                        //alert("datos"+dataString);
                        //mostrarMensaje(dataString,true);
                        debugger;
			$.ajax({
			   type: "POST",
			   url: url,
			   data: dataString , // Adjuntar los campos del formulario enviado.
			   error: function(){
			   		mostrarMensaje('Error inesperado al validar crendenciales',false);
			   },
			   success: function(data)
			   {
				  //alert(data);
                                  // mostrarMensaje(data,true);
					if(data==0){
						//mostrarMensaje(data,true);
						//window.location="./index.php?controller=T_Empresa&action=index";
                                                mostrarMensaje('Registro actualizado con exito',true);
                                                // mostrarMensaje(data,true);
                                                //funcrestablecer();

					}
					else{
						// DIRECCIONAR PAGINA DE ERROR
						mostrarMensaje("Error al actualizar el registro",false);

					}
			   }
			 });

                 });
                 confirm.set('oncancel', function(){ //callbak al pulsar botón negativo
                    alertify.error('Actualización Cancelada');
                });

		}
		else
		{
                        alertify.alert("<h3 class='modal-title' style='color: #D6D316'><span class='glyphicon glyphicon-warning-sign'>  Alerta</span></h3>","<strong>No se existe información para actualizar.</strong>", function(){
                        alertify.message('No se edito ningún dato');
                        });
			mostrarMensaje('No existe información para actualizar',false)

                        /*
                        var alert = alertify.alert("<h4 class='modal-title' style='color: firebrick'><span class='glyphicon glyphicon-warning-sign'>  Alerta</span></h4>","<strong>Afiliado</strong> en estado retirado por translado a otra EPS o en estado inactivo.</p><p> PARA MAYOR INFORMACIÓN COMUNÍQUESE CON EL CALL CENTER DE EMSSANAR EN PASTO TEL. (2) 7336889 Y EN CALI TEL. (2) 3850212. LÍNEA NACIONAL 01-8000-129393.</p>").set('label', 'Aceptar');
                        alert.set({transition:'flipx'}); //slide, zoom, flipx, flipy, fade, pulse (default)
                        alert.set('modal', false);  //al pulsar fuera del dialog se cierra o no	*/
		}





	 });


            

});
