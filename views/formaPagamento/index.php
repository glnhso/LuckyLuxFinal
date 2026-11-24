
<?php
    // Incluir o arquivo para carregamento das classes
    require "../../autoload.php";

    // Instanciar um objeto da classe DAO
    $dao = new FormaPagamentoDAO();
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Pagamentos | LuckyLux Hotel</title>

    <meta name="theme-color" content="#3D2849" />

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- CSS do Dashboard -->
    <link href="../../css/dashboard.css" rel="stylesheet" />

    <!-- CSS personalizado LuckyLux -->
    <link href="../../css/luckylux.css" rel="stylesheet" />

</head>

<body>

    <!-- Cabeçalho -->
    <header class="navbar sticky-top luckylux-header flex-md-nowrap p-0 shadow">

        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5"
           href="../home/">
            <i class="bi bi-gem"></i>
            LuckyLux
        </a>

        <ul class="navbar-nav flex-row d-md-none">

            <li class="nav-item">
                <button class="nav-link px-3"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#sidebarMenu">
                    <i class="bi bi-list fs-4"></i>
                </button>
            </li>

        </ul>

    </header>


    <!-- Conteúdo principal -->
    <div class="container-fluid">

        <div class="row">

            <!-- MENU LATERAL -->
            <div class="sidebar col-md-3 col-lg-2 p-0">

                <div class="offcanvas-md offcanvas-end"
                     tabindex="-1"
                     id="sidebarMenu"
                     aria-labelledby="sidebarMenuLabel">

                    <div class="offcanvas-header">

                        <h5 class="offcanvas-title" id="sidebarMenuLabel">
                            LuckyLux
                        </h5>

                        <button type="button"
                                class="btn-close"
                                data-bs-dismiss="offcanvas"
                                data-bs-target="#sidebarMenu"
                                aria-label="Fechar">
                        </button>

                    </div>

                    <?php include "../menu/navbar.php"; ?>

                </div>

            </div>


            <!-- ÁREA DE CONTEÚDO -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <!-- TÍTULO -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3 mb-4 border-bottom">

                    <h1 class="h2 luckylux-title">
                        <i class="bi bi-credit-card-fill"></i>
                        Gerenciamento de Pagamentos
                    </h1>

                </div>


                <!-- BOTÃO NOVO PAGAMENTO -->
                <div class="mb-4">

                    <a href="create.php" class="btn btn-luckylux">
                        <i class="bi bi-plus-circle me-2"></i>
                        Novo Pagamento
                    </a>

                </div>


                <!-- TABELA DE PAGAMENTOS -->
                <div class="table-responsive">

                    <table class="table table-hover luckylux-table">

                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Ações</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php foreach($dao->read() as $formaPagamento) : ?>

                                <tr>

                                    <td>
                                        <?= $formaPagamento->getId() ?>
                                    </td>

                                    <td>
                                        <?= $formaPagamento->getTipo() ?>
                                    </td>

                                    <td>

                                        <!-- EDITAR -->
                                        <a title="Editar"
                                           class="btn-action btn-edit"
                                           href="edit.php?id=<?= $formaPagamento->getId() ?>">

                                            <i class="bi bi-pencil"></i>

                                        </a>


                                        <!-- EXCLUIR -->
                                        <a title="Excluir"
                                           class="btn-action btn-delete"
                                           href="destroy.php?id=<?= $formaPagamento->getId() ?>">

                                            <i class="bi bi-trash3"></i>

                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>

                </div>

            </main>

        </div>

    </div>


    <!-- Scripts -->
    <script src="../../js/bootstrap.bundle.min.js"></script>

    <script src="../../js/dashboard.js"></script>

</body>

</html>
