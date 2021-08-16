

<html>
  
  <body>
  <?php

$_text['welcome1']['en'] = 'Welcome to LAO - ASEAN Hospital';
$_text['welcome2']['en'] = 'Khampheangmeung Road, Donkoi Village, Sisattanak District, Vientiane Lao PDR';
$_text['welcome3']['en'] = 'Tel: 856-21-330374 to 3 or +856-21-330445 to 7 Fax: +856-21-330376';

$_text['welcome1']['la'] = 'ໂຮງຫມໍລາວອາຊຽນຍິນດີຕອນຮັບ';
$_text['welcome2']['la'] = 'ຖະນົນກຳແພງເມືອງ, ບ້ານດອນກອຍ, ເມືອງສີສັດຕະນາກ, ນະຄອນຫລວງວຽງຈັນ ສປປລາວ';
$_text['welcome3']['la'] = 'ໂທ: 856-21-330374 ເຖິງ 3 or +856-21-330445 ເຖິງ 7 ແຟັກ: +856-21-330376';


$lang = "la";



if ( isset($_COOKIE['lang']) ) $lang = $_COOKIE['lang'];
$php_self = $_SERVER['PHP_SELF'];

if ( $lang == 'en' ){
  echo '<a href="changelang.php?lang=la">lao</a>';
}else{
  echo '<a href="changelang.php?lang=en">ອັງກິດ</a>';
}

?>

    <h1 style="text-align:center;"><?php echo $_text['welcome1'][$lang] ?></h1>
    <p style="text-align:center;"><img src="./laoasean-hospital-logo.jpg"></img></p>
    <p style="text-align:center;"><?php echo $_text['welcome2'][$lang] ?></p>
    <p style="text-align:center;"><?php echo $_text['welcome3'][$lang] ?></p>
  </body>  
  <title><?php echo $_text['welcome1'][$lang] ?></title>
</html>
