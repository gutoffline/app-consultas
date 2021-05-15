<?php 
include "../includes/cabecalho.php" ; 

$id_medico = $_GET['id_medico'];

include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_medicos WHERE id={$id_medico};";

$listaDeMedicos = mysqli_query($conexao , $sqlBuscar);

$nome = $telefone = $crm = $especialidade = "";

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}
?>

<form name="formulario-inserir-medicos" method="post" action="medicos-alterar.php">

    <input name="id_medico" type="hidden" value="<?php echo $id_medico;?>">
    <div class="row">
        <p class="col-6">
            <label class="form-label">Nome:</label><input name="nome" class="form-control" value="<?php echo $nome;?>">
        </p>
        <p class="col-6">
            <label class="form-label">Telefone:</label><input name="telefone" class="form-control" value="<?php echo $telefone; ?>">
        </p>
    </div>
    <div class="row">
        <p class="col-6">
            <label class="form-label">CRM:</label><input name="crm" value="<?php echo $crm; ?>" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Especialidade:</label>
            <select name="especialidade" class="form-select">
                <option value="Cardiologista" <?php if($especialidade == 'Cardiologista'){ echo "selected "; } ?>>Cardiologista</option>
                <option value="Nutricionista" <?php if($especialidade == 'Nutricionista'){ echo "selected "; } ?>>Nutricionista</option>
                <option value="Ortopedista" <?php if($especialidade == 'Ortopedista'){ echo "selected "; } ?>>Ortopedista</option>
            </select>
        </p>
    </div>
    <p>
        <button type="subtmit" class="btn btn-success">Salvar</button>
    </p>
</form>
<?php include "../includes/rodape.php" ; ?>