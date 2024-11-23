<div class="container mt-3">
    <div class="alert alert-success">
        <h3>QUẢN LÝ SẢN PHẨM</h3>
    </div>     
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col">
        <label>MÃ SẢN PHẨM</label>
        <input type="text" class="form-control" placeholder="auto number" disabled>
      </div>
      <div class="col">
        <label>TÊN SẢN PHẨM</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="col">
        <label>ĐƠN GIÁ</label>
        <input type="text" class="form-control" name="dongia">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <label>HÌNH ẢNH</label>
        <input type="file" class="form-control" name="img">
      </div>
      <div class="col">
        <label>DANH MỤC</label>
        <!-- <input type="text" class="form-control" > -->
        <br>
        <select name="maloai" class="form-control">
          <option value="1">Nước hoa</option>
          <option value="2">Máy tính</option>
          <option value="3">Điện thoại</option>
          <option value="4">Mũ thời trang</option>
          <option value="5">Máy ảnh</option>
          <option value="6">Đồng hồ đeo tay</option>
          <option value="7">Áo phông</option>
          <option value="8">Quần tây</option>
        </select> 
      </div> 
      <div class="col">
            <label>SỐ LƯỢT XEM</label>
            <input type="text" class="form-control" value="" disabled>
      </div>
    </div>
    <br>
    <div class="mb-3 mt-3">
      <label for="comment">MÔ TẢ</label>
      <textarea class="form-control" rows="5" id="comment" name="mota"></textarea>
    </div>
    <button type="submit" class="btn btn-success" name="btn_insert">Thêm mới</button>
    <button type="reset" class="btn btn-success">Nhập lại</button>
    <button type="button" class="btn btn-success"><a href="?act=listhanghoa">Danh sách</a></button>
  </form>
</div>