<?php
  function loadAll_sanpham_home(){
    $sql = "SELECT * FROM san_pham ";
    $listsp = pdo_query($sql);
    return $listsp;
  }
  function loadAll_sanpham($kyw, $iddm)
  {
      $sql = "SELECT san_pham .*, danh_muc.ten_danh_muc  FROM  san_pham INNER JOIN danh_muc on danh_muc.id=san_pham.id_danh_muc WHERE 1";
      if ($kyw != '') {
          $sql .= " AND ten_san_pham LIKE '%" . $kyw . "%' ";
  }
      if ($iddm > 0) {
          $sql .= " AND id_danh_muc = '$iddm' ";
      }
      $sql .= " order by san_pham.id desc";
      $listsp = pdo_query($sql);
      return $listsp;
  }
?>