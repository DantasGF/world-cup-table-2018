<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Selecao
 *
 * @author Gutemberg
 */
class Selecao {
    
    private $nomeAbreviado;
    private $nome;
    private $pontos;
    private $partidasJogadas;
    private $saldoDeGols;
    private $vitorias;
    private $empates;
    private $derrotas;
    private $golsPro;
    private $goldContra;
    private $icone;
    
    function getNomeAbreviado() {
        return $this->nomeAbreviado;
    }

    function getNome() {
        return $this->nome;
    }

    function getPontos() {
        return $this->pontos;
    }

    function getPartidasJogadas() {
        return $this->partidasJogadas;
    }

    function getSaldoDeGols() {
        return $this->saldoDeGols;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getEmpates() {
        return $this->empates;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getGolsPro() {
        return $this->golsPro;
    }

    function getGoldContra() {
        return $this->goldContra;
    }

    function getIcone() {
        return $this->icone;
    }

    function setNomeAbreviado($nomeAbreviado) {
        $this->nomeAbreviado = $nomeAbreviado;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPontos($pontos) {
        $this->pontos = $pontos;
    }

    function setPartidasJogadas($partidasJogadas) {
        $this->partidasJogadas = $partidasJogadas;
    }

    function setSaldoDeGols($saldoDeGols) {
        $this->saldoDeGols = $saldoDeGols;
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setGolsPro($golsPro) {
        $this->golsPro = $golsPro;
    }

    function setGoldContra($goldContra) {
        $this->goldContra = $goldContra;
    }

    function setIcone($icone) {
        $this->icone = $icone;
    }
    
}
