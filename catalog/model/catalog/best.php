<?php
class ModelCatalogBest extends Model {
    public function getBest() {
        $config = include('config.php');
        $limit = $config['limit_best'];
        $items = $this->db->query("SELECT product_id from " . DB_PREFIX ."order_product group by product_id desc limit " . $limit)->rows;
        $str = '';
        foreach ($items as $item) {
            $str .= $item['product_id'].",";
        }
        $str = substr($str,0,strlen($str)-1);
        $query = $this->db->query("SELECT product_id, image, price FROM " . DB_PREFIX . "product where status = 1 and product_id in( " . $str . ")");

        return $query->rows;
    }

}