const telefoneInput = document.getElementById("telefone");

// Evento quando o campo de telefone recebe o foco
telefoneInput.addEventListener("focus", function() {
    telefoneInput.removeAttribute("placeholder");
});

// Evento quando o campo de telefone perde o foco
telefoneInput.addEventListener("blur", function() {
    if (telefoneInput.value === "") {
        telefoneInput.setAttribute("placeholder", "(xx) xxxxx-xxxx");
    }
});