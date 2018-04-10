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

    <h3>删除留言</h3>
        <?php

        $id = $_GET["id"];
        $info = file_get_contents("bbs.txt");
        $bbslist = explode("@@@",$info);
        unset($bbslist[$id]);
        $ninfo = implode("@@@",$bbslist);
        file_put_contents("bbs.txt",$ninfo);
        echo "陛下已删除留言！";

        ?>




</center>
</body>
</html>