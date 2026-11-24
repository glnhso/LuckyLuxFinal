
<?php
    // Incluir o arquivo para carregamento das classes
    require "../../autoload.php";

    // Instanciar um objeto da classe DAO
    $dao = new QuartoDAO();
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quartos | LuckyLux Hotel</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="../../css/dashboard.css" rel="stylesheet">
    <link href="../../css/luckylux.css" rel="stylesheet">
</head>

<body>

    <!-- Cabeçalho LuckyLux -->
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

    <div class="container-fluid">
        <div class="row">

            <!-- Menu lateral -->
            <div class="sidebar col-md-3 col-lg-2 p-0">
                <?php include "../menu/navbar.php"; ?>
            </div>

            <!-- Conteúdo principal -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-4 pb-3 mb-4">
                    <h1 class="h2 luckylux-title">
                        <i class="bi bi-door-open-fill"></i>
                        Gerenciamento de Quartos
                    </h1>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="luckylux-description mb-0">
                        Consulte e gerencie os quartos cadastrados no hotel.
                    </p>

                    <a href="create.php" class="btn btn-luckylux">
                        <i class="bi bi-plus-circle"></i>
                        Novo Quarto
                    </a>
                </div>

                <!-- Tabela de quartos -->
                <div class="table-responsive luckylux-table-container">
                    <table class="table luckylux-table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Número</th>
                                <th>Tipo</th>
                                <th>Preço</th>
                                <th>Disponível</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach($dao->read() as $quarto) : ?>
                                <tr>
                                    <td><?= $quarto->getId() ?></td>
                                    <td><?= $quarto->getNumero() ?></td>
                                    <td><?= htmlspecialchars($quarto->getTipo()) ?></td>
                                    <td><?= $quarto->getPreco() ?></td>
                                    <td><?= $quarto->getDisponivel() ?></td>

                                    <td class="text-center">
                                        <a
                                            title="Editar"
                                            href="edit.php?id=<?= $quarto->getId() ?>"
                                            class="btn-action btn-edit"
                                        >
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>

                                        <a
                                            title="Excluir"
                                            href="destroy.php?id=<?= $quarto->getId() ?>"
                                            class="btn-action btn-delete"
                                            onclick="return confirm('Deseja realmente excluir este quarto?')"
                                        >
                                            <i class="bi bi-trash3-fill"></i>
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

    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/dashboard.js"></script>

</body>
</html>
