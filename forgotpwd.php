<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$chars = 'abcdefghijklmnopqrstuvwxyz0123456789';
$temp_pw = substr( str_shuffle( $chars ), 0, 7 );
if ( check_unique( $temp_pw ) ) {
    $pw = $temp_pw;
}
echo"<script language=\"javascript\">alert($pw)</script>";
?>
