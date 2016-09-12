<?php
class UsuarioController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
        //Creamos el objeto usuario
        $usuario=new Usuario();
        
        //Conseguimos todos los usuarios
       $allusers=$usuario->getAll("id_usuario");
       
        //Cargamos la vista index y le pasamos valores
       $this->view("index",array(
          "allusers"=>$allusers,
         "Hola"    =>"Soy Víctor Robles"
      ));
    }
    
      
    


   

    public function salir(){
      session_destroy();
      $this->redirect('Usuario','index');
    }
    
    public function validar($dato1,$dato2){
           
            $usuario=new Usuario();
            $allusers=$usuario->getByDual("login",$dato1,"password",$dato2); 


            if(count($allusers)>0)
            {
              

              session_start();
              
              
              foreach($allusers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                  if ($user->id_rol==1)//rol administrador
                      $_SESSION['validacion']= 1;
                  else
                      $_SESSION['validacion']= 2;//usuario convencional
                  //$_session['pass']=$user->password;
               }


               return 1;
               
            }
            else
            {
              
              session_destroy();//sino se ecnuentra se destruye la session
              return 0;
               

               
            }
       
           
           
    }

   

}
?>