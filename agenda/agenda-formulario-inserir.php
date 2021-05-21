<?php 
include "../includes/cabecalho.php";
include "../includes/conexao.php";
?>

<form name="cadastro-agenda" method="post" action="agenda-inserir.php">
    <p>
        <label>Data:</label>
        <input type="date" name="data">
    </p>
    <p>
        <label>Hora:</label>
        <input type="time" name="hora">
    </p>
    <p>
        <label>Médico:</label>
        <select name="id_medico">
            <?php 
            $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
            $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

            while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                echo "<option value='{$medico['id']}'>";
                echo $medico['nome'];
                echo "</option>";
            }
            ?>
        </select>
    </p>
    <p>
        <label>Sala:</label>
        <input name="sala">
    </p>
    <p>
        <label>Paciente:</label>
        <select name="id_paciente">
            <?php 
            $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
            $listaDePacientes = mysqli_query($conexao , $sqlBuscaPacientes);

            while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                echo "<option value='{$paciente['id']}'>";
                echo $paciente['nome'];
                echo "</option>";
            }
            ?>
        </select>
    </p>
    <p>
        <button type="submit">Salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php";?>