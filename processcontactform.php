<?php
require_once("admin/classes/db_connection.php");
$obj=new DBConnection();
$name=$_POST['name'];
$mailfrom=$_POST['email'];
$subject=$_POST['subject'];
$massege=$_POST['massege'];

$mailto="Mshaheer-ul-hassan@gmail.com";
$headers="From:".$mailfrom;
$text="You have recieve an e-mail from".$name.". \n \n".$massege;

mail($mailto,$subject,$text,$headers);
    header('location:index.php');
        

?>