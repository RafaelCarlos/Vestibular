<?php

include_once './Model/Usuario.php';
include_once './Dao/UsuarioDao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$confirma_inscricao = $_POST['condicao'];

$vrObj = new UsuarioDao();

$usuario = new Usuario();



$usuario->setNome($nome);
$usuario->setEmail($email);
$usuario->setConcorrerInscricao($confirma_inscricao);

$vrObj->inserir($usuario);
