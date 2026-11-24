<?php
require "../../autoload.php";

$reserva = new Reserva();

$reserva->setCheckin($_POST['checkin']);
$reserva->setCheckout($_POST['checkout']);
$reserva->setValor($_POST['valor']);

$reserva->setIdhospede($_POST['idhospede']);
$reserva->setIdforma_pagamento($_POST['idforma_pagamento']);


$dao = new ReservaDAO();

$dao->create($reserva);

header('Location: index.php');
exit;