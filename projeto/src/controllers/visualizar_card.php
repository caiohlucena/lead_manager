<?php
include '../controllers/consulta_empresas.php';
// Verifica se a consulta retornou algum resultado
if ($result->num_rows > 0) {
  // Loop através dos resultados da consulta
  while ($row = $result->fetch_assoc()) {
      // Obtém os dados do registro
      $nome = $row['nome_fantasia'];
      $descricao = $row['responsavel'];
      $numeroConta = $row['cnpj']; // 
      $id = $row['id'];
      $link = "mais_informacoes.php?id=" . $id;

      // Exibe os dados no HTML para cada registro
      echo '<a href="' . $link . '" class="data-card">';
      echo '<h3>' . $nome . '</h3>';
      echo '<h4>Numero da Conta: ' . $numeroConta . '</h4>';
      echo '<p>'.$descricao.'</p>';
      echo '<span class="link-text">';
      echo 'Mais Informações...';
      echo '<svg width="25" height="16" viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">';
      echo '<path fill-rule="evenodd" clip-rule="evenodd" d="M17.8631 0.929124L24.2271 7.29308C24.6176 7.68361 24.6176 8.31677 24.2271 8.7073L17.8631 15.0713C17.4726 15.4618 16.8394 15.4618 16.4489 15.0713C16.0584 14.6807 16.0584 14.0476 16.4489 13.657L21.1058 9.00019H0.47998V7.00019H21.1058L16.4489 2.34334C16.0584 1.95281 16.0584 1.31965 16.4489 0.929124C16.8394 0.538599 17.4726 0.538599 17.8631 0.929124Z" fill="#753BBD" />';
      echo '</svg>';
      echo '</span>';
      echo '</a>';
  }
}
?>