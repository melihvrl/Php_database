<?php

require_once 'baglan.php';


if (isset($_POST['insertislemi'])) {
	

	$kaydet=$db->prepare("INSERT INTO information SET 

		kullaniciadi=:kullaniciadi,
		soyadi=:soyadi
		

		");


	$insert=$kaydet->execute(array(

		'kullaniciadi'=>$_POST['kullaniciadi'],
		'soyadi'=>$_POST['soyadi']
		


	));

	if($insert){

		//echo "Kayıt başarılı";

		Header("Location:gui.php?durum=ok&id=$id");
		exit;

	}else{
		//echo "Kayıt başarısız";
		Header("Location:gui.php?durum=no&id=$id");

	}





}




?>