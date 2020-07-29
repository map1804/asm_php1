<?php 
    //show sản phẩm theo danh mục
    function showsp_theodanhmuc($id_danhmuc){
        $conn = connect();
        $sql = "select * from product where 1";
        if ($id_danhmuc>0) {
            $sql.=" AND id_type=".$id_danhmuc."";
        }
        $sql.=" order by id desc";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    //show hết collection
    function showsp(){
        $conn = connect();
        $sql = "select * from product where 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>