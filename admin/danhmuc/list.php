<div class="row">
            <div class="row frmtitle">
                <h1>Danh sách loại hàng</h1>
            </div>
            <div class="row frmcontent">
                <div class="row 10 frmdsloai">
                    <table>
                        <tr>
                            <th>
                            </th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th>
                            </th>
                        </tr>
                        <?php
                        foreach ($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><input type="button" value="Sửa"><input type="button" value="Xóa"></td>
                        </tr>';
                        }
                        ?>
                        
                        
                    </table>
                </div>
                <div class="row 10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="admin.html"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>