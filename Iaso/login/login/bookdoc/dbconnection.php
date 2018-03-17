<?php
$con = new mysqli("localhost","root","root","tech");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
?>