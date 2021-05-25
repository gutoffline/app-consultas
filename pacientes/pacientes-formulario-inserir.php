<?php include "../includes/cabecalho.php"; ?>


<form name="formulario-pacientes" method="post" action="pacientes-inserir.php" enctype="multipart/form-data">
<p>
    <label>Nome:</label>
    <input name="nome">
</p>
<p>
    <label>Telefone:</label>
    <input name="telefone">
</p>
<p>
    <label>Data de nascimento:</label>
    <input name="data_nascimento" type="date">
</p>
<p>
    <label>Convênio:</label>
    <input name="convenio" type="checkbox" value="sim">
</p>
<p>
    <label>Diagnóstico:</label>
    <textarea name="diagnostico"></textarea>
</p>
<p>
    <label>Foto:</label>
    <input type="file" name="arquivo">
</p>
<p>
    <button type="submit">Salvar</button>
</p>


</form>

<?php include "../includes/rodape.php"; ?>