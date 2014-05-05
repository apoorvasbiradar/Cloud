<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
   
    mysql_connect("localhost","root", "root") or die(mysql_error());
    $db=mysql_select_db("form") or die(mysql_errno());

    $var1=$_POST['username'];
    $var2=$_POST['password'];

    $que="select * from users where username='$var1' and password='$var2'";
    $res=mysql_query($que);
    $pqr=mysql_num_rows($res);
    if($pqr!=null)
    {
        //echo"<script language=\"javascript\">alert(\"welcome $var1\")</script>";
        echo("<script>\"location.replace(\"welcome.html\")\"</script>");
    }
    else
    {
        //echo"<script language=\"javascript\">alert(\"invalid details\")</script>";
        echo("<script>\"location.replace(\"login.html\")\"</script>");
    }
?>
