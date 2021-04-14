<?php
	  
/******************************************************************
     Fonction permettant de se connecter à la BdD
******************************************************************/
function ConnectBase()
{
    $host = "127.0.0.1" ;
    $user = "root" ;
    $passwd = "" ;
    $base = "basetp" ;

    $connexion = new mysqli($host, $user,$passwd,$base);

    if (!$connexion){                
        return 0;
    }

    return $connexion;
}
?>