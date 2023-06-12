<?php
include '../controllers/consulta_empresas.php';
// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
  // Loop através dos resultados da consulta
  while ($row = $result->fetch_assoc()) {
    // Obtém o ID do registro atual
    $id = $row['id'];
    // Cria o link de edição com o ID como parâmetro na URL
    $link = "editar_empresa.php?id=" . $id;
    // Preenche uma linha da tabela com os dados
    echo "<tr>";
    // echo "<td>" . $row['id'] . "</td>";
    echo "<td><a href=\"$link\">" . $id . "</a></td>";
    echo "<td>" . $row['status'] . "</td>";
    echo "<td>" . $row['nome_agente'] . "</td>";
    echo "<td>" . $row['nome_fantasia'] . "</td>";
    echo "<td>" . $row['responsavel'] . "</td>";
    // echo "<td>" . $row['cnpj'] . "</td>";
    echo "<td>" . $row['telefone'] . "</td>";
    echo "<td>" . $row['local'] . "</td>";
  }
}
