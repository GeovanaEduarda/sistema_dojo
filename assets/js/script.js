function buscarUsuario() {
  const nomeDigitado = document.getElementById("nome_karateca").value;

  if (nomeDigitado.length > 3) {
    // 1. Atualiza os dados no segundo card
    document.getElementById("nome_confirmado").innerText = nomeDigitado;
    document.getElementById("avatar_letra").innerText = nomeDigitado
      .charAt(0)
      .toUpperCase();
    document.getElementById("input_hidden_nome").value = nomeDigitado; // Para enviar ao PHP depois

    // Aqui você poderia buscar a data de nascimento real via AJAX.
    // Por enquanto, vamos apenas mostrar o card.

    // 2. Troca as telas
    document.getElementById("secao_busca").style.display = "none";
    document.getElementById("secao_confirmacao").style.display = "flex";
    document.getElementById("secao_confirmacao").style.flexDirection = "column";
    document.getElementById("secao_confirmacao").style.alignItems = "center";
  }
}

function voltarBusca() {
  document.getElementById("secao_confirmacao").style.display = "none";
  document.getElementById("secao_busca").style.display = "block";
}
