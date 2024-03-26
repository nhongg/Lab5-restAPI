<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="lab5";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="update test set HoTen='test',SoDT='test' where Ma=1";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "update thanh cong";
}
else
{
    echo "loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>