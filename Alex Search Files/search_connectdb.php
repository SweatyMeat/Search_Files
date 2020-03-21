<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $db=mysql_connect ("localhost",  "root", "") or die ('I cannot connect  to the database because: ' . mysql_error());
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
  ?>