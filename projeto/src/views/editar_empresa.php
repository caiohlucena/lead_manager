<?php
// Inclua o arquivo de conexão com o banco de dados
require_once '../../config/conexao.php';

// Verifique se o parâmetro ID está presente na URL
if (isset($_GET['id'])) {
    // Obtém o ID do registro da URL
    $id = $_GET['id'];

    // Verifique se o formulário foi enviado para atualizar os dados
    if (isset($_POST['submit'])) {
        // Obtenha os dados enviados pelo formulário
        $status = $_POST['status'];
        $responsavel = $_POST['responsavel'];
        $loja = $_POST['loja'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $local = $_POST['local'];
        $agente = $_POST['agente'];
        $email = $_POST['email'];
        $licitacao = $_POST['licitacao'];
        $obs = $_POST['obs'];

        // Crie a consulta SQL para atualizar os dados no banco de dados
        $sql = "UPDATE empresas SET status = '$status', responsavel = '$responsavel', nome_fantasia = '$loja', cnpj = '$cnpj', telefone = '$telefone', local = '$local', agente = '$agente', email = '$email', licitacao = '$licitacao', descricao = '$obs' WHERE id = $id";

        // Execute a consulta SQL
        if ($conn->query($sql) === TRUE) {
            echo "Os dados foram atualizados com sucesso.";
            // Redirecione o usuário de volta para a página lista_empresas.php ou exiba uma mensagem de sucesso.
        } else {
            echo "Erro ao atualizar os dados: " . $conn->error;
        }
    }

    // Crie a consulta SQL para obter os dados da empresa com base no ID
    $sql = "SELECT * FROM empresas WHERE id = $id";
    $result = $conn->query($sql);

    // Verifique se a consulta retornou algum resultado
    if ($result->num_rows == 1) {
        // Obtenha os dados da empresa
        $row = $result->fetch_assoc();
        $status = $row['status'];
        $responsavel = $row['responsavel'];
        $loja = $row['nome_fantasia'];
        $cnpj = $row['cnpj'];
        $telefone = $row['telefone'];
        $local = $row['local'];
        $agente = $row['agente'];
        $email = $row['email'];
        $licitacao = $row['licitacao'];
        $obs = $row['descricao'];
        // Aqui você pode obter os outros campos da empresa

        // Exiba o formulário de edição
?>
<?php include '../controllers/editar_cadastros.php'; ?>
<?php
    } else {
        echo "Nenhum registro encontrado.";
    }
} else {
    // Caso o parâmetro ID não esteja presente na URL, redirecione o usuário de volta para a página lista_empresas.php ou exiba uma mensagem de erro.
    header("Location: painel.php");
    exit();
}

// Feche a conexão com o banco de dados
$conn->close();
?>