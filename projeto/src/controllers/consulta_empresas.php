<?php 
// Inclui o arquivo de conexão com o banco de dados
require_once '../../config/conexao.php';

// Cria a consulta SQL para obter os dados do banco
$sql = "SELECT empresas.id, empresas.cnpj, empresas.status, empresas.telefone, empresas.local, empresas.responsavel, empresas.nome_fantasia, usuarios.usuario AS nome_agente FROM empresas LEFT JOIN usuarios ON empresas.agente = usuarios.id";

// Executa a consulta SQL
$result = $conn->query($sql);