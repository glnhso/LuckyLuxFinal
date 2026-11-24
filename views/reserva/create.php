
<?php
require "../../autoload.php";

// Instanciar o DAO de Categoria
$daoHospedeResponsavel = new HospedeResponsavelDAO();
$daoFormaPagamento = new FormaPagamentoDAO();
?>

<!doctype html>
<html lang="pt-br" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastrar Reserva</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">
</head>

<body>

<header class="navbar sticky-top bg-dark p-0 shadow"
        data-bs-theme="dark">
    <a class="navbar-brand px-3 text-white" href="#">
        Sistema de Hotel
    </a>
</header>

<div class="container-fluid">
    <div class="row">

        <div class="sidebar border-end col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <?php include "../menu/navbar.php"; ?>
        </div>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <div class="pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Cadastro de Reserva </h1>
            </div>

            <div class="table-responsive">

                <form action="insert.php" method="post">

                    <div class="form-group mb-3">
                        <label for="checkin">Checkin</label>

                        <input
                            type="date"
                            name="checkin"
                            id="checkin"
                            class="form-control"
                            required
                        >
                    </div>

                    <div class="form-group mb-3">
                        <label for="checkout">Checkout</label>

                        <input
                            type="date"
                            name="checkout"
                            id="checkout"
                            class="form-control"
                            required
                        >
                    </div>
                      <div class="form-group mb-3">
                        <label for="checkout">Valor</label>

                        <input
                            type="text"
                            name="valor"
                            id="valor"
                            class="form-control"
                            required
                        >
                    
                         <div class="form-group mb-3">
                        <label for="idhospede">
                            Hospede Responsável
                        </label>

                        <select
                            name="idhospede"
                            id="idhospede"
                            class="form-select"
                            required
                        >
                            <option value="">
                                Selecione um Hospede
                            </option>

                            <?php foreach($daoHospedeResponsavel->read() as $hospede) : ?>

                                <option value="<?= $hospede->getId() ?>">
                                    <?= htmlspecialchars($hospede->getNome()) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>
                    </div>
                    </div>

                     <div class="form-group mb-3">
                        <label for="idforma_pagamento">
                            Forma de Pagamento
                        </label>

                        <select
                            name="idforma_pagamento"
                            id="idforma_pagamento"
                            class="form-select"
                            required
                        >
                            <option value="">
                                Selecione uma forma de pagamento
                            </option>

                            <?php foreach($daoFormaPagamento->read() as $pagamento) : ?>

                                <option value="<?= $pagamento->getId() ?>">
                                    <?= htmlspecialchars($pagamento->getTipo()) ?>
                                </option>

                            <?php endforeach; ?>

                        </select>
                    </div>

                  
                    <div class="form-group mt-3">

                        <input
                            type="reset"
                            value="Limpar"
                            class="btn btn-secondary"
                        >

                        <input
                            type="submit"
                            value="Salvar"
                            class="btn btn-success"
                        >


                    </div>

                </form>

            </div>

        </main>
    </div>
</div>

<script src="../../js/bootstrap.bundle.min.js"></script>

</body>
</html>
