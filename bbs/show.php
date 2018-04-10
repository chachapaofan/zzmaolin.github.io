<html>
<head>
    <title>我的留言板</title>
</head>
<body background="8.jpg">
<center>
    <h2>我的留言板</h2>
    <a href="bbs.php">添加留言</a>
    <a href="show.php">查看留言</a>
    <hr width="90%"/>

    <h3>查看留言</h3>
    <table border="2" width="700"cellpadding="4" bordercolor="red" background="2.jpg">
        <tr>
            <th>留言标题</th>
            <th>留言人</th>
            <th>留言内容</th>
            <th>留言时间</th>
            <th>操作</th>
        </tr>
        <?php
         date_default_timezone_set('PRC');
         $info = file_get_contents("bbs.txt");
         $info = rtrim($info,"@");
         $bbslist = explode("@@@",$info);

         foreach ($bbslist as $k=>$v)
         {
             $bbs = explode("##",$v);
             echo "<tr>";
             echo "<td>{$bbs[0]}</td>";
             echo "<td>{$bbs[1]}</td>";
             echo "<td>{$bbs[2]}</td>";
             echo "<td>".date("Y-m-d H:i:s",$bbs[3])."</td>";
             echo "<td><a href='del.php?id=$k'>不要动</a></td>";
             echo "</tr>";
         }
        ?>


    </table>

</center>
</body>
</html>