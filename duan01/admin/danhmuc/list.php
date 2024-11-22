<style>
.button {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
}

.button:hover {
    cursor: pointer;
    background-color: #CCC;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý danh mục</h1>
                </div>
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <!-- Left navbar links -->
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách danh mục</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="?act=themdm" class="btn btn-primary">Thêm mới</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên danh mục</th>
                                        <th>Mô tả</th>
                                        <th>Trạng thái</th>
                                        <th>Img</th>
                                        <th>Thao tác</th>
                                    </tr>

                                    <?php foreach ($list_danh_muc as $index => $list ): ?>

                                    <tr>
                                        <td><?=$index+1?></td>
                                        <td><?=$list['ten_danh_muc']?></td>
                                        <td><?=$list['mo_ta']?></td>
                                        <td><?=$list['trang_thai']?></td>
                                        <td><img src="<?=$list['img']?>" alt="" srcset="" width="100px " height="100px">
                                        </td>
                                        <td>
                                            <a href=" index.php?act=xoadm&id=<?= ($list['id']) ?> 
                                            " class="btn btn-danger" onclick="return confirm('Sua?' )">Xóa</a>
                                            <a href="index.php?act=sua&id=<?= $list['id'] ?>"
                                                class="btn btn-warning">Sửa</a>
                                        </td>
                                    </tr>
                                    <?php endforeach ; ?>


                                </thead>

                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->