<?php
    //show chi tiết sản phẩm
    function show_chitietsp($id_product){
        $conn = connect();
        $sql = "select * from product where 1";
        if ($id_product>0) {
            $sql.=" AND id_product=".$id_product."";
        }
        $sql.=" ORDER BY id_product desc";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>