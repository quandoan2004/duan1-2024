<div class="row mb">
                    <div class="boxtitle">Tài khoản </div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" id="">
                            </div>
                            <div class="row mb10">
                                Mật khẩu <br>
                                <input type="password" name="pass" id="">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name="" id="">Ghi nhớ tài khoản <br>
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">Danh mục </div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm){
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo'<li>
                                    <a href="'.$linkdm.'">'.$name.'</a>
                                </li>';
                                }
                            ?>
                            <!-- <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Balo</a>
                            </li> -->
                        </ul>   
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">Top 10 yêu thích</div>
                    <div class="row boxcontent">
                        <?php
                            foreach($dstop10 as $sp){
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                <a href="'.$linksp.'">'.$name.'</a>
                            </div>';
                            }
                        ?>
                    <!-- 
                        <div class="row mb10 top10">
                            <img src="view/images/1002.jpg" alt="">
                            <a href="#">Áo</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/1002.jpg" alt="">
                            <a href="#">Áo</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/1002.jpg" alt="">
                            <a href="#">Áo</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/1002.jpg" alt="">
                            <a href="#">Áo</a>
                        </div> -->
                    </div>
                </div>