<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Enviado</title>
</head>
<body>
<?php
//criando a conexão com o banco de dados
$conexao = mysqli_connect('localhost','root','','db_cliente');
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$senha = $_POST['senha'];
    
 $sql = "INSERT INTO tbl_cliente(nome,email,cidade,senha)values('$nome','$email','$cidade','$senha')";

 try{
 mysqli_query($conexao,$sql);
 echo "<p style='color:blue'>Cliente Cadastrado com Sucesso!</p>";

}catch(mysqli_sql_exception $msn){

if($msn->getCode() === 1062){

    echo "<p style='color:red'>O E-mail informado já está cadastrado.</p>";
}

}
?>

<hr>
<a href="index.html">TELA INICIAL</a>
</body>
</html>