<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SelecaoImpDAO
 *
 * @author Gutemberg
 */
require_once 'files/src/dao/SelecaoDAO.php';
require_once 'files/src/bd/ConexaoMySQL.php';

$cnxMySQL = new ConexaoMySQL();

class SelecaoImpDAO implements SelecaoDAO{

    public function atualizarDerrotas($nomeAbreviado, $qtdDerrotas) {
        $mysqlQuery = mysql_query("UPDATE selecao SET derrotas = "
                . "derrotas + '".$qtdDerrotas."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarEmpates($nomeAbreviado, $qtdEmpates) {
        $mysqlQuery = mysql_query("UPDATE selecao SET empates = "
                . "empates + '".$qtdEmpates."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarGolsContra($nomeAbreviado, $qtdGolsContra) {
        $mysqlQuery = mysql_query("UPDATE selecao SET gols_contra = "
                . "gols_contra + '".$qtdGolsContra."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarGolsPro($nomeAbreviado, $qtdGoldPro) {
        $mysqlQuery = mysql_query("UPDATE selecao SET gols_pro = "
                . "gols_pro + '".$qtdGoldPro."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarGrupo($nomeAbreviado, $grupoChave) {
        $mysqlQuery = mysql_query("UPDATE selecao SET grupo_chave = "
                . "'".$grupoChave."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarNome($nomeAbreviado, $nome) {
        $mysqlQuery = mysql_query("UPDATE selecao SET nome = "
                . "'".$nome."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarPartidasJogadas($nomeAbreviado, $qtdPartidasJogadas) {
        $mysqlQuery = mysql_query("UPDATE selecao SET partidas_jogadas = "
                . "partidas_jogadas + '".$qtdPartidasJogadas."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarPontos($nomeAbreviado, $qtdPontos) {
        $mysqlQuery = mysql_query("UPDATE selecao SET pontos = "
                . "pontos + '".$qtdPontos."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarSaldoDeGols($nomeAbreviado, $qtdSaldoDeGols) {
        $mysqlQuery = mysql_query("UPDATE selecao SET saldo_de_gols = "
                . "saldo_de_gols + '".$qtdSaldoDeGols."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function atualizarVitorias($nomeAbreviado, $qtdVitorias) {
        $mysqlQuery = mysql_query("UPDATE selecao SET vitorias = "
                . "vitorias + '".$qtdVitorias."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }
    
    public function atualizarIcone($nomeAbreviado, $diretorio) {
        $mysqlQuery = mysql_query("UPDATE selecao SET icone = "
                . "'".$diretorio."' WHERE "
                . "nome_abreviado = '".$nomeAbreviado."'");
    }

    public function inserir(\Selecao $selecao) {
        
    }

    public function mostrarTodasSelecoes() {
        $mysqlQuery = mysql_query("SELECT * FROM selecao");
        
        while($resp = mysql_fetch_assoc($mysqlQuery)){
            print("<br><option value=".$resp['nome_abreviado'].">"
                    .$resp['nome']."</option><br>");
        }
    }
    
    public function tabelaSelecoes(){
        
        $posicao = 0;
        
        $mysqlQuery = mysql_query("SELECT grupo_selecao.grupo_chave, selecao.nome, "
                . "selecao.icone, selecao.pontos, selecao.partidas_jogadas, selecao.vitorias, "
                . "selecao.empates, selecao.derrotas, selecao.gols_pro, "
                . "selecao.gols_contra, selecao.saldo_de_gols "
                . "FROM selecao JOIN grupo_selecao "
                . "ON selecao.nome_abreviado = grupo_selecao.selecao "
                . "ORDER BY grupo_selecao.grupo_chave ASC, selecao.pontos DESC") or die(mysql_error());
        
        
        while($resp = mysql_fetch_array($mysqlQuery)){
            
                ++$posicao;

                print("<tr>
                        <td><b>".$posicao." °</b></td>
                        <td><b>".$resp['grupo_chave']."</b></td>
                        <td><img src='".$resp['icone']."' width='30' height='30'></img></td>
                        <td><b>".$resp['nome']."</b></td>
                        <td><b>".$resp['pontos']."</b></td>
                        <td><b>".$resp['partidas_jogadas']."</b></td>
                        <td><b>".$resp['vitorias']."</b></td>
                        <td><b>".$resp['empates']."</b></td>
                        <td><b>".$resp['derrotas']."</b></td>
                        <td><b>".$resp['gols_pro']."</b></td>
                        <td><b>".$resp['gols_contra']."</b></td>
                        <td><b>".$resp['saldo_de_gols']."</b></td>
                    </tr>");
                
                if($posicao >= 4){
                    $posicao = -1;
                    print("<tr>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td></td>"
                            . "<td><br><br></td>"
                        . "</tr>");
                    ++$posicao;
                }
        }
    }

    public function mostrarUmaSelecao($selecaoNomeAbreviado) {
        
    }

    public function remover($nomeAbreviado) {
        
    }

}
