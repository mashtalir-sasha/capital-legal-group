<?
if(isset ($_POST['title'])) {$title=$_POST['title'];}
if(isset ($_POST['name'])) {$name=$_POST['name'];}
if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}
if(isset ($_POST['query'])) {$query=$_POST['query'];}
if(isset ($_POST['page'])) {$page=$_POST['page'];}
if(isset ($_POST['expert'])) {$expert=$_POST['expert'];}


//$to = "priadka@spg.kiev.ua";
$to = "mashtalir.sasha@gmail.com, mashtalir_sasha@ukr.net";


$message = "Форма: $title <br><br>";
if ( $expert || $name || $phonenum || $query || $page ) {
	$message .= ""
		. ( $expert ?" Зв'язатись з  $expert <br>" : "")
		. ( $name ?" Ім'я:  $name <br>" : "")
		. ( $phonenum ?" Телефон:  $phonenum <br>" : "")
		. ( $query ?" Запит:  $query <br>" : "")
		. ( $page ?"<hr><br> Заявку залишено на сторінці:  <a href='$page' target='_blank'>$page</a> <br>" : "");
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= 'From: "Заявки з сайту" <no-reply@spg.kiev.ua>';

if (!$title || !$phonenum) {
} else {
	mail($to,"New lead(spg.kiev.ua)",$message,$headers);
}

?>