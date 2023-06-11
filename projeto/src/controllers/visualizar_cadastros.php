<?php
// Inclui o arquivo de conexão com o banco de dados
require_once '../../config/conexao.php';

// Cria a consulta SQL para obter os dados do banco
$sql = "SELECT empresas.id, empresas.cnpj, empresas.status, empresas.telefone, empresas.local, empresas.responsavel, empresas.nome_fantasia, usuarios.usuario AS nome_agente FROM empresas LEFT JOIN usuarios ON empresas.agente = usuarios.id";

// Executa a consulta SQL
$result = $conn->query($sql);

// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
  // Loop através dos resultados da consulta
  while ($row = $result->fetch_assoc()) {
    // Preenche uma linha da tabela com os dados
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['nome_agente'] . "</td>";
    echo "<td>" . $row['nome_fantasia'] . "</td>";
    echo "<td>" . $row['responsavel'] . "</td>";
    // echo "<td>" . $row['cnpj'] . "</td>";
    echo "<td>" . $row['telefone'] . "</td>";
    echo "<td>" . $row['local'] . "</td>";
  }
}
