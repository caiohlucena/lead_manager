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
        echo '<script>
            alert("Bem vindo, ' . $username.' ");
            window.location.href = "../views/painel.php";
            </script>';
        exit();
    } else {
        // Credenciais inválidas
        echo '<script>
            alert("Credenciais inválidas.");
            window.location.href = "../../public/index.html";
            </script>';
        exit();
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
