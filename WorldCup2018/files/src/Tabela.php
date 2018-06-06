<link rel="stylesheet" type="text/css" href="files/src/css/style.css">
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tabela
 *
 * @author Gutemberg
 */
require_once 'files/src/dao/SelecaoImpDAO.php';

class Tabela {
    
    function __construct(){
        ?>
            <div>
                <center><table border="1">
                    
                    <tr>
                        <th>Posição</th>
                        <th>Grupo</th>
                        <th></th>
                        <th>Seleção</th>
                        <th>P</th>
                        <th>J</th>
                        <th>V</th>
                        <th>E</th>
                        <th>D</th>
                        <th>GP</th>
                        <th>GC</th>
                        <th>SG</th>
                    </tr>
                    <?php
                        $selecoes = new SelecaoImpDAO();
                        $selecoes->tabelaSelecoes();
                    ?>
                    <!--</table>--></center><br>
            </div>
        <?php
    }
    
}
?>