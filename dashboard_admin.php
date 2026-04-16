<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Exames - Admin</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="dashboard_admin" >

    <header class="header_admin">
        <div class="titulo_sistema">
            <h1>Gestão de Exames</h1>
            <p>Sistema de Gestão Dojo Ventura</p>
        </div>
        <button class="btn_sair" onclick="location.href='login_admin.php'">Sair</button>
    </header>

    <main class="container_dashboard">
        <div class="grid_stats">
            <div class="card_info">
                <div>
                    <p>Pendentes</p>
                    <span class="valor_stat">0</span>
                </div>
                <div class="icon_box bg_amarelo">🕒</div>
            </div>

            <div class="card_info">
                <div>
                    <p>Confirmados</p>
                    <span class="valor_stat">0</span>
                </div>
                <div class="icon_box bg_vermelho">✅</div>
            </div>

            <div class="card_info">
                <div>
                    <p>Total</p>
                    <span class="valor_stat">0</span>
                </div>
                <div class="icon_box bg_cinza">📄</div>
            </div>
        </div>

        <section class="secao_conteudo">
            <div class="topo_secao">
                <h3>Pagamentos Pendentes</h3>
                <p>0 aguardando confirmação</p>
            </div>
            <div class="area_vazia">
                <p>Nenhuma inscrição pendente</p>
            </div>
        </section>

        <section class="secao_conteudo">
            <div class="topo_secao">
                <h3>Pagamentos Confirmados</h3>
                <p>0 confirmados</p>
            </div>
            <div class="area_vazia">
                <p>Nenhuma inscrição confirmada ainda</p>
            </div>
        </section>
    </main>

</body>
</html>