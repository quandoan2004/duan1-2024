<div class="row">
  <div class="row frmtitle">
    <h1>Sửa trạng thái đơn hàng</h1>
  </div>
  <div class="row frmcontent">
    <form action="index.php?act=updatebill" method="post">
      <div class="row mb10">
        Mã đơn hàng <br>
        <input type="text" name="maloai" disabled value="<?= $infobill['id'] ?>">
      </div>
      <div class="row mb10">
        Trạng thái <br>
        <select name="bill_status" id="status">
          <option value="0" <?php if ($infobill['bill_status'] == 0) echo 'selected' ?>>Chờ xác nhận</option>
          <option value="1" <?php if ($infobill['bill_status'] == 1) echo 'selected' ?>>Đang xử lý</option>
          <option value="2" <?php if ($infobill['bill_status'] == 2) echo 'selected' ?>>Đang giao hàng</option>
          <option value="3" <?php if ($infobill['bill_status'] == 3) echo 'selected' ?>>Đã giao hàng</option>
        </select>
      </div>
      <div class="row mb10">
        <input type="hidden" name="id" value="<?php if (isset($infobill['id'])) echo $infobill['id']; ?>">
        <input type="submit" name="capnhat" value="CẬP NHẬT">
        <input type="reset" value="NHẬP LẠI">
        <a href="index.php?act=listbill"><input type="button" value="DANH SÁCH"></a>
      </div>

    </form>
  </div>
</div>