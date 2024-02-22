<div class="row">
  <div class="row frmtitle mb">
    <h1>CHI TIẾT ĐƠN HÀNG</h1>
  </div>
  <div class="row frmcontent">
    <div class="row mb10 frmdsloai">
      <table>
        <tr>
          <th></th>
          <th>Mã đơn hàng</th>
          <th>Hình ảnh</th>
          <th>Số lượng hàng</th>
          <th>Đơn giá</th>
          <th>Thành tiền</th>
          <th>Địa chỉ</th>
          <th>Tình trạng đơn hàng</th>
        </tr>
        <?php
        foreach ($detailbill as $bill) {
          extract($bill);
          $ttdh = get_ttdh($bill['bill_status']);
          echo '<tr>
          <td><input type="checkbox" name="" id=""></td>
          <td>DAM-' . $bill['idbill'] . '</td>
          <td><img height="80" src="upload/' . $bill["img"] . '" alt=""></td>
          <td>' . $bill["soluong"] . '</td>
          <td><strong>' . $bill["price"] . '</strong> VNĐ</td>
          <td><strong>' . $bill["thanhtien"] . '</strong> VNĐ</td>
          <td>' . $bill['bill_address'] . '</td>
          <td>' . $ttdh . '</td>
      </tr>';
        }
        ?>

      </table>
    </div>
    <div class="row mb10">
      <a href="index.php?act=listbill"><input type="button" value="Quay trở lại"></a>
    </div>
  </div>
</div>