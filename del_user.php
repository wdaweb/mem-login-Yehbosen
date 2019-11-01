<?php
    include_once "base.php";

    $id=$_GET['id'];
    $sql="DELETE FROM user WHERE id='$id'";
    echo $sql;
    $pdo->exec($sql);

    // echo "<a href='admin.php'>已刪除資料，回會員料表</a>";
    header("location:admin.php");

?>