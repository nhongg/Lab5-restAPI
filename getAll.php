<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="lab5";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh select
$sql="select * from test";
//thuc thi lenh
$kq=$conn->query($sql);//tra ve 1 tap du lieu
while($row[]=$kq->fetch_assoc()){ //doc tung dong
    $json=json_encode($row);//chuyen thanh json
}
echo '{"test":'.$json.'}';
$conn->close();//dong ket noi

?>