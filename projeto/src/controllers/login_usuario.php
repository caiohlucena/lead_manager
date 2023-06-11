<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão com o banco de dados
    require_once '../../config/conexao.php';

    // Obtém os valores do formulário
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Cria a consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND senha = '$password'";

    // Executa a consulta SQL
    $result = $conn->query($sql);

    // IF Verifica se a consulta retornou algum resultado
    if ($result->num_rows > 0) {
        // Usuário autenticado com sucesso
        echo "Login bem-sucedido. Redirecionando para a página de painel...";
        // Redirecionar o usuário para a página de painel
        header("Location: ../views/painel.php");
        exit(); //Encerrar a execução após o redirecionamento
    } else {
        // Credenciais inválidas
        header("Location: ../../public/index.html");
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
