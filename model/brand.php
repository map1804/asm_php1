<!-- <?php 
    function dsdm(){
        $conn = connect();
        $sql = "select * from brand order by id desc";
        $stmt = $conn->prepare("$sql");
        $stmt->execute();
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }
?> -->