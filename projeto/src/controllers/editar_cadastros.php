<?php include_once '../../templates/header.html'; ?>
<link rel="stylesheet" href="../../public/assets/css/stylesheet_form.css" type="text/css">
<?php include '../../templates/navbar.html'; ?>

<h2>Editar Empresa</h2>
<div class="content">
    <div class="form-wrapper">

        <form method="post" action="">
            <div class="form-row">
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="Concluido" <?php if ($status == 'Concluido') echo 'selected'; ?>>Concluido</option>
                    <option value="Em andamento" <?php if ($status == 'Em andamento') echo 'selected'; ?>>Em andamento</option>
                    <option value="Aguardando" <?php if ($status == 'Aguardando') echo 'selected'; ?>>Aguardando</option>
                </select>
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
                    <option value="2" <?php if ($licitacao == '2') echo 'selected'; ?>>Não</option>
                    <option value="1" <?php if ($licitacao == '1') echo 'selected'; ?>>Sim</option>
                </select>
            </div>
            <div class="form-row">
                <label for="responsavel">Nome do Responsável:</label>
                <input type="text" id="responsavel" name="responsavel" value="<?php echo $responsavel; ?>" required>
                <div class="error-message" id="responsavelError"></div>
            </div>
            <div class="form-row">
                <label for="loja">Nome Fantasia:</label>
                <input type="text" id="loja" name="loja" value="<?php echo $loja; ?>" required>
                <div class="error-message" id="lojaError"></div>
            </div>
            <div class="form-row">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj" placeholder="xx.xxx.xxx/xxxx-xx" value="<?php echo $cnpj; ?>">
                <div class="error-message" id="cnpjError"></div>
            </div>
            <div class="form-row">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" value="<?php echo $telefone; ?>" required>
                <div class="error-message" id="telefoneError" pattern="[0-9]*" title="Digite somente números"></div>
            </div>
            <div class="form-row">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-row">
                <label for="local">Local:</label>
                <input type="text" id="local" name="local" value="<?php echo $local; ?>">
            </div>
            <div class="form-row">
                <label for="obs">Observações:</label>
                <input type="text" id="obs" name="obs" value="<?php echo $obs; ?>">
            </div>
            <div class="form-row">
                <button class="button" type="submit" name="submit">Salvar</button>
            </div>
        </form>
    </div>
</div>
</body>

</html>