<?php
 error_reporting(E_ALL & ~E_DEPRECATED);
 $connect = mysql_connect('localhost','root','14011995') or die(mysql_error());
 mysql_select_db('mysql');
 header("Content-type: image/*");
 echo 'fghtrththth';
 
if ( isset( $_GET['id'] ) ) {
  $id = (int)$_GET['id'];
  if ( $id > 0 ) {
    $query = mysql_query("SELECT * FROM news WHERE id= '$id'");
    $res = mysql_fetch_array($query);
    if ( mysql_num_rows( $res ) == 1 ) {
      $image = mysql_fetch_array($res);
      echo $image['Content'];
    }
  }
}
?>