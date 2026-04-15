<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Dojo Ventura</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php require_once 'assets/layout/header_inicial.php' ?>

    <main class="container_central">
        <div class="cartao_formulario">
            <div class="caixa_icone_escudo">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </div>
            
            <h2 class="titulo_formulario">Acesso Restrito</h2>
            <p class="subtitulo_formulario">Apenas administradores autorizados</p>

            <form action="processa_login.php" method="POST" class="formulario">
                <div class="grupo_campo">
                    <label for="usuario" class="rotulo">Usuário</label>
                    <div class="campo_com_icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <input type="text" id="usuario" name="usuario" class="campo_entrada" placeholder="Digite seu usuário" required>
                    </div>
                </div>

                <div class="grupo_campo">
                    <label for="senha" class="rotulo">Senha</label>
                    <div class="campo_com_icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <input type="password" id="senha" name="senha" class="campo_entrada" placeholder="Digite sua senha" required>
                    </div>
                </div>
                
                <a href="dashboard_admin.php" class="botao_enviar_admin">Iniciar Sessão</a>
            </form>

        </div>
    </main>

    <button class="botao_ajuda" aria-label="Ajuda">
        ?
    </button>

</body>
</html>