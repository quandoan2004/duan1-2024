<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đơn hàng của bạn</div>
            <div class="row boxcontent cart">
                <table style="width: 100%; border: 1px solid #000; padding: 10px;">
                    <tbody style="text-align: center;">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số lượng mặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                            <th>Thao tác</th>
                        </tr>
                        <?php
                        if (is_array($listbill)) {
                            // var_dump($listbill);die(); 
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '<tr>
                            <td>DAM-' . $bill['id'] . '</td>
                            <td>' . $bill['ngaydathang'] . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $bill['total'] . '</td>
                            <td>' . $ttdh . '</td>
                            <td><a href="index.php?act=detailbill&id=' . $bill['id'] . '"><input type="button" value="Chi tiết"></a></td>
                        </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>