<?php

$login_cookie = $_COOKIE['login'];
if(isset($login_cookie)){
    echo"Bem-vindo, $login_cookie <br>";
    echo "Acesso permitido <color='red'>";
}else{
    echo "Bem-Vindo convidado <br>";
    echo "Acesso não permitido <color='red'>";
    echo "<br><a href='cadastro.html'>Faça login</a>";
}