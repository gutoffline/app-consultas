<?php include "../includes/cabecalho.php"; ?>

<?php
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_pacientes";

$listaDePacientes = mysqli_query($conexao , $sqlBusca);
?>
<p>
    <a href="pacientes-formulario-inserir.php">Novo paciente</a>
</p>

<table class="table table-hover">

    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Data de nascimento</td>
        <td>Convênio</td>
        <td>Ações</td>
    </tr>
    <?php
    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td>{$paciente['id']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";

        $dataBrasil = date('d/m/Y', strtotime($paciente['data_nascimento']));
        echo "<td>{$dataBrasil}</td>";

        echo "<td>{$paciente['convenio']}</td>";
        echo "<td><a href='#'>Alterar</a> | ";
        echo "<a href='#'>Excluir</a></td>";
        echo "</tr>";
    }
    ?>

</table>
<?php include "../includes/rodape.php"; ?>