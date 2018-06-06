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
interface SelecaoDAO {
    
    function inserir(Selecao $selecao);
    function mostrarTodasSelecoes();
    function mostrarUmaSelecao($selecaoNomeAbreviado);
    function atualizarGrupo($nomeAbreviado, $chaveGrupo);
    function atualizarNome($nomeAbreviado, $nome);
    function atualizarPontos($nomeAbreviado, $qtdPontos);
    function atualizarPartidasJogadas($nomeAbreviado, $qtdPartidasJogadas);
    function atualizarSaldoDeGols($nomeAbreviado, $qtdSaldoDeGols);
    function atualizarVitorias($nomeAbreviado, $qtdVitorias);
    function atualizarEmpates($nomeAbreviado, $qtdEmpates);
    function atualizarDerrotas($nomeAbreviado, $qtdDerrotas);
    function atualizarGolsPro($nomeAbreviado, $qtdGoldPro);
    function atualizarGolsContra($nomeAbreviado, $qtdGolsContra);
    function atualizarIcone($nomeAbreviado, $diretorio);
    function remover($nomeAbreviado);
    
}
