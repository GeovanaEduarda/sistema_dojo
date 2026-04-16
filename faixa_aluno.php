<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portal do Aluno - Dojo Ventura</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="corpo_portal">

    <?php require_once 'assets/layout/header_inicial.php' ?>

    <main class="container_portal">
        <section class="card_central">
            <div class="boas_vindas">
                <h2>Bem-vindo, Maria Santos!</h2>
                <p>Selecione a faixa para o próximo exame</p>
            </div>

            <div class="lista_faixas">
                <a href="faixa_confirmacao.php?faixa=Roxa&valor=50.00" style="text-decoration: none; color: inherit;">
                    <div class="item_faixa">
                        <span class="nome_faixa">Roxa</span>
                        <span class="valor_faixa">R$ 50.00</span>
                    </div>
                </a>
                
            </div>
        </section>
    </main>

</body>
</html>