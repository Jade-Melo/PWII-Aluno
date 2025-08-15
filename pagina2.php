<?php
session_start();

if( isset($_SESSION['nome'])){
    $nome = $_SESSION['nome'];
    echo "<h1>Oi $nome, bem vinda!";
}else{
    echo "<h1>Que pena, você não está logado!!";
}