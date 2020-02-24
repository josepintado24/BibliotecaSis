<?php
class Router{
    //public $route;
    public function __construct($route){

        $session_options= array(

        );

        if(!isset($_SESSION)){
            session_start($session_options);
        }

        if(!isset($_SESSION['ok'])){
            $_SESSION['ok']=false;
        }
        if($_SESSION['ok']){
           $route=isset($_GET['r']) ? $_GET['r'] : 'home';
           $controller =new ViewController();
           switch ($route){
                case 'home':

                    $controller->load_view('home');
                    break;
                case 'reserva':

                    $controller->load_view('reserva');
                    break;
                case 'asistencia':

                    $controller->load_view('asistencia');
                    break;
               case 'perfil':

                   $controller->load_view('perfil');
                   break;
                case 'salir':
                    $user_session= new SessionController();
                    $user_session->logout();
                    break;
                default:
                    $controller->load_view('error404');
                    break;
            }

        }else{
            if(!isset($_POST['pass'])){
                $login_form=new ViewController();
                $login_form->load_view('login');
            }else{
                $user_session=new SessionController();
                $session=$user_session->login($_POST['pass']);
                if (empty($session)){
                    $login_form=new ViewController();
                    $login_form->load_view('login');
                    header ('Location: ./?error=La contraseña es incorrecto');
                }else{
                    $_SESSION['ok']=true;
                    foreach ($session as $row){
                        $_SESSION['code_usuario']=$row['code_usuario'];
                        $_SESSION['nombre_usuario']=$row['nombre_usuario'];
                        $_SESSION['tipo_usuario']=$row['tipo_usuario'];
                        $_SESSION['estado_usuario']=$row['estado_usuario'];
                        $_SESSION['password']=$row['password'];
                    }
                    header ('Location:./');
                }
            }

        }
    }
}
