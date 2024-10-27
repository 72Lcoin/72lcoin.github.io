<?php
$servername = "mysql.sqlpub.com:3306";$username = "lcoindjl";
$password = "8wMSI1PzAJ6EDWrR";$dbname = "lcoinuser";

// 创建连接
$conn = new mysqli($servername, $username,$password, $dbname);

// 检查连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "SELECT id, password FROM users";$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row =$result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Password: " .$row["password"] ."<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
