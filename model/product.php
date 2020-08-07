<?php
    function themsp($name,$img,$type,$price,$catagory){
        $sql = "INSERT INTO product (name,img,id_type,price,id_catagory)
                VALUES ('$name','$img','$type','$price','$catagory')";
        $conn = connect();
        $conn->exec($sql);
    }

    function xoasp($id){
        $sql = "delete from product where id_product=".$id; 
        $conn = connect();
        $conn->exec($sql);
    }

    function getinfosp($id){
        $sql = "select * from product where id_product=".$id; 
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }

    function editsp($id){

    }
    
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