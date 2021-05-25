<?php

include "../includes/conexao.php";

$id_agenda = $_POST['id_agenda'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$id_paciente = $_POST['id_paciente'];

$sqlAlterar = "UPDATE tb_agenda set
                data = '{$data}' , 
                hora = '{$hora}' , 
                id_medico = {$id_medico},
                sala = '{$sala}',
                id_paciente = {$id_paciente}
                WHERE id = {$id_agenda}
                ";

$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    echo "Cadastro alterado com sucesso.<br>";
    echo "<a href='agenda-listar.php'>Voltar</a>";
}else{
    echo "Algo deu errado";
}
?>