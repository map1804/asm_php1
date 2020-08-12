<?php
    function search($ndtim){
        if (!empty($ndtim)) {
            $sql = "select * from product where name like '%$ndtim%'";
        }else{
            $sql = "select * from product";
        }
        
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?>