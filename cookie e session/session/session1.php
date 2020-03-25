<?php

	session_start(); 

	if(!isset($_SESSION['password']) == true){
         
	unset($_SESSION['password']);
    header("Location: session.php");
}    
     
    echo "O usuario: ".$_SESSION['username']."<br/>";
    echo "Foi logado com êxito!"
?>