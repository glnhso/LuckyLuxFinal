<?php
    class HospedeResponsavelDAO {
        public function create($hospedeResponsavel){
            try {
                $query = BD ::getConexao()->prepare(
                    "INSERT INTO hospede_responsavel(nome, telefone, idcategoria_hospede)
                    VALUES (:n, :t, :c)"
                );
                $query->bindValue(':n', $hospedeResponsavel->getNome(), PDO::PARAM_STR);
                $query->bindValue(':t', $hospedeResponsavel->getTelefone(), PDO::PARAM_STR);
                //bind para a chave estrangeira
                $query->bindValue(':c', $hospedeResponsavel->getCategoriaHospede()->getId(), PDO::PARAM_STR);

                if(!$query->execute()){
                    print_r($query->errorInfo());
                }
            }
             catch(PDOExeption $e){
                echo "Erro #1: " . $e->getMessage();
             }
        }
        
        public function read() {
            try {

                $query = BD::getConexao()->prepare(
                    "SELECT * FROM hospede_responsavel"
                );

                if (!$query->execute()) {
                    print_r($query->errorInfo());
                }

                $listaHospedes = array();

                // Instancia o DAO da categoria antes do foreach
                $daoCategoria = new CategoriaHospedeDAO();

                foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $linha) {

                    $hospede = new HospedeResponsavel();

                    $hospede->setId($linha['idhospede']);
                    $hospede->setNome($linha['nome']);
                    $hospede->setTelefone($linha['telefone']);

                    // Busca a categoria do hóspede
                    $categoriaHospede = $daoCategoria->find(
                        $linha['idcategoria_hospede']
                    );

                    $hospede->setCategoriaHospede($categoriaHospede);

                    array_push($listaHospedes, $hospede);
                }

                return $listaHospedes;

            } catch (PDOException $e) {

                echo "Erro #2: " . $e->getMessage();

            }
        }

         public function find($id) {
            try {

                $query = BD::getConexao()->prepare(
                    "SELECT * FROM hospede_responsavel WHERE idhospede = :i"
                );
                $query->bindValue(':i', $id, PDO::PARAM_INT);

                if (!$query->execute()) {
                    print_r($query->errorInfo());
                }

                if($linha = $query->fetch(PDO::FETCH_ASSOC)) {
                    $hospede = new HospedeResponsavel();
                    $hospede->setId($linha['idhospede']);
                    $hospede->setNome($linha['nome']);
                    $hospede->setTelefone($linha['telefone']);
                    // associacao 
                    $daoCategoriaHospede = new CategoriaHospedeDAO();
                    $categoriaHospede = $daoCategoriaHospede->find($linha['idcategoria_hospede']);
                    $hospede->setCategoriaHospede($categoriaHospede);

                    $hospede->setCategoriaHospede($categoriaHospede);
                }

                return $hospede;

            } catch (PDOException $e) {

                echo "Erro #3: " . $e->getMessage();

            }
        }

        public function update($hospedeResponsavel){
            try {
                $query = BD ::getConexao()->prepare(
                    "UPDATE hospede_responsavel
                    SET nome = :n, telefone = :t, idcategoria_hospede = :c
                    WHERE idhospede = :i"
                );
                $query->bindValue(':n', $hospedeResponsavel->getNome(), PDO::PARAM_STR);
                $query->bindValue(':t', $hospedeResponsavel->getTelefone(), PDO::PARAM_STR);
                $query->bindValue(':c', $hospedeResponsavel->getCategoriaHospede()->getId(), PDO::PARAM_INT);
                $query->bindValue(':i', $hospedeResponsavel->getId(), PDO::PARAM_INT);

                if(!$query->execute()){
                    print_r($query->errorInfo());
                }
            }
             catch(PDOExeption $e){
                echo "Erro #4: " . $e->getMessage();
             }
        }

        public function destroy($id) {
            try {
                $query = BD::getConexao()->prepare(
                    "DELETE FROM hospede_responsavel
                    WHERE idhospede = :i"
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