<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,'root','1740');
session_start();


function all($table){
    // 回傳整個資料表內容
    global $pdo;
    $sql="select * from $table ";
    // $rows=$pdo->query($sql)->fetchALL();   //取出全部資料
    return $pdo->query($sql)->fetchALL();  
}
function find($table,$id){
    //取得某id的所有資料
    global $pdo;
    $sql="SELECT * FROM $table WHERE id='$id'";
    return $pdo->query($sql)->fetch();
}

function insert($table,$data){
    //把$data的資料新增到資料庫
    global $pdo;
    $sql="insert into $table(``,``,``,.......) values(``,``,``,.......)";
    
    

    $pdo->exec($sql);




}




























?>