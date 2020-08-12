<?php
    function thembl($name,$id_user,$id_product,$noidung){
        $sql = "INSERT INTO comment (name,id_user,id_product,noidung)
                VALUES ('$name','$id_user','$id_product','$noidung')";
        $conn = connect();
        $conn->exec($sql);
    }
    function showbl(){
        $sql = "select * from comment order by id_comment desc";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>    

