<?php
session_start(); 

$_SESSION['nome']=':<'; //essa variável é compartilhada numa sessão entre várias páginas diferentes
//no momento em que fechamos o navegador a sessão expira
//usamos a sessão para o login do usuário
echo $_SESSION['nome'];