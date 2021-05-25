<?php 
include "../includes/cabecalho.php";
include "../includes/conexao.php";

$id_agenda = $_GET['id_agenda'];
$sqlBuscaAgenda = "SELECT * FROM tb_agenda WHERE id = {$id_agenda}";
$data = $hora = $id_medico = $sala = $id_paciente = "";

$listaDeAgendas = mysqli_query($conexao , $sqlBuscaAgenda);
while($agenda = mysqli_fetch_assoc($listaDeAgendas)){
    $data  = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
}
?>

<form name="cadastro-agenda" method="post" action="agenda-alterar.php">
<input type="hidden" name="id_agenda" value="<?php echo $id_agenda ; ?>">
    <p>
        <label>Data:</label>
        <input type="date" name="data" value="<?php echo $data ?>">;
    </p>
    <p>
        <label>Hora:</label>
        <input type="time" name="hora" value="<?php echo $hora; ?>">
    </p>
    <p>
        <label>Médico:</label>
        <select name="id_medico">
            <?php 
            $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
            $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);

            while($medico = mysqli_fetch_assoc($listaDeMedicos)){
                if($id_medico == $medico['id']){
                    echo "<option value='{$medico['id']}' selected>";    
                }else{
                    echo "<option value='{$medico['id']}'>";
                }
                echo $medico['nome'];
                echo "</option>";
            }
            ?>
        </select>
    </p>
    <p>
        <label>Sala:</label>
        <input name="sala" value="<?php echo $sala ; ?>">
    </p>
    <p>
        <label>Paciente:</label>
        <select name="id_paciente">
            <?php 
            $sqlBuscaPacientes = "SELECT * FROM tb_pacientes";
            $listaDePacientes = mysqli_query($conexao , $sqlBuscaPacientes);

            while($paciente = mysqli_fetch_assoc($listaDePacientes)){
                if($id_paciente == $paciente['id']){
                    echo "<option value='{$paciente['id']}' selected>";
                }else{
                    echo "<option value='{$paciente['id']}'>";
                }
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