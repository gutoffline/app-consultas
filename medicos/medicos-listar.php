<?php include "../includes/cabecalho.php"; ?>
<hr>
<p>
    <a href="#">Novo médico</a>
</p>

<?php

include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_medicos;";
$listaDeMedicos = mysqli_query($conexao , $sqlBusca);
?>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>Ações</th>
    </tr>
    <?php
    while($medico = mysqli_fetch_assoc($listaDeMedicos)){
        echo "<tr>";
        echo "<td>{$medico['id']}</td>";
        echo "<td>{$medico['nome']}</td>";
        echo "<td>{$medico['telefone']}</td>";
        echo "<td>{$medico['crm']}</td>"; 
        echo "<td>{$medico['especialidade']}</td>";
        echo "<td>Alterar | Excluir</td>";
        echo "</tr>";
    }
    ?>
</table>


<?php include "../includes/rodape.php"; ?>