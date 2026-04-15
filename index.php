<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Ventura - Gestão de Karatê</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <button class="botao_tema" aria-label="Alternar tema escuro">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
    </button>

    <header class="cabecalho">
        <div class="caixa_titulo">
            <h1 class="titulo_principal">Dojo Ventura</h1>
        </div>
        <p class="subtitulo">Sistema de Gestão de Karatê</p>
    </header>

    <main class="container_cartoes">
        
        <a href="portal_aluno.php" class="cartao_link">
            <div class="caixa_icone icone_aluno">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <h2 class="titulo_cartao">Portal do Aluno</h2>
            <p class="descricao_cartao">Acesse para realizar sua inscrição no exame de faixa</p>
        </a>

        <a href="login_admin.php" class="cartao_link">
            <div class="caixa_icone icone_admin">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </div>
            <h2 class="titulo_cartao">Dashboard Admin</h2>
            <p class="descricao_cartao">Acesso exclusivo para Sensei e administradores</p>
        </a>

    </main>

</body>
</html>