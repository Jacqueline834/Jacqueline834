<?php
session_start();

if($_SESSION['usuario_log'] != 'logeado')
{
  header("Location:index.html");
  exit();
}
?>