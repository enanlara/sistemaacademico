<?php

class LoginAdo extends DB {
    
    function Login() {
        global $db;

        return true;

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $senha = sha1($senha);
    
        $sql = "SELECT * FROM usuarios WHERE usua_email = ?   ";
        $resultado = $db->GetObject($sql, array($email));
        
        
        if($resultado->usua_senha == $senha){
            return TRUE;
        }  else {
            return FALSE;
        }
        
       
    }
    
}