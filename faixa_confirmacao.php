<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento - Dojo Ventura</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="corpo_pagamento">

    <main class="container_pagamento">
        <section class="card_pagamento">
            <div class="info_topo">
                <h1>Pagamento</h1>
                <p>Faixa selecionada: <strong>Roxa</strong></p>
                <span class="valor_destaque">R$ 50,00</span>
            </div>

            <div class="area_pix">
                <p class="label_pix">PIX CNPJ do Dojo</p>
                <div class="grupo_input_copiar">
                    <input type="text" value="12.345.678/0001-90" readonly id="chave_pix">
                    <button type="button" onclick="copiarCNPJ()" class="botao_copiar" title="Copiar CNPJ">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="acoes_pagamento">
                <button class="btn_confirmar" onclick="confirmar()">
                    Já realizei o pagamento
                </button>
                <button class="btn_dinheiro" onclick="alert('Aviso enviado ao instrutor!')">
                    Vou pagar em dinheiro
                </button>
            </div>
        </section>
    </main>

    <script>
        function copiarCNPJ() {
            // Agora o ID bate com o HTML: "chave_pix"
            const campoTexto = document.getElementById("chave_pix");

            campoTexto.select();
            campoTexto.setSelectionRange(0, 99999); 

            navigator.clipboard.writeText(campoTexto.value).then(() => {
                alert("CNPJ copiado: " + campoTexto.value);
            }).catch(err => {
                console.error('Erro ao copiar: ', err);
            });
        }

        function confirmar() {
            alert('Pagamento enviado para análise!');
        }
    </script>

</body>
</html>