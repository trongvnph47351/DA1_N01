<style>
a button[type="submit"] {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
}

a button[type="submit"]:hover {
    cursor: pointer;
    background-color: red;
}

input {
    width: 100%;
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm danh mục</h1>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <form action="index.php?act=adddm" method="POST" enctype="multipart/form-data">
                                        Tên danh mục <br>
                                        <input type="text" name="tendm" class="form-control"><br><br>
                                        mô tả <br>
                                        <input type="text" name="mota"><br><br>
                                        image <br>
                                        <input type="file" name="img" accept="image/*"><br><br>
                                        <input type="submit" name="themmoi" value="Thêm danh mục"
                                            class="btn btn-primary">
                                    </form>
                                    <a href="index.php?act=listdm"><input type="button" value="Trở về danh sách"
                                            class="btn btn-primary"></a>
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