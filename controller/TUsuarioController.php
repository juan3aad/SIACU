  <?php

  class TUsuarioController extends ControladorBase{



    public function index2(){
        
        //Creamos el objeto usuario
        $usuario=new Usuario();
        
        //Conseguimos todos los usuarios
       $allusers=$usuario->getAll("id_usuario");
       
        //Cargamos la vista index y le pasamos valores
       $this->view("TUsuario",array(
          "allusers"=>$allusers,
         "Hola"    =>"Soy Víctor Robles"
      ));
    }

     public function crear(){
        if(isset($_POST["login"])){
            
            //Creamos un usuario
            $usuario=new Usuario();
            $usuario->setId_persona($_POST["id_persona"]);
            $usuario->setLogin($_POST["login"]);
            $usuario->setPassword(sha1($_POST["password"]));
            $usuario->setActivo($_POST["estado"]);
            $usuario->setId_rol($_POST["id_rol"]);
            
            $save=$usuario->save();
        }
        $this->redirect("TUsuario", "index2");
    }
    
    public function borrar(){
        if(isset($_GET["id"])){ 
            $id=(int)$_GET["id"];
            
            $usuario=new Usuario();
            $usuario->deleteByIdEsp("id_usuario",$id); 
        }
       $this->redirect("TUsuario", "index2");
    }
    
    
    public function hola(){
        $usuarios=new UsuariosModel();
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }


  }
    ?>