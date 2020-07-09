<?php
    class Anuncios extends modelGeral{
        public function getQuantidade(){
            $sql = "select count(*) as qtd from estrutura_mvc.anuncios";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $sql = $sql->fetch();
                return $sql['qtd'];

            }else{
                return 0;
            }
        }
    }
?>