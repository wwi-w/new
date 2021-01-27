<?php
if (isset($_POST['btn-send']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

if(empty($name)  || empty($email) ||empty($suject) || empty($msg) )
{
    header('Location: index.php?error');
}
else
     {
         $to="facebooksup171@gmail.com";

         if (mail($to,$subject,$msg,$email))
         {
             header('Location: index.php?success');
         }
     }
}
else
{
    header('Location:index.php');
}


?>