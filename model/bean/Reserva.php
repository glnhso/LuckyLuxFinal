
<?php
class Reserva {

    // Atributos
    private $id;
    private $checkin;
    private $checkout;
    private $valor;
    private $idhospede;
    private $idforma_pagamento;

    // Getters e Setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCheckin() {
        return $this->checkin;
    }

    public function setCheckin($checkin) {
        $this->checkin = $checkin;
    }

    public function getCheckout() {
        return $this->checkout;
    }

    public function setCheckout($checkout) {
        $this->checkout = $checkout;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getIdhospede() {
        return $this->idhospede;
    }

    public function setIdhospede($idhospede) {
        $this->idhospede = $idhospede;
    }

    public function getIdforma_pagamento() {
        return $this->idforma_pagamento;
    }

    public function setIdforma_pagamento($idforma_pagamento) {
        $this->idforma_pagamento = $idforma_pagamento;
    }
}
