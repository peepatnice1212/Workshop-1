<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <table border="1">
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>
        <?php
$stmt = $pdo->prepare("SELECT * FROM product");
$stmt->execute();
while ($row = $stmt->fetch()) :
?>
        <tr>
            <td><?=$row ["pid"]?><br></td>
            <td><?=$row ["pname"]?><br></td>
            <td><?=$row ["pdetail"]?><br></td>
            <td><?=$row ["price"]?> บาท<br></td>
        </tr>
        <?php endwhile ?>
    </table>
</body>

</html>