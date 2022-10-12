<?php

if (isset($_POST['submit']))
{

include_once("conecta.php"); // Inserindo o arquivo de conexão com o Mysql

//resgatando os valores passados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['genero'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$endereco = $_POST['endereco'];


//if(!empty($discliplina)){
$sql = "insert into cliente(nome,email,telefone,sexo,cidade,estado,endereco) 
values('$nome','$email','$telefone','$sexo','$cidade','$estado','$endereco')";


if ($conn->query($sql) === TRUE) {
echo "Registro incluido com sucesso.";
} else {
echo "Erro na inclusão do registro: " . $conn->error;
}

mysqli_close($conn);
echo "<br><br><a href='CadAula.php'>Página Inicial</a>";

}
?>
