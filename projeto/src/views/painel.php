<?php include_once '../../templates/header.html'; ?>
<link rel="stylesheet" href="../../public/assets/css/table.css" type="text/css">
<?php include '../../templates/navbar.html'; ?>
<h2>Tabela de Credenciamento</h2>
<div class="content">
  <div class="table-wrapper">
    <table class="fl-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Status</th>
          <th>Agente</th>
          <th>Loja</th>
          <th>Responsavel</th>
          <!-- <th>CNPJ</th> -->
          <th>Telefone</th>
          <th>Local</th>
        </tr>
      </thead>
      <tbody>
        <?php require_once '../controllers/visualizar_cadastros.php'; ?>
      </tbody>
    </table>
  </div>
</div>
</div>
</body>

</html>