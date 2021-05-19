<?php 
include "../includes/cabecalho.php"; 

include "../includes/conexao.php"; 

$id_paciente = $_GET['id'];

$sqlBuscar = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente} ;";
$listaDePacientes = mysqli_query($conexao , $sqlBuscar);

$nome = $telefone = $data_nascimento = $convenio = $diagnostico = "";
while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $data_nascimento = $paciente['data_nascimento'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
}
?>


<form name="formulario-pacientes" method="post" action="pacientes-alterar.php">
<input name="id_paciente" type="hidden" value="<?php echo $id_paciente; ?>">
<p>
    <label>Nome:</label>
    <input name="nome" value="<?php echo $nome; ?>">
</p>
<p>
    <label>Telefone:</label>
    <input name="telefone" value="<?php echo $telefone ; ?>">
</p>
<p>
    <label>Data de nascimento:</label>
    <input name="data_nascimento" type="date" value="<?php echo $data_nascimento ; ?>">
</p>
<p>
    <label>Convênio:</label>
    <?php
    $marcado = "";
    if($convenio == "sim"){
        $marcado = "checked";
    }
    ?>
    <input name="convenio" type="checkbox" value="sim" <?php echo $marcado;?>>
</p>
<p>
    <label>Diagnóstico:</label>
    <textarea name="diagnostico"><?php echo $diagnostico ; ?></textarea>
</p>
<p>
    <button type="submit">Salvar</button>
</p>


</form>

<?php include "../includes/rodape.php"; ?>