<?php
class ModelCatalogView extends Model {
    public function getViews() {
        $config = include('config.php');
        $limit = $config['limit_view'];

        $query = $this->db->query("SELECT product_id, image, price FROM " . DB_PREFIX . "product where product_id >= ((SELECT MAX(product_id) FROM product )-(SELECT MIN(product_id) FROM product )) * RAND() + (SELECT MIN(product_id) FROM product ) and status = 1 LIMIT " . $limit);

        return $query->rows;
    }
}