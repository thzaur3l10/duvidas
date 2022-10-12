<?php
  // Cria a string "texto de conexão" e coloca na variável $conn
  $conn = mysqli_connect('localhost:3306','root','','bomb');
  
  // Testa se a variável $conn é verdadeira
  if(!$conn){
	 // imprime na tela a mensagem de erro. 
     echo "Connection error: " . mysqli_connect_error();
  }
  //cria a consulta "query" e joga na variável $sql
  $sql = "select * from cliente";
  echo $sql . "<br><br>";
  // Executa a consulta no banco de dados e joga o resultado na variável $resultado
  $resultado = mysqli_query($conn,$sql);
  
  //Traduzir o resultado e jogar para um Array chamado $disciplinas
  $cliente = mysqli_fetch_all($resultado, MYSQLI_ASSOC); 
  
  //Através do comando foreach divide o Array $disciplinas em linhas.
  //Joga cada linha na variável $disciplina.  
  foreach($cliente as $cliente){
	  echo $cliente["id"]. " - " . $cliente["nome"]. " - " .$cliente["email"]. " - " .$cliente["telefone"]. " - " .$cliente["sexo"]. " - " .$cliente["cidade"]. " - " .$cliente["estado"]. " - " .$cliente["endereco"].  "<br>";
  };
  
  
  mysqli_close ($conn);

  
  

?>