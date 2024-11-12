<div class="card">

    <div class="card-body">
        <h1>Danh muc</h1>
        <a href="" class="btn btn-primary">Them moi</a>
        <table class="table ">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Img</th>
                    <th>Thao tác</th>
                </tr>

            </thead>
            <tbody>

                <?php 
                foreach (  $list_danh_muc as $key => $danh_muc): 
                ?>



                <?php endforeach ?>
            </tbody>
        </table>


    </div>
</div>