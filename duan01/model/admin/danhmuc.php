<?php 
   function loadAll_danh_muc(){
    $sql = "SELECT * FROM danh_muc ";
    $list = pdo_query($sql);
    return $list;
   }
   function   insert_danh_muc($tendm, $mota, $img){
      $sql = "INSERT INTO `danh_muc` ( `ten_danh_muc`, `mo_ta`, `img`) VALUES ( '$tendm', '$mota', '$img')";
      pdo_execute($sql);
   }

   function xoadm($id){
      $sql ="DELETE FROM danh_muc WHERE id=$id";
      pdo_execute($sql);
   }
?>