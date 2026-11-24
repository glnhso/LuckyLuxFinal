
<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LuckyLux | Painel Principal</title>

    <!-- CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">
    <link href="../../css/luckylux.css" rel="stylesheet">

    <style>
        :root {
            --roxo: #593568;
            --roxo-escuro: #392344;
            --roxo-claro: #eee5f2;
            --rose: #d98fa8;
            --rose-claro: #f8e9ee;
            --fundo: #faf7fa;
            --texto: #493b4d;
        }

        body {
            background-color: var(--fundo);
            color: var(--texto);
            font-family: 'Segoe UI', sans-serif;
        }

        /* CABEÇALHO */

        .topbar {
            background: linear-gradient(
                90deg,
                var(--roxo-escuro),
                var(--roxo)
            );
            min-height: 65px;
        }

        .topbar .navbar-brand {
            font-size: 21px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .marca {
            color: var(--rose);
        }

        /* ESTRUTURA PRINCIPAL */

        .container-fluid > .row {
            min-height: calc(100vh - 65px);
        }

        /* MENU LATERAL */

        .sidebar {
            padding: 0 !important;
            background: var(--roxo-escuro) !important;
            min-height: calc(100vh - 65px);
        }

        .luckylux-sidebar {
            width: 100%;
            min-height: calc(100vh - 65px);
        }

        /* CONTEÚDO */

        main {
            padding-top: 25px;
            background-color: var(--fundo);
        }

        .titulo-pagina {
            color: var(--roxo);
            font-weight: 700;
        }

        .subtitulo {
            color: #897b8d;
        }

        /* BANNER PRINCIPAL */

        .banner {
            background: linear-gradient(
                120deg,
                #593568,
                #90628f
            );

            color: white;
            border-radius: 18px;
            padding: 45px;
            margin-top: 25px;
            margin-bottom: 30px;

            box-shadow: 0 5px 18px rgba(65, 35, 75, 0.15);
        }

        .banner h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .banner p {
            font-size: 16px;
            color: #f4eaf5;
            max-width: 650px;
        }

        .banner-detalhe {
            color: #f1b8ca;
        }

        /* CARDS */

        .card-informacao {
            background: white;
            border: none;
            border-radius: 15px;
            padding: 25px;
            height: 100%;

            box-shadow: 0 3px 14px rgba(70, 40, 80, 0.07);
            transition: 0.3s;
        }

        .card-informacao:hover {
            transform: translateY(-5px);
            box-shadow: 0 7px 20px rgba(70, 40, 80, 0.13);
        }

        .icone-card {
            width: 48px;
            height: 48px;

            display: flex;
            justify-content: center;
            align-items: center;

            border-radius: 12px;
            background-color: var(--rose-claro);
            color: var(--roxo);

            font-size: 23px;
            margin-bottom: 18px;
        }

        .card-informacao h5 {
            color: var(--roxo);
            font-weight: 700;
        }

        .card-informacao p {
            color: #817586;
            font-size: 14px;
        }

        /* SEÇÃO SOBRE */

        .sobre {
            background: white;
            border-radius: 15px;
            padding: 28px;
            margin-top: 30px;

            box-shadow: 0 3px 14px rgba(70, 40, 80, 0.06);
        }

        .sobre h4 {
            color: var(--roxo);
            font-weight: 700;
        }

        .linha-rose {
            width: 55px;
            height: 4px;
            background: var(--rose);
            border-radius: 5px;
            margin-bottom: 18px;
        }

        /* RODAPÉ */

        .rodape {
            text-align: center;
            color: #988b9c;
            font-size: 13px;
            padding: 30px 0;
        }

        /* RESPONSIVIDADE */

        @media (max-width: 767px) {
            .sidebar {
                min-height: auto;
            }

            .luckylux-sidebar {
                min-height: auto;
            }

            .banner {
                padding: 28px;
            }

            .banner h2 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <!-- CABEÇALHO -->
    <header class="navbar sticky-top topbar shadow">

        <a class="navbar-brand px-4 text-white" href="#">
            Lucky<span class="marca">Lux</span>

            <small class="d-block"
                style="font-size: 10px; color: #e8d9ec;">
                HOTEL MANAGEMENT SYSTEM
            </small>
        </a>

    </header>

    <!-- ESTRUTURA PRINCIPAL -->
    <div class="container-fluid">

        <div class="row">

            <!-- MENU LATERAL -->
            <div class="sidebar col-md-3 col-lg-2">

                <?php include "../menu/navbar.php"; ?>

            </div>

            <!-- CONTEÚDO PRINCIPAL -->
            <main class="col-md-9 col-lg-10 px-md-4">

                <div class="pt-3 pb-2 mb-3 border-bottom">

                    <h1 class="h2 titulo-pagina">
                        Painel Principal
                    </h1>

                    <p class="subtitulo">
                        Bem-vindo ao sistema de gerenciamento do LuckyLux.
                    </p>

                </div>

                <!-- BANNER -->
                <section class="banner">

                    <h2>
                        Bem-vindo ao
                        <span class="banner-detalhe">LuckyLux!</span>
                    </h2>

                    <p>
                        Gerencie seu hotel com praticidade, organização e
                        elegância. Tenha controle sobre hóspedes, quartos,
                        reservas e pagamentos em um só lugar.
                    </p>

                    <p class="mb-0">
                        <strong>
                            Organização e sofisticação em cada detalhe.
                        </strong>
                    </p>

                </section>

                <!-- CARDS -->
                <div class="row g-4">

                    <div class="col-md-6 col-xl-3">
                        <div class="card-informacao">

                            <div class="icone-card">
                                &#127968;
                            </div>

                            <h5>Quartos</h5>

                            <p>
                                Gerencie os quartos disponíveis e organize
                                as informações das acomodações.
                            </p>

                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-informacao">

                            <div class="icone-card">
                                &#128100;
                            </div>

                            <h5>Hóspedes</h5>

                            <p>
                                Cadastre e consulte os hóspedes responsáveis
                                pelas reservas do hotel.
                            </p>

                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-informacao">

                            <div class="icone-card">
                                &#128197;
                            </div>

                            <h5>Reservas</h5>

                            <p>
                                Organize entradas, saídas e valores das
                                reservas realizadas.
                            </p>

                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card-informacao">

                            <div class="icone-card">
                                &#128179;
                            </div>

                            <h5>Pagamentos</h5>

                            <p>
                                Consulte e gerencie as formas de pagamento
                                utilizadas nas reservas.
                            </p>

                        </div>
                    </div>

                </div>

                <!-- SOBRE O SISTEMA -->
                <section class="sobre">

                    <h4>Sobre o LuckyLux</h4>

                    <div class="linha-rose"></div>

                    <p>
                        O LuckyLux é um sistema de gerenciamento hoteleiro
                        desenvolvido como projeto acadêmico para a turma
                        INF 4, no ano de 2026.
                    </p>

                    <p>
                        O sistema utiliza programação orientada a objetos
                        e o padrão de projeto DAO (Data Access Object),
                        permitindo organizar e gerenciar os dados do hotel.
                    </p>

                    <p class="mb-0">
                        Seu objetivo é facilitar o gerenciamento das
                        informações relacionadas aos quartos, hóspedes,
                        categorias, reservas e pagamentos.
                    </p>

                </section>

                <!-- RODAPÉ -->
                <footer class="rodape">

                    © 2026 LuckyLux - Sistema de Gerenciamento Hoteleiro

                </footer>

            </main>

        </div>

    </div>

    <!-- JAVASCRIPT -->
    <script src="../../js/bootstrap.bundle.min.js"></script>

</body>
</html>
