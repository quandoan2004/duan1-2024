<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <?php
                extract($onesp);
            ?>
            <div class="boxtitle">Sản phẩm chi tiết</div>
            <div class="row boxcontent">
            <?php
                $img=$img_path.$img;
                echo '<div class="row mb spct"><img src="'.$img.'"></div>';
                echo $mota;
            ?>
            </div>
        </div>
        <div class="row mb ">
            <div class="boxtitle">Binh luận</div>
            <div class="row boxcontent">

            </div>
        </div>
        <div class="row mb">
            <div class="boxtitle">Sản phẩm cùng loại</div>
            <div class="row boxcontent">

            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "boxright.php";
        ?>
    </div>
</div>