<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    mysql_connect("localhost","root","root") or die(mysql_error());
    $db=  mysql_select_db("form") or die(mysql_errno());

    $var1=$_POST['user'];
    $var2=$_POST['password'];
    $var3=$_POST['phoneno'];
    $n=preg_match("/[A-Za-z]/", $var1);
    $n1=preg_match("/\w/", $var2);
    $n2=preg_match("/\d{10}/", $var3);
    if($var1==null | $var2==null | $var3==null)
    {
         echo"<script language=\"javascript\">alert(\"Enter all the details\")</script>";
         echo("<script>\"location.replace(\"register.html\",'blank')\"</script>");
    }
    else
    {
       if($n)
       {
           if($n1)
           {
               if($n2)
               {
                   $sql="insert into users values('$var1','$var2','$var3')";
                   $res=mysql_query("$sql");
                   echo"<script language=\"javascript\">alert(\"insertion was successful\")</script>";
                   echo("<script>\"location.replace(\"form.html\")\"</script>");
               }
               else
                   echo"<script language=\"javascript\">alert(\"invalid phone number\")</script>";
           }
           else
               echo"<script language=\"javascript\">alert(\"invalid password\")</script>";
       }
       else
           echo"<script language=\"javascript\">alert(\"invalid username\")</script>";
    }

?>
