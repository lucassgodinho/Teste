<?php
// Conexão com o banco de dados
$servername = "localhost"; // Endereço do servidor MySQL (normalmente "localhost" para ambiente local)
$username = "seu_usuario"; // Nome de usuário do MySQL
$password = "sua_senha"; // Senha do MySQL
$dbname = "nome_do_banco"; // Nome do banco de dados

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

// Insere os dados no banco de dados
$sql = "INSERT INTO tabela_formulario (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Dados do formulário armazenados com sucesso!";
} else {
    echo "Erro ao armazenar os dados do formulário: " . $conn->error;
}

$conn->close();
?>
