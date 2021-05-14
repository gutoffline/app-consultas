<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
    <p>
        <label>Nome:</label><input name="nome">
    </p>
    <p>
        <label>Telefone:</label><input name="telefone">
    </p>
    <p>
        <label>CRM:</label><input name="crm">
    </p>
    <p>
        <label>Especialidade:</label>
        <select name="especialidade">
            <option value="Cardiologista">Cardiologista</option>
            <option value="Nutricionista">Nutricionista</option>
            <option value="Ortopedista">Ortopedista</option>
        </select>
    </p>
    <p>
        <button type="subtmit">Salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php" ; ?>