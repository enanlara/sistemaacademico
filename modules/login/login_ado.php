<?php

class LoginAdo extends DB {
    
    function Login() {
        global $DB;


        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $senha = sha1($senha);
    
        $sql = "SELECT * FROM usuarios WHERE usua_email = ?   ";
        $resultado = $DB->GetObject($sql, array($email));
        
        
        if($resultado->usua_senha == $senha){
            return TRUE;
        }  else {
            return FALSE;
        }
        
       
    }
    
}