<?php
include "../Model/pdo.php";
include "../Model/danhmuc.php";
include "../Model/sanpham.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
        case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm = loadone_danhmuc($_GET['id']);

                }
                include "danhmuc/update.php";
                break;
        case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat']>0)){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc($sql);
                include "danhmuc/list.php";
                break;
            /* controller sản phẩm */  
            
            
            case 'addsp':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_sanpham($tenloai);
                    $thongbao="Thêm thành công";
                }
                include "sanpham/add.php";
                break;
            case 'listsp':
                $listsanpham=loadall_sanpham();
                include "sanpham/list.php";
                break;
            case 'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham();
                    include "sanpham/list.php";
                    break;
            case 'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        $dm = loadone_sanpham($_GET['id']);
    
                    }
                    include "sanpham/update.php";
                    break;
            case 'updatesp':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat']>0)){
                        $tenloai=$_POST['tenloai'];
                        $id=$_POST['id'];
                        update_danhmuc($id,$tenloai);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc($sql);
                    include "danhmuc/list.php";
                    break;    
            
            
            default:
                include "home.php";
                break;
    }
}else {
    include "home.php";
}

include "footer.php";
