<?php
    require "../../autoload.php";

    $quartoHasReserva = new QuartoHasReserva();

    $quartoHasReserva->setIdQuarto($_POST['idquarto']);
    $quartoHasReserva->setIdReserva($_POST['idreserva']);

    $dao = new QuartoHasReservaDAO();
    $dao->create($quartoHasReserva);

    header('Location: index.php');
    exit;
?>