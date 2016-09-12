<?php
session_start();
$_SESSION['validacion']=0;
?>
    <body>
   
        <div class="container">
        
        <div class="col-md-6 col-md-offset-3"> 
        <div class="jumbotron boxlogin">  

            <form name="frmLogin" id="frmLogin" action="" method="post" class="form-horizontal" role="form">
                               
                    <label>Usuario:</label>
                    
                    <input type="text" id="login" name="login" placeholder="login"/>
                    
                    <label>Contraseña:</label> 
                    
                    <input type="password" id="password" name="password"  />
                   
                               
                <input type="button" id="benviar"  name="benviar" value="Ingresar" class="btn btn-success"/>
                 
            </form>
            <div id="mensaje" class="alert">
                    <!--  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
                 </div>
            </div>
              
        </div>
      
        </div>
        
       <!--  <div class="col-lg-7">
            <h3>Usuarios</h3>
            <hr/>
        </div> -->
       

        
        
    </body>
