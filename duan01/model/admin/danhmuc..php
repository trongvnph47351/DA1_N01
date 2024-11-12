<?php 
   function loadAll_danh_muc(){
    $sql = "SELECT * FROM danh_muc order by id desc";
    $list = pdo_query($sql);
    return $list;
   }

?>