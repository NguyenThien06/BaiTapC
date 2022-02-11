<table class="table">
    <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Tên Danh Mục</th>
            <th style="width: 100px">Sắp Xếp</th>
            <th style="width: 150px">Trạng Thái</th>
            <th style="width: 200px">Ngày Cập Nhật</th>
            <th style="width: 50px">Sửa</th>
            <th style="width: 50px">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?=\App\Helpers\Helper::menuShow($menus)?>
    </tbody>
</table>