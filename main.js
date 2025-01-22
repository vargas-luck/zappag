document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contact-form");

  // Máscara para o campo de telefone
  const telefoneInput = document.getElementById("telefone");
  const telefoneMask = IMask(telefoneInput, {
    mask: [
      {
        mask: "(00) 0000-0000",
        maxLength: 10,
      },
      {
        mask: "(00) 00000-0000",
        maxLength: 11,
      },
    ],
  });

  // Função para validar telefone
  function validarTelefone(telefone) {
    const numeroLimpo = telefone.replace(/\D/g, "");
    return numeroLimpo.length >= 10 && numeroLimpo.length <= 11;
  }

  form.addEventListener("submit", async function (e) {
    e.preventDefault();

    // Validar telefone antes de enviar
    const telefone = telefoneInput.value;
    if (!validarTelefone(telefone)) {
      alert("Por favor, insira um número de telefone válido");
      telefoneInput.focus();
      return;
    }

    const submitButton = form.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.textContent = "Enviando...";

    try {
      const formData = new FormData(form);

      const response = await fetch("contato.php", {
        method: "POST",
        body: formData,
      });

      const data = await response.json();

      if (data.success) {
        alert(data.message);
        form.reset();
        telefoneMask.value = ""; // Limpa a máscara também
      } else {
        throw new Error(data.message);
      }
    } catch (error) {
      alert("Erro ao enviar mensagem: " + error.message);
    } finally {
      submitButton.disabled = false;
      submitButton.textContent = "Entre em contato";
    }
  });

  // Impedir entrada de letras no campo de telefone
  telefoneInput.addEventListener("keypress", function (e) {
    const char = String.fromCharCode(e.keyCode);
    if (!/[0-9]/.test(char)) {
      e.preventDefault();
    }
  });

  // Limpar formatação ao colar número
  telefoneInput.addEventListener("paste", function (e) {
    e.preventDefault();
    const texto = (e.clipboardData || window.clipboardData).getData("text");
    const numeros = texto.replace(/\D/g, "");
    telefoneMask.value = numeros;
  });
});
