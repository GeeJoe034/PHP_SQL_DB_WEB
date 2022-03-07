<?php
//เชื่อมต่อฐานข้อมูล
require('connect.php');

//ชื่อตัวแปร             รับค่ามาจาก insertform
$univ_Thainame    =  $_POST["univ_Thainame"];
$univ_Engname =  $_POST["univ_Engname"];
$univ_Numaddr    = $_POST["univ_Numaddr"];
$univ_Addr        =  $_POST["univ_Addr"];

//      บันทึกข้อมูล    ชื่อฐานข้อมูล            ชื่อฟิล
$sql = "INSERT INTO tbuniversity(univ_Thainame,univ_Engname,univ_Numaddr,univ_Addr)
                 //ข้อมูลที่ต้องการใส่ ปล.ในตัวอย่างเอาตัวแปรมาเพิ่ม
        VALUES('$univ_Thainame','$univ_Engname','$univ_Numaddr','$univ_Addr')";
//ตัวแปรresult 
$result=mysqli_query($connect,$sql); // สั่งรันคำสั่ง sql
// ถ้าresultผ่าน
if($result){
 // กลับไปที่ index
    header("location:index.php");
    exit(0);
}else{
  // แจ้ง error
    echo mysqli_error($connect);
}

?>
