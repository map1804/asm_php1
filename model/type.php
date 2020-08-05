<?php 
    function themloaisp($name){
        $sql = "INSERT INTO type (name)
                VALUES ('$name')";
        $conn = connect();
        $conn->exec($sql);
    }

    function xoaloaisp($id){
        $sql = "delete from type where id_type=".$id; 
        $conn = connect();
        $conn->exec($sql);
    }
    
    // lấy loại sp 
    function getinfoloaisp($id){
        $sql = "select * from type where id_type=".$id; 
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }
    function editloaisp($id,$name){
        $sql = "update type set name='$name' where id_type=".$id;
        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
    function danhsachcacdanhmuc($home){
        // order by id_type asc
        $sql = "select * from type where 1";
        if ($home == 1) {
            $sql.=" order by id_type asc";
        }else{
            $sql.=" order by id_type desc";
        }

        $conn = connect();
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

    // function to_slug($str) {
    //     $str = trim(mb_strtolower($str));
    //     $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    //     $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    //     $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    //     $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    //     $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    //     $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    //     $str = preg_replace('/(đ)/', 'd', $str);
    //     $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    //     $str = preg_replace('/([\s]+)/', '-', $str);
    //     return $str;
    // }
