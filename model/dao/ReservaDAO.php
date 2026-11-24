<?php
    class ReservaDAO {
        public function create($reserva) {
            try {
                $query = BD::getConexao()->prepare(
                    "INSERT INTO reserva(datacheckin, datacheckout, valor, idhospede, idforma_pagamento) 
                    VALUES (:h, :o, :v, :ih, :ip)"
                );
                $query->bindValue(':h', $reserva->getCheckin(), PDO::PARAM_STR);
                $query->bindValue(':o', $reserva->getCheckout(), PDO::PARAM_STR);
                $query->bindValue(':v', $reserva->getValor(), PDO::PARAM_STR);
                $query->bindValue(':ih', $reserva->getIdhospede(), PDO::PARAM_INT);
                $query->bindValue(':ip', $reserva->getIdforma_pagamento(), PDO::PARAM_INT); 

                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }
            }
            catch(PDOException $e) {
                echo "Erro #1: " . $e->getMessage();
            }
        }

        public function read() {
            try {
                $query = BD::getConexao()->prepare("SELECT * FROM reserva");
                
                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaReservas = array();
                foreach($query->fetchAll(PDO::FETCH_ASSOC) as $linha) {
                    $reserva = new Reserva(); // Classe bean
                    $reserva->setId($linha['idreserva']);
                    $reserva->setCheckin($linha['datacheckin']);
                    $reserva->setCheckout($linha['datacheckout']);
                    $reserva->setValor($linha['valor']);
                    $reserva->setIdhospede($linha['idhospede']);
                    $reserva->setIdforma_pagamento($linha['idforma_pagamento']);
                    array_push($listaReservas, $reserva);
                }
                
                return $listaReservas;
            } 
            catch(PDOException $e) {
                echo "Erro #2: " . $e->getMessage();
            }            
        }

            public function find($id) {
                    try {
                    $reserva = null;

                    $query = BD::getConexao()->prepare(
                        "SELECT * FROM reserva WHERE idreserva = :i"
                    );

                    $query->bindValue(':i', $id, PDO::PARAM_INT);

                    if(!$query->execute()) {
                        print_r($query->errorInfo());
                    }

                    if($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                        $reserva = new Reserva();

                        $reserva->setId($linha['idreserva']);
                        $reserva->setCheckin($linha['datacheckin']);
                        $reserva->setCheckout($linha['datacheckout']);
                        $reserva->setValor($linha['valor']);
                        $reserva->setIdhospede($linha['idhospede']);
                        $reserva->setIdforma_pagamento($linha['idforma_pagamento']);

                    }

                    return $reserva;

                }
                catch(PDOException $e) {
                    echo "Erro #3: " . $e->getMessage();
                }
            }


        public function update($reserva) {
            try {
                $query = BD::getConexao()->prepare(
                    "UPDATE reserva
                    SET datacheckin = :h,
                        datacheckout = :o,
                        valor = :v,
                        idhospede = :ih,
                        idforma_pagamento = :ip
                    WHERE idreserva = :i"
                );
                $query->bindValue(':h', $reserva->getCheckin(), PDO::PARAM_STR);
                $query->bindValue(':o', $reserva->getCheckout(), PDO::PARAM_STR);
                $query->bindValue(':v', $reserva->getValor(), PDO::PARAM_STR);
                $query->bindValue(':i', $reserva->getId(), PDO::PARAM_INT);
                $query->bindValue(':ih', $reserva->getIdhospede(), PDO::PARAM_INT);
                $query->bindValue(':ip', $reserva->getIdforma_pagamento(), PDO::PARAM_INT);

                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }
            }
            catch(PDOException $e) {
                echo "Erro #4: " . $e->getMessage();
            }
        }

        public function destroy($id) {
            try {
                $query = BD::getConexao()->prepare(
                    "DELETE FROM reserva
                    WHERE idreserva = :i"
                );                
                $query->bindValue(':i', $id, PDO::PARAM_INT);

                if(!$query->execute()) {
                    print_r($query->errorInfo());
                }
            }
            catch(PDOException $e) {
                echo "Erro #5: " . $e->getMessage();
            }
        }
    }