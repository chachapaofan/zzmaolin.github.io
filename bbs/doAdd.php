<html>
  <head>
    <title>我的留言板</title>
  </head>
    <body background="3.jpg">
     <center>
     <h2>我的留言板</h2>
      <a href="bbs.php">添加留言</a>
      <a href="show.php">查看留言</a>
     <hr width="90%"/>

    <h3>添加留言</h3>
    <?php
    date_default_timezone_set('PRC');
    $title = $_POST["title"];
    $author = $_POST["author"];
    $content = $_POST["content"];
    $addtime = time();
    $bbs = "{$title}##{$author}##{$content}##{$addtime}@@@";

    $info = file_get_contents("bbs.txt");
    file_put_contents("bbs.txt",$info.$bbs);

    echo "陛下已成功留言！";
    ?>
     </center>
    </body>
 </html>