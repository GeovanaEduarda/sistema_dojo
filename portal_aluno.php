<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Aluno - Dojo Ventura</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Adicionei aqui o CSS do Avatar caso não esteja no seu style.css */
        .avatar_inicial {
            width: 80px;
            height: 80px;
            background-color: #8c3134;
            color: white;
            font-size: 32px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body>

    <?php require_once 'assets/layout/header_inicial.php' ?>

    <main class="container_central">
        <div class="cartao_formulario">
            
            <div id="secao_busca">
                <div class="caixa_icone_escudo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                
                <h2 class="titulo_formulario">Acesso Simplificado</h2>
                <p class="subtitulo_formulario">Nome completo do karatéca</p>

                <div class="formulario">
                    <div class="grupo_campo">
                        <label for="nome_karateca" class="rotulo">Nome Completo</label>
                        <div class="campo_com_icone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <input type="text" id="nome_karateca" class="campo_entrada" placeholder="Ex: Michel Ventura do Reis" required>
                        </div>
                    </div>
                    
                    <button type="button" onclick="buscarUsuario()" class="botao_enviar_admin" style="background-color: #8c3134; color: white; width: 100%;">
                        Continuar
                    </button>             
                </div>
            </div>

            <div id="secao_confirmacao" style="display: none; width: 100%;">
                <div class="avatar_inicial" id="avatar_letra">M</div>

                <h2 class="titulo_formulario">É você?</h2>

                <div class="caixa_usuario" style="background-color: #f9fafb; padding: 20px; border-radius: 15px; margin-bottom: 25px; width: 100%; text-align: center;">
                    <h3 id="nome_confirmado" style="color: #111827; margin-bottom: 5px; font-size: 20px;">Maria Santos</h3>
                </div>

                <div class="grupo_botoes" style="display: flex; flex-direction: column; gap: 10px; width: 100%;">
                    <form action="faixa_aluno.php" method="POST" style="width: 100%;">
                        <input type="hidden" name="nome_final" id="input_hidden_nome">
                        <button type="submit" class="botao_enviar_admin" style="width: 100%; background-color: #8c3134; color: white; border: none; padding: 15px; border-radius: 12px; font-weight: 600; cursor: pointer;">
                            Sim, sou eu!
                        </button>
                    </form>
                    
                    <button type="button" onclick="voltarBusca()" class="botao_nao" style="background: none; border: 1px solid #e5e7eb; padding: 15px; border-radius: 12px; cursor: pointer; color: #6b7280; font-weight: 600;">
                        Não sou eu
                    </button>
                </div>
            </div>

        </div>
    </main>

    <button class="botao_ajuda" aria-label="Ajuda">?</button>

    <script>
        function buscarUsuario() {
            const input = document.getElementById('nome_karateca');
            const nomeDigitado = input.value.trim();

            if (nomeDigitado.length < 3) {
                alert("Por favor, digite seu nome completo.");
                return;
            }

            // Atualiza os dados no segundo card
            document.getElementById('nome_confirmado').innerText = nomeDigitado;
            document.getElementById('avatar_letra').innerText = nomeDigitado.charAt(0).toUpperCase();
            document.getElementById('input_hidden_nome').value = nomeDigitado;

            // Troca visual das seções
            document.getElementById('secao_busca').style.display = 'none';
            document.getElementById('secao_confirmacao').style.display = 'flex';
            document.getElementById('secao_confirmacao').style.flexDirection = 'column';
            document.getElementById('secao_confirmacao').style.alignItems = 'center';
        }

        function voltarBusca() {
            document.getElementById('secao_confirmacao').style.display = 'none';
            document.getElementById('secao_busca').style.display = 'block';
        }
    </script>
</body>
</html>