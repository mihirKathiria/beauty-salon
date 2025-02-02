<?php
   $db = new mysqli("localhost","root","","beauty_salon");
   if($db->connect_error){
       die("Database Not found");
   }
?>