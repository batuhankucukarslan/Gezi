<?php include 'baglan.php';


if($_POST['kayit-ol']){
		 
		$epostasay = $db->prepare("SELECT * FROM kullanici where mail=:mail");
		$epostasay->execute(array(
			'mail' => $_POST['mail']
		));
		if($epostasay->RowCount() > 0){
			//zaten bu eposta sisteme kayıtlı
			$_SESSION['durum'] = "Eposta adresi sistemde mevcut";
			Header("Location:../kayit.php");
		}else{
			$sifre = hash('whirlpool', $_POST['sifre']);
			$ayarkaydet=$db->prepare("INSERT INTO kullanici SET 
			ad_soyad=:ad_soyad, 
			mail=:mail, 
			telefon=:telefon, 
			sifre=:sifre 
			");
			$update=$ayarkaydet->execute(array(
			'ad_soyad' => $_POST['adsoyad'], 
			'mail' => $_POST['mail'], 
			'telefon' => $_POST['telefon'], 
			'sifre' => $sifre
			));
			
		 
			if ($update) {
				$_SESSION['durum'] = "Kayıt başarıyla tamamlandı";
				Header("Location:../giris.php");
			}else{
				$_SESSION['durum'] = "Sistem Hatası";
				Header("Location:../kayit.php");
			}
		} 
}

if($_POST['giris-yap']){
	 
		//kullanici girisi
		$sifre = hash('whirlpool', $_POST['sifre']);
		$kullanicisay = $db->prepare("SELECT * FROM kullanici where mail=:mail and sifre=:sifre");
		$kullanicisay->execute(array(
			'mail' => $_POST['mail'],
			'sifre' => $sifre
	));
	if($kullanicisay->RowCount() > 0){
		$kullanicicek = $kullanicisay->fetch(PDO::FETCH_ASSOC);
		$_SESSION['kullanici_id'] = $kullanicicek['id'];  
		Header("Location:../index.php");
	}else{
		$_SESSION['durum'] = "E posta veya şifre yanlış";
		Header("Location:../giris.php");
	} 
}
	
 

if($_POST['guncelle']){ 

		$sifre = hash('whirlpool', $_POST['sifre']);
		$ayarkaydet=$db->prepare("UPDATE kullanici SET 
		ad_soyad=:ad_soyad, 
		mail=:mail, 
		telefon=:telefon, 
		sifre=:sifre 
		WHERE id =".$_SESSION['kullanici_id']);
		$update=$ayarkaydet->execute(array(
		'ad_soyad' => $_POST['adsoyad'], 
		'mail' => $_POST['mail'], 
		'telefon' => $_POST['telefon'], 
		'sifre' => $sifre
		));

		
		if ($update) {
			$_SESSION['durum'] = "Bilgiler güncellendi";
			Header("Location:../profil.php");
		}else{
			$_SESSION['durum'] = "Sistem Hatası";
			Header("Location:../profil.php");
		}
		 
} 
if ($_POST['yorum-yap']) {
	$olustur=$db->prepare("INSERT INTO yorumlar SET 
			kategori_alt_id=:kategori_alt_id,
			kullanici_id=:kullanici_id,
			puan=:puan,
			icerik=:icerik 
		");
		$olusturuldu=$olustur->execute(array(
			'kategori_alt_id' => $_POST['kategori_id'],
			'kullanici_id' => $_SESSION['kullanici_id'],
			'puan' => $_POST['puan'],
			'icerik' => $_POST['icerik']
		));
 

		if($olusturuldu){
			$_SESSION['durum'] = "Yorum eklendi.";
			header("Location: ../detay.php?id=".$_POST['kategori_id']);
		}else{
			$_SESSION['durum'] = "Yorum eklenemedi.";
			//print_r($olustur->errorInfo());
			header("Location: ../detay.php?id=".$_POST['kategori_id']);
		}
} 