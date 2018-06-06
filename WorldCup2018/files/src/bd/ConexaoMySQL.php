<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Gutemberg
 */
class ConexaoMySQL {
    
    private $servidor;
    private $usuario;
    private $senha;
    private $bd;
    
    function __construct($servidor = "127.0.0.1", $usuario = "root", 
            $senha = "", $bd = "tabela_copa_do_mundo") {
        
        $this->setServidor($servidor);
        $this->setUsuario($usuario);
        $this->setSenha($senha);
        $this->setBd($bd);
        
        $mysqlConnect = mysql_connect($this->getServidor(), $this->getUsuario(),
                $this->getSenha());
        $mysqlSelectDb = mysql_select_db($this->getBd());
    }

    
    function getServidor() {
        return $this->servidor;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getBd() {
        return $this->bd;
    }

    function setServidor($servidor) {
        $this->servidor = $servidor;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setBd($bd) {
        $this->bd = $bd;
    }

}
