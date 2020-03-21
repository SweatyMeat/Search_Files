<?php
  if(isset($_POST['submit'])){
  if(isset($_GET['go'])){
  if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){
  $name=$_POST['name'];
  //connect  to the database
  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("main");
  //-query  the database table
  $sql="SELECT Devmac, Strongest_signal, Type FROM databaseTableTwo WHERE  Devmac LIKE '%" . $name . "%' OR Type LIKE '%" . $name  ."%'";
  }
  else{
  echo  "<p>Please enter a search query</p>";
  }
  }
  }
?>