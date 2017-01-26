<?php $loadingurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(!isset($_GET['steamid'])){ 
die ("
	Run this: <a href='$loadingurl?steamid=%s'>$loadingurl?steamid=%s</a><br><br>
	 ");} ?>