<?php
class SessionController{
    private $session;

    public function  __construct(){
        $this->session=new UsuarioModel();
    }

    public function login($password){
        return $this->session->validate_user($password);
    }
    public function logout(){
            session_start();
            session_destroy();
            header('Location: ./');
    }
}
