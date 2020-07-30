<?php
    foreach($dssp as $sp){
        $id = $sp['id_product'];
        $name = $sp['name'];
        $img = "../uploaded/".$sp['img'];
        $price = $sp['price'];
        $link = 'index.php?page=chitiet_sp&'.$id;

        if(is_file($img)){
            $img = '<img class="card-img-top" src="'.$img.'" alt="Card image cap">';
        }else{
            $img='';
        }

        echo '<div class="col5 mar-2">
                <div class="card">
                    '.$img.'
                    <div class="card-body">
                        <a href="'.$link.'">
                        <p class="card-text">'.$name.'</p>
                        </a>
                        <p class="card-gia">'.$price.'</p>
                    </div>
                </div>
            </div>';
    }
?>