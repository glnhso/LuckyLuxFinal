
<?php
    //incluir o arquivo para carregamento das classes
    require "../../autoload.php";

    //instanciar objetos das classes DAO
    $quartoDAO = new QuartoDAO();
    $reservaDAO = new ReservaDAO();
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastro de Quartos e Reservas | LuckyLux</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/dashboard.css" rel="stylesheet" />
    <link href="../../css/luckylux.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
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
                        <i class="bi bi-link-45deg"></i>
                        Cadastro de Quartos e Reservas
                    </h1>

                </div>

                <div class="table-responsive small">

                    <form action="insert.php" method="post">

                        <div class="form-group mb-3">

                            <label for="idquarto">Quarto</label>

                            <select name="idquarto" id="idquarto" class="form-select" required>

                                <option value="">Selecione um quarto</option>

                                <?php foreach($quartoDAO->read() as $quarto) : ?>

                                    <option value="<?= $quarto->getId() ?>">
                                        Quarto <?= $quarto->getNumero() ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                        <div class="form-group mb-3">

                            <label for="idreserva">Reserva</label>

                            <select name="idreserva" id="idreserva" class="form-select" required>

                                <option value="">Selecione uma reserva</option>

                                <?php foreach($reservaDAO->read() as $reserva) : ?>

                                    <option value="<?= $reserva->getId() ?>">
                                        Reserva <?= $reserva->getId() ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>

                        </div>

                        <div class="form-group">

                            <input type="reset" value="Limpar" class="btn">

                            <input type="submit" value="Salvar" class="btn btn-success">

                        </div>

                    </form>

                </div>

            </main>

        </div>
    </div>

    <script src="../../js/bootstrap.bundle.min.js"></script>
    <script src="../../js/dashboard.js"></script>

</body>
</html>
