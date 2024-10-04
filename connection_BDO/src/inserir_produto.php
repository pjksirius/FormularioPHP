<?php

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


$server = "localhost";
$user = 'root';
$password = '';
$banco = 'connection_BDO';

$conn = new mysqli($server, $user, $password, $banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn ->connect_error);
}

$smtp = $conn->prepare("INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES (?, ?, ?, ?)");

$smtp->bind_param("ssdi", $nome, $descricao, $preco, $quantidade);

if ($smtp->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto: " . $smtp->error;
}

$smtp->close();
$conn->close();
?>