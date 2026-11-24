
<?php
    class QuartoHasReservaDAO {

        public function create($quartoHasReserva) {
            try {
                $query = BD::getConexao()->prepare(
                    "INSERT INTO quarto_has_reserva(idquarto, idreserva)
                    VALUES (:q, :r)"
                );

                $query->bindValue(':q', $quartoHasReserva->getIdQuarto(), PDO::PARAM_INT);
                $query->bindValue(':r', $quartoHasReserva->getIdReserva(), PDO::PARAM_INT);

                if (!$query->execute()) {
                    print_r($query->errorInfo());
                }
            }
            catch (PDOException $e) {
                echo "Erro #1: " . $e->getMessage();
            }
        }

        public function read() {
            try {
                $query = BD::getConexao()->prepare(
                    "SELECT * FROM quarto_has_reserva"
                );

                if (!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaQuartoHasReserva = array();

                foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $linha) {

                    $quartoHasReserva = new QuartoHasReserva();

                    $quartoHasReserva->setIdQuarto($linha['idquarto']);
                    $quartoHasReserva->setIdReserva($linha['idreserva']);

                    array_push($listaQuartoHasReserva, $quartoHasReserva);
                }

                return $listaQuartoHasReserva;

            }
            catch (PDOException $e) {
                echo "Erro #2: " . $e->getMessage();
            }
        }

        public function find($idQuarto, $idReserva) {
            try {
                $query = BD::getConexao()->prepare(
                    "SELECT * FROM quarto_has_reserva
                    WHERE idquarto = :q AND idreserva = :r"
                );

                $query->bindValue(':q', $idQuarto, PDO::PARAM_INT);
                $query->bindValue(':r', $idReserva, PDO::PARAM_INT);

                if (!$query->execute()) {
                    print_r($query->errorInfo());
                }

                if ($linha = $query->fetch(PDO::FETCH_ASSOC)) {

                    $quartoHasReserva = new QuartoHasReserva();

                    $quartoHasReserva->setIdQuarto($linha['idquarto']);
                    $quartoHasReserva->setIdReserva($linha['idreserva']);

                    return $quartoHasReserva;
                }

                return null;

            }
            catch (PDOException $e) {
                echo "Erro #3: " . $e->getMessage();
            }
        }

        public function destroy($idQuarto, $idReserva) {
            try {
                $query = BD::getConexao()->prepare(
                    "DELETE FROM quarto_has_reserva
                    WHERE idquarto = :q AND idreserva = :r"
                );

                $query->bindValue(':q', $idQuarto, PDO::PARAM_INT);
                $query->bindValue(':r', $idReserva, PDO::PARAM_INT);

                if (!$query->execute()) {
                    print_r($query->errorInfo());
                }
            }
            catch (PDOException $e) {
                echo "Erro #4: " . $e->getMessage();
            }
        }

    }
?>
