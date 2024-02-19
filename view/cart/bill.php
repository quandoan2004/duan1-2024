<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="row mb">
                <div class="boxtitle">Thông tin đặt hàng</div>
                <div class="row boxcontent billform">
                <table>
                <?php
                if (isset($_SESSION['user']) && isset($_SESSION['user']['name'])) {
                    $name = $_SESSION['user']['name'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" value="<?=$name?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Điện Thoại</td>
                        <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                    </tr>
                </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">Phương thức thanh toán </div>
                <div class="row boxcontent">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt">Thanh toán Online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                    <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                    <div class="row boxcontent cart">
                        <table>
                            <?php
                                viewcart(0);
                                ?>
                        </table>
                    </div>
            </div>
            <div class="row mb bill">
                <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>