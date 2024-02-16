<?php
//ห้ามเปลี่ยนชื่อตัวแปร บรรทัดที่ 3-6 ของอาจารย์
$sName = "localhost";
$uName = "root";
$uPass = "";
$db = "PracticalDB";

try {
    $conn = new PDO(
        "mysql:host=$sName;db=$db;charset=UTF8",
         $uName,
         $uPass
    );


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Sorry! You cannot connect to database";
}
