<?php

if (isset($_POST['submit']))
{

include_once("conecta.php"); // Inserindo o arquivo de conexão com o Mysql

//resgatando os valores passados pelo formulário
$email = $_POST['email'];
$senha = $_POST['senha'];


//if(!empty($discliplina)){
$sql = "insert into cliente(nome,email,telefone,sexo,cidade,estado,endereco) 
values('$email','$senha')";


if ($conn->query($sql) === TRUE) {
echo "Registro incluido com sucesso.";
} else {
echo "Erro na inclusão do registro: " . $conn->error;
}

mysqli_close($conn);
echo "<br><br><a href='CadAula.php'>Página Inicial</a>";

}
?>
