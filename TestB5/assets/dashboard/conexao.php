<?php
try{
$conexao=new PDO("mysql:host=localhost;dbname=sipos","root","1234");
}catch(PDOException $e){ "Codigo do Erro: ".$e->getCode()." Erro: ".$e->getMessage();
echo "conexao feita com sucesso";
}




?>
