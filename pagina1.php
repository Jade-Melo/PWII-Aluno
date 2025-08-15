<?php
session_start();

//criação de uma sessão
$_SESSION['nome'] = "Jade Melo";

header("location:pagina2.php");