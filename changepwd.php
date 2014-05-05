<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
    mysql_connect("localhost","root", "root") or die(mysql_error());
    $db=  mysql_select_db("form") or die(mysql_errno());

    $var1=$_POST['uname'];
    $var2=$_POST['oldpwd'];
    $var3=$_POST['newpwd'];

    $sql="update users set password='$var3' where username='$var1'";
    $res=mysql_query($sql);

/*randomPrefix(10);

    function randomPrefix($length)
{
$random= "";

srand((double)microtime()*1000000);

$data = "AbcDE123IJKLMN67QRSTUVWXYZ";
$data .= "aBCdefghijklmn123opq45rs67tuv89wxyz";
$data .= "0FGH45OP89";

for($i = 0; $i < $length; $i++)
{
$random .= substr($data, (rand()%(strlen($data))), 1);
}

//return $random;
echo"<script language=\"javascript\">alert($random)</script>";
}*/



//echo"<script language=\"javascript\">alert($string)</script>";





    echo"<script language=\"javascript\">alert(\"Password changed successfully\")</script>";

?>
