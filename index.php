<?php 
if(isset($_GET['locale'])){

  setcookie('locale',$_GET['locale'], time() + (86400 * 30), "/");
  
}


?>

<html>
  <body>
    <ul style="float:right;list-style-type: none;"><li style="float:left"><a style="text-decoration:none" href="/?locale=en">
      <?php 
      if($_GET['locale]=='en'){
      echo 'EN';
      
      }else{
      echo 'ອັງກິດ';
      }
      ?></a></l> | <li style="float:left"><a style="text-decoration:none" href="/?locale=la">LA</a></li></ul>
    <img src="./demo.png"></img>
  </body>  
</html>
