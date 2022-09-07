<?php

include_once "../base.php";

$acc=$_GET['acc']??$_POST['acc'];
echo $User->math('count','id',['acc'=>$acc]);


?>