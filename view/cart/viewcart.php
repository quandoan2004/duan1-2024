<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">

            <div class="boxtitle">Giỏ Hàng</div>
            <div class="row boxcontent cart">
                <form action="index.php?act=updatecart" method="POST">
                    <table style="width: 100%; border: 1px solid #000;">
                        <?php
                        viewcart(1);
                        ?>
                    </table>
                    <div style="text-align: right;">
                        <input class="btn-update-cart" type="submit" name="updatecart" value="Cập nhật giỏ hàng"></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mb bill">
            <a href="index.php?act=bill"><input type="submit" value="Tiếp tục đặt hàng"></a>
            <a href="index.php?act=delcart"><input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>