<?php
/**
 * Created by PhpStorm.
 * User: marce
 * Date: 12/01/2019
 * Time: 10:53
 */

class products extends model
{
    public function getList()
    {
        $products = array();

        $sql = "SELECT	
                    pro.*,
                    bra.name as brand_name,
                    cat.name as categorie_name
                FROM
                    products pro
                    INNER JOIN brands bra ON pro.id_brand = bra.id
                    INNER JOIN categories cat ON cat.id = pro.id_category";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {

            $products = $sql->fetchAll();

            foreach ($products as $key => $item) {

                

            }
        }

        return $products;
    }
}

?>