function validarNumeroMaximo() {
    var inputNumero = document.getElementById("telefone");
    var valor = parseFloat(inputNumero.value);
    var maximo = 11; // Defina o valor máximo desejado

    if (isNaN(valor)) {
        alert("Entrada inválida. Por favor, insira um número de telefone válido.");
        return false;
    }

    if (valor > maximo) {
        alert("O valor fornecido excede o máximo permitido de " + maximo);
        return false;
    }

    return true;
}
