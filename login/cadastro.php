<?php

$login = $_POST['login'];
$senha = md5 ($_POST['senha']);
$connect = mysqli_connect('localhost', 'root', 'senac');
$db = mysqli_select_db($connect,'clientes');
$query_select = "SELECT login FROM usuarios WHERE login = 'login'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login'];

if($login == "" || $login == null){
    echo"<script language='javascript' type='text'/javascript>
    alert('O campo login deve ser preenchido');window.location.href=
    'cadastro.html'</script>";
}else {
    if($logarray == $login){
        echo"<script language='javascript' type='text'/javascript>
        alert('Este login já existe');window.location.href=
        'cadastro.html'</script>";
        die();
    }else {
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect,$query);

        if($insert){
            echo"<script language='javascript' type='text'/javascript>
            alert('Usuário cadastrado com sucesso');window.location.href=
            'cadastro.html'</script>";

        }else{
            echo"<script language='javascript' type='text'/javascript>
            alert('Não foi possível cadastar este usuário');window.location.href=
            'cadastro.html'</script>";

        }
    }

}
?>