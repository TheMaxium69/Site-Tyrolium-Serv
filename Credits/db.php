 <?php

  define('HOST','54.37.8.211:3306');
  define('DB_NAME','tyroliumdb');
  define('USER','site');
  define('PASS','1234');

  /*try{
      $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXEPTION);
      echo "Connect > OK !";
  } catch(PDOEXeption $e){
      echo $e;
  */
 try{
  $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
  $db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
 }catch(PDOEXeption $e){
  echo $e;
 }
?>