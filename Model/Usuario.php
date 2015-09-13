<?php

/**
 * Description of Usuario
 *
 * @author Rafael Carlos
 */

class Usuario {

    private $idUsuario;
    private $nome;
    private $email;
    private $telefone;
    private $concorrerInscricao;

    function __construct() {
        
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getConcorrerInscricao() {
        return $this->concorrerInscricao;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setConcorrerInscricao($concorrerInscricao) {
        $this->concorrerInscricao = $concorrerInscricao;
    }

}
