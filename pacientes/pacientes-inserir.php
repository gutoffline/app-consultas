<?php
include "../includes/conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];

if(isset($_POST['convenio'])){
    $convenio = $_POST['convenio'];
}else{
    $convenio = 'não';
}

$diagnostico = $_POST['diagnostico'];

$dir = "imagens/";
$arquivo = $_FILES['arquivo'];
$foto = $dir . $arquivo['name'];

if(move_uploaded_file($arquivo['tmp_name'] , "$dir/" . $arquivo['name'])){
    echo "Arquivo enviado com sucesso!";
}else{
    echo "Arquivo deu erro";
}

$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, data_nascimento, convenio, diagnostico, foto) 
                values(
                    '{$nome}' , 
                    '{$telefone}',
                    '{$data_nascimento}',
                    '{$convenio}',
                    '{$diagnostico}',
                    '{$foto}'
                    );";

$resultado = mysqli_query($conexao , $sqlInserir);

if($resultado){
    echo "Cadastro realizado com sucesso.<br>";
    echo "<a href='pacientes-listar.php'>Voltar</a>";
}else{
    echo "Algo deu errado";
}

?>