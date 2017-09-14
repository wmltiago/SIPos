<?php

include("conexao.php");

if(ISSET($_POST["nome"]) && ISSET($_POST["email"])){ 

//Função para gerar a senha

function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
  $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
  $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
  $nu = "0123456789"; // $nu contem os números
  $si = "!@#$%¨&*()_+="; // $si contem os símbolos
  $senha="";
 
  if ($maiusculas){
        // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($ma);
  }
 
    if ($minusculas){
        // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($mi);
    }
 
    if ($numeros){
        // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($nu);
    }
 
    if ($simbolos){
        // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
        $senha .= str_shuffle($si);
    }
 
    // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
    return substr(str_shuffle($senha),0,$tamanho);
}

$senha_gerada= gerar_senha(10, true, true, true, true);

echo $senha_gerada;


//termino da função ----!!!!

try{
#COMEÇO DO IF
$stmt = $conexao-> prepare("insert into teste (nome, email, senha) values(?, ?, ?)");

$nome=$_POST["nome"]; 
$email=$_POST["email"];
$senha_pronta=$senha_gerada; 



$stmt->bindParam(1,$nome);
$stmt->bindParam(2,$email);
$stmt->bindParam(3,$senha_pronta);



$stmt->execute();




if($stmt->rowCount() >0){
 echo "<br>inserção realizada com sucesso !!!"; #msg exibida depois de enviado
	header("Location: ../../login.php"); #redirecionando para essa pag "index.php
}else{
	echo "Inserção não realizada";
}
 





}catch(PDOException $e){
	echo "Houve erro na inserção.".$e->getCode()." - ".$e->getMessage();
}

}
?>
