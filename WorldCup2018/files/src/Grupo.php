<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Grupo
 *
 * @author Gutemberg
 */
class Grupo {
    
    private $grupoChave;
    
    function __construct($grupoChave) {
        $this->grupoChave = $grupoChave;
    }

    function getGrupoChave() {
        return $this->grupoChave;
    }

    function setGrupoChave($grupoChave) {
        $this->grupoChave = $grupoChave;
    }
}
