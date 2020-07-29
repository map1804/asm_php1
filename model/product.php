<?php 
    function showsp($id_catagory){
        $conn = connect();
        $sql = "select * from product where 1";
        if ($id_catagory) {
            $sql.=" AND id_product=".$id_catagory."";
        }
        $sql.=" order by id desc";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>