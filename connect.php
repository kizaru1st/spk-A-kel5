<?php
$konek=new mysqli('localhost','root','','tb-spk');
if ($konek->connect_errno){
    "Database Error".$konek->connect_error;
}
?>