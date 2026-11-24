<?php
    require "../../autoload.php";

    // Coletar os valores dos IDs pela URL
    $idQuarto = $_GET['idquarto'];
    $idReserva = $_GET['idreserva'];

    // Instanciar um objeto da classe QuartoHasReservaDAO
    $dao = new QuartoHasReservaDAO();

    // Invocar o método para excluir
    $dao->destroy($idQuarto, $idReserva);

    // Redirecionar para o index
    header('Location: index.php');
    exit;
?>