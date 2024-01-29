<?php
    function insert_taikhoan($email,$user,$pass){
        $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'" ;
        $sp=pdo_query_one($sql);
        return $sp ;
    }
?>