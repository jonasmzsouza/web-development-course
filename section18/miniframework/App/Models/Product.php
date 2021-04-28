<?php

    namespace App\Models;

    use MF\Model\Model;

    class Product extends Model {

        public function getProducts() {

            $query = 'SELECT id_product, ds_product, pr_product FROM tb_products';
            return $this->db->query($query)->fetchAll();
        }
    }

?>