<html>
   <head>
       <title>我的留言板</title>
   </head>
   <body background="4.jpg">
     <center>
         <h2>我的留言板</h2>
         <a href="bbs.php">添加留言</a>
         <a href="show.php">查看留言</a>
         <hr width="90%"/>

         <h3>添加留言</h3>
         <form action="doAdd.php" method="post">
             <table width="330" border="2" cellpadding="4" bordercolor="green" background="2.jpg">
                 <tr>
                     <td align="right">留言标题：</td>
                     <td><input type="text" name="title"/> </td>
                 </tr>
                 <tr>
                     <td align="right">留言者：</td>
                     <td><input type="text" name="author"/> </td>
                 </tr>
                 <tr>
                     <td align="right" valign="top">留言内容：</td>
                     <td><textarea name="content" rows="6" cols="30"></textarea> </td>
                 </tr>
                 <tr>
                     <td colspan="2" align="center">
                         <input type="submit" value="朕要戳这">&nbsp;&nbsp;&nbsp;
                         <input type="reset" value="不要碰我">
                     </td>
                 </tr>
             </table>
         </form>
     </center>
   </body>
</html>