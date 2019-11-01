<?php


function all($table){
    // 回傳整個資料
    include_once "base.php";

    $sql="select * from $table ";
    // $rows=$pdo->query($sql)->fetchALL();   //取出全部資料
    return $pdo->query($sql)->fetchALL();  

}
// $rows=all("user");


function find($table,$id){
    //取得某id資料
    include_once "base.php";
    $sql="SELECT * FROM $table WHERE id='$id'";
    return $pdo->query($sql)->fetch();
}

// find(9)['name']
$user=find('user',9);
echo $user['addr'];
echo "<br>";
$user2=find('user',9);
echo $user2['name']








?>
