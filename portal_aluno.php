<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal do Aluno - Dojo Ventura</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php require_once 'assets/layout/header_inicial.php' ?>

    <main class="container_central">
        <div class="cartao_formulario">
            <div class="caixa_icone_calendario">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="16" y1="2" x2="16" y2="6"></line>
                    <line x1="8" y1="2" x2="8" y2="6"></line>
                    <line x1="3" y1="10" x2="21" y2="10"></line>
                </svg>
            </div>
            
            <h2 class="titulo_formulario">Acesso Simplificado</h2>
            <p class="subtitulo_formulario">Nome completo do karatéca</p>

            <form action="processa-aluno.php" method="POST" class="formulario">
                <div class="grupo_campo">
                    <label for="nome_completo" class="rotulo">Nome Completo</label>
                    <input type="text" id="nome_completo" name="data_nascimento" class="campo_entrada" placeholder="Ex: Michel Ventura do Reis" required>
                </div>
                
                <button type="submit" class="botao_enviar">Continuar</button>
            </form>
        </div>
    </main>

    <button class="botao_ajuda" aria-label="Ajuda">
        ?
    </button>

</body>
</html>