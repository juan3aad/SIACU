jQuery(document).ready(function() {

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
                                                $('#tpnombre').val(valores[3]);
                                                $('#tsnombre').val(valores[4]);
                                                $('#tpapellido').val(valores[5]);
                                                $('#tsapellido').val(valores[6]);
                                                
                                                $('#tfechanac').val(valores[8]);
                                                $('#tsexo').val(valores[7]);
                                                $('#ttipodoc').val(valores[2]);
                                                $('#tdocumento').val(valores[1]);
                                                
                                                $('#tdepartamento').val(valores[9]);
                                                $('#tdepartamentoCod').val(valores[14]);
                                                cargar_municipios(valores[14]);
                                                $('#tmunicipio').val(valores[10]);
                                                $('#tmunicipioCod').val(valores[13]);
                                                $('#tdireccion').val(valores[12]);
                                                $('#ttelefono').val(valores[11]);
                                                //$('#temail').val(valores[2]);
                                               $('#badjuntar').attr("disabled", false);//habilitamos el bonton para adjuntar anexos
						//window.location="./index.php?controller=Tblcampo&action=index";
                                                mostrarArchivos1(valores[0].trim());
											
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
				  
					if(data==1){
						mostrarMensaje('Usuario Encontrado',true);
						window.location="./index.php?controller=Tblpersona&action=index2";
											
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

//---------------



//falta colocar lafuncion que valida cuando el formulario se cargo
if ($('#frmDepartamento').length) {//cuando se encuentre en el formulario de departamentos mostraria los paises	
     cargar_paises();
}
//------------------
if ($('#frmMunicipio').length) {//cuando se encuentre en el formulario de municipios mostraria los departamentos	
     cargar_departamentos();
}
//-----------------
if ($('#frmEmpresa').length) {//cuando se encuentre en el formulario de empresa mostraria los tipos de empresas	
     cargar_tipoEmpresas();
}
//-----------------
if ($('#frmModalidad').length) {//cuando se encuentre en el formulario de empresa mostraria los tipos de empresas	
     cargar_tipoEducacion();
}
//-----------------
if ($('#frmcargo').length) {//cuando se encuentre en el formulario de empresa mostraria los tipos de empresas	
     cargar_tipoCargo();
}
//-----------------
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
			alert("Error");
		}
		else
		{
			$('#id_departamento').append(resultado);			
		}
	});	
}


//--------------
function cargar_tipoEmpresas()
{
	$.get("T_Tipo_EmpresaAjax.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#id_tipo_empresa').append(resultado);			
		}
	});	
}
//____________________
function cargar_tipoEducacion()
{
	$.get("T_Tipo_EducacionAjax.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#id_tipo_educacion').append(resultado);			
		}
	});	

}
//____________________
function cargar_tipoCargo()
{
	$.get("T_Tipo_CargoAjax.php", function(resultado){
		if(resultado == false)
		{
			alert("Error");
		}
		else
		{
			$('#id_tipo_cargo').append(resultado);			
		}
	});		

}


function funcrestablecer()
{
    $('#badjuntar').attr("disabled", true);//deshabilitamos el bonton para adjuntar anexos
    $('#tidunica').val("");
    $('#tpnombre').val("");
    $('#tsnombre').val("");
    $('#tpapellido').val("");
    $('#tsapellido').val("");
                                                
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

});
