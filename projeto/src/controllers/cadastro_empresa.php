<?php
// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obter os dados do formulário
  $status = $_POST['status'];
  $responsavel = $_POST['responsavel'];
  $loja = $_POST['loja'];
  $cnpj = $_POST['cnpj'];
  $telefone = $_POST['telefone'];
  $local = $_POST['local'];
  $agente = $_POST['agente'];
  $email = $_POST['email'];
  $licitacao = $_POST['licitacao'];

  // Validar e limpar os dados (implementar validações e filtragens apropriadas)

  // Incluir o arquivo de conexão com o banco de dados
  require_once '../../config/conexao.php';

  // Preparar a consulta SQL
  $sql = "INSERT INTO empresas (status, responsavel, nome_fantasia, cnpj, telefone, local, agente, email, licitacao)
        VALUES ('$status', '$responsavel', '$loja', '$cnpj', '$telefone', '$local', '$agente', '$email', '$licitacao')";

  // Executar a consulta SQL
  if ($conn->query($sql) === TRUE) {
    // Redirecionar para a página de cadastro com sucesso
    header("Location: ../views/painel.php");
    exit();
  } else {
    echo "Erro ao inserir os dados: " . $conn->error;
  }

  // Fechar a conexão com o banco de dados (se necessário)
  $conn->close();
}
