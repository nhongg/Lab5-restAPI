<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="lab5";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="delete from test where Ma=1";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "xoa thanh cong";
}
else
{
    echo "loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>