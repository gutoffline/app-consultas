<?php

include "../includes/conexao.php";

$id_agenda = $_GET['id_agenda'];

$sqlExcluir = "DELETE FROM tb_agenda WHERE id = {$id_agenda}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    echo "Agenda excluida.<br>";
    echo "<a href='agenda-listar.php'>Voltar</a>";
}else{
    echo "Algo deu errado";
}
?>