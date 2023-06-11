<?php include_once '../../templates/header.html'; ?>
<link rel="stylesheet" href="../../public/assets/css/stylesheet_form.css" type="text/css">
<?php include '../../templates/navbar.html'; ?>
<h2>Formulário de Cadastro para Credenciamento</h2>
<div class="content">
  <div class="form-wrapper">
    <form id="data-form" action="../controllers/cadastro_empresa.php" method="POST">
      <div class="form-row">
        <label for="status">Status:</label>
        <select id="status" name="status">
          <option value="Concluido">Concluido</option>
          <option value="Em andamento">Em andamento</option>
          <option value="Aguardando">Aguardando</option>
        </select>
      </div>
      <div class="form-row">
        <label for="responsavel">Nome do Responsável:</label>
        <input type="text" id="responsavel" name="responsavel" required>
        <div class="error-message" id="responsavelError"></div>
      </div>
      <div class="form-row">
        <label for="loja">Nome Fantasia:</label>
        <input type="text" id="loja" name="loja" required>
        <div class="error-message" id="lojaError"></div>
      </div>
      <div class="form-row">
        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx">
        <div class="error-message" id="cnpjError"></div>
      </div>
      <div class="form-row">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
        <div class="error-message" id="telefoneError" pattern="[0-9]*" title="Digite somente números"></div>
      </div>
      <div class="form-row">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
      </div>
      <div class="form-row">
        <label for="local">Local:</label>
        <input type="text" id="local" name="local">
      </div>
      <div class="form-row">
        <label for="agente">Agente:</label>
        <?php include '../controllers/visualizar_usuarios.php'; ?>
        <select id="agente" name="agente" required>
          <?php include '../controllers/select_code.php'; ?>
        </select>
        <div class="error-message" id="agenteError"></div>
      </div>
      <div class="form-row">
        <label for="licitacao">Licitação?</label>
        <select id="licitacao" name="licitacao" required>
          <option value="2">Não</option>
          <option value="1">Sim</option>
        </select>
      </div>
      <div class="form-row">
        <button class="button" type="submit">Salvar</button>
      </div>
    </form>
  </div>
</div>

</body>
<script src="../../public/assets/js/preencher_form.js"></script>
<script src="../../public/assets/js/numero.js"></script>
<script src="../../public/assets/js/placeholder.js"></script>

</html>