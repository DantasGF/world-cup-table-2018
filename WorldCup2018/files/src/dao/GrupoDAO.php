<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Gutemberg
 */
interface GrupoDAO {
    
    function inserir(Grupo $grupo);
    function todosGrupos();
    function umGrupo($grupoChave);
    function atualizar(Grupo $grupo);
    function remover($grupoChave);
    
}
