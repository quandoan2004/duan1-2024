<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                        Mã sản phẩm <br>
                        <input type="text" name="masp" disabled>
                    </div>
                    <div class="row mb10">
                        Tên sản phẩm <br>
                        <input type="text"  name="tensp" >
                    </div>
                    <div class="row mb10">
                        Giá <br>
                        <input type="text" name="giasp" >
                    </div>
                    <div class="row mb10">
                        Hình <br>
                        <input type="text" name="hinh" >
                    </div>
                    <div class="row mb10">
                        Mô tả<br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=lisdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>