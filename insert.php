<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="lab5";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="insert into test (HoTen,SoDT,Ma) values ('b','09876443',1)";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "insert thanh cong";
}
else
{
    echo "loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>