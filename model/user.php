<?php
    function checkuser($user, $pass){
        $sql = "select * from nguoidung where user='".$user."' and pass='".$pass."'";
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
?>