<?php 

session_destroy();

if(isset($_SESSION['name'])){
    echo "Sessão existe, está em nome de: " . ' ' . $_SESSION['name'];
}else{
    echo "Sessão não existe";
}
