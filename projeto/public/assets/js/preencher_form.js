
const form = document.getElementById("data-form");

form.addEventListener("submit", function (event) {
    // Limpar mensagens de erro
    clearErrorMessages();

    // Obter referências aos campos de entrada
    const responsavelInput = document.getElementById("responsavel");
    const lojaInput = document.getElementById("loja");
    const cnpjInput = document.getElementById("cnpj");
    const telefoneInput = document.getElementById("telefone");
    const agenteSelect = document.getElementById("agente");

    // Validar os campos
    let isValid = true;

    if (responsavelInput.value.trim() === "") {
        displayErrorMessage("responsavelError", "Por favor, informe o responsável.");
        isValid = false;
    }

    if (lojaInput.value.trim() === "") {
        displayErrorMessage("lojaError", "Por favor, informe a loja.");
        isValid = false;
    }

    if (cnpjInput.value.trim() !== "" && !isValidCNPJ(cnpjInput.value.trim())) {
        displayErrorMessage("cnpjError", "Por favor, informe um CNPJ válido (14 dígitos).");
        isValid = false;
    }

    if (telefoneInput.value.trim() !== "" && !isValidTelefone(telefoneInput.value.trim())) {
        displayErrorMessage("telefoneError", "Por favor, informe um telefone válido (11 dígitos numéricos).");
        isValid = false;
    }

    if (agenteSelect.value === "3") {
        displayErrorMessage("agenteError", "Por favor, selecione um agente.");
        isValid = false;
    }

    // Impedir o envio do formulário se os dados forem inválidos
    if (!isValid) {
        event.preventDefault();
    }
});

function displayErrorMessage(elementId, errorMessage) {
    const errorElement = document.getElementById(elementId);
    errorElement.textContent = errorMessage;
}

function clearErrorMessages() {
    const errorElements = document.getElementsByClassName("error-message");
    for (let i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = "";
    }
}

function isValidCNPJ(cnpj) {
    // Remover caracteres não numéricos
    cnpj = cnpj.replace(/\D/g, "");

    // Verificar se possui 14 dígitos
    if (cnpj.length !== 14) {
        return false;
    }

    // Realizar validação do CNPJ
    // ...

    return true;
}

function isValidTelefone(telefone) {
    // Remover caracteres não numéricos
    telefone = telefone.replace(/\D/g, "");

    // Verificar se possui 11 dígitos
    if (telefone.length !== 11) {
        return false;
    }

    // Realizar validação do telefone
    // ...

    return true;
}
