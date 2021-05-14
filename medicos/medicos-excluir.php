<?php

include "../includes/conexao.php";
$id_medico = $_GET['id_medico'];
$sqlExcluir = "DELETE FROM tb_medicos WHERE id = {$id_medico}";
$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    echo "Excluído com sucesso <br>";
    echo "<a href='medicos-listar.php'>voltar</a>";
}else{
    echo "Ocorreu algum problema";
}
?>