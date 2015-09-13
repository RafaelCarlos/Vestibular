<?php

include_once '../Conexao/Conexao.php';
include_once '../Model/Usuario.php';

class UsuarioDao {

    public static $instance;
    
    function __construct() {
        
    }

        public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new UsuarioDao();
        return self::$instance;
    }

    public function getNextID() {
        try {
            $sql = "SELECT Auto_increment FROM 
information_schema.tables WHERE table_name='usuario'";
            $result = Conexao::getInstance()->query($sql);
            $final_result = $result->fetch(PDO::FETCH_ASSOC);
            return $final_result['Auto_increment'];
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar 
esta ação, foi gerado um LOG do mesmo, tente novamente mais 
tarde.";
        }
    }

    public function inserir(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario ( 
                    nome,
                    email,
                    concorrer_inscricao)
                    VALUES (
                    :nome,
                    :email,
                    :concorrer_inscricao)";

            //$stmt =  $con = new PDO("mysql:host=localhost;dbname=dbVestibular", "root", "");
//            $p_sql = Conexao::getInstance()->pre
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":concorrer_inscricao", $usuario->getConcorrerInscricao());

            return $p_sql->execute();
//            header('location:sucesso.php');
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }

}
