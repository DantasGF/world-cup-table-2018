<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>World Cup FIFA 2018</title>
        <link rel="stylesheet" type="text/css" href="files/src/css/style.css">
    </head>
    <body>
        <div class="menu">
            <div class="menu_titulo"><b>World Cup FIFA 2018</b></div>
        </div>
        <form method="POST">
            <?php
                require_once 'files/src/dao/SelecaoImpDAO.php';
                $selecao = new SelecaoImpDAO();
            ?><br>
            <div style="margin-left:100px;">
                <div class="ferramentas">
                        <div style="border-bottom:2px Solid #E8E8E8;
                             font-family: Arial; padding:10px;
                             background:#696969;border-radius:5px;
                             color:white;">
                            Seleções
                        </div><br>
                        <table border="0">
                            <tr>
                                <td>Opções: </td>
                                <td><select style="width: 180px;" name="opcao_sel">
                                    <option value="atualizar_sg">[Atualizar]: Saldo de Gols</option>
                                    <option value="atualizar_gc">[Atualizar]: Gols Contra</option>
                                    <option value="atualizar_p">[Atualizar]: Pontos</option>
                                    <option value="atualizar_j">[Atualizar]: Jogos</option>
                                    <option value="atualizar_v">[Atualizar]: Vitórias</option>
                                    <option value="atualizar_e">[Atualizar]: Empates</option>
                                    <option value="atualizar_d">[Atualizar]: Derrotas</option>
                                    <option value="atualizar_gp">[Atualizar]: Gols Pró</option>
                                    <option value="atualizar_nome">[Atualizar]: Nome</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Seleções: </td>
                                <td><select style="width: 180px;" name="opcao_sel_pts">
                                    <?php $nomeAbreviado = $selecao->mostrarTodasSelecoes(); ?>
                                </select><br></td>
                            </tr>
                            <tr>
                                <td>Qtd./Nome: </td>
                                <td><input placeholder="" name="qtd_ou_nome"></td>
                            </tr>
                            <tr>
                                <td>Aplicar: </td>
                                <td><input type="submit" name="aplicar" value="Aplicar"></td>
                            </tr>
                        </table>
                    </div>
                
        </div>
        <?php
            if(filter_input(INPUT_POST, "aplicar")){
                switch(filter_input(INPUT_POST, "opcao_sel")){
                    case "atualizar_sg":
                        $selecao->atualizarSaldoDeGols(filter_input(INPUT_POST, "opcao_sel_pts"), 
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_gc":
                        $selecao->atualizarGolsContra(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_p":
                        $selecao->atualizarPontos(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_j":
                        $selecao->atualizarPartidasJogadas(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_v":
                        $selecao->atualizarVitorias(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_e":
                        $selecao->atualizarEmpates(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_d":
                        $selecao->atualizarDerrotas(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_gp":
                        $selecao->atualizarGolsPro(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    case "atualizar_nome":
                        $selecao->atualizarNome(filter_input(INPUT_POST, "opcao_sel_pts"),
                                filter_input(INPUT_POST, "qtd_ou_nome"));
                        break;
                    default:
                        print("Erro!");
                        break;
                }
            }  
        ?>
    </body>
</html>
