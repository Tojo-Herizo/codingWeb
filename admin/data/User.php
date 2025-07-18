<?php
//Get All Users
function getAll($conn) {
    $sql = "SELECT fname , username FROM users";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    
    if ($stmt->rowCount() >= 1) {
        $data = $stmt->fetchAll();
        return $data ;
    }else{
        return 0;
    }
   
}