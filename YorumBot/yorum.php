<?php
/*
Wordpress Yorum Botu. 
Kendi Sisteminize İstediğiniz Kadar Yorum Atın.
Geliştirici: Osman ÖZER
mail: osmanozer4@gmail.com
*/
session_start(); // Oturum açma işlemi
ob_start(); // Otrum Açma İşlemi

require_once 'baglan.php'; // Veritabanı bağlantısı
include 'function.php'; // fonskiyonları dahil ediyoruz.


if(@$_SESSION['kadi']=="admin"){ ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yorum</title>
    <link rel="icon" href="yorum.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  	<br><br>
    <div class="container">     
	<div class="row">         
		<div class="col-md-4 mx-auto">
		  <?php
      if(@$_GET['durum'] == "ok"){
      echo '<div class="alert alert-primary" role="alert">Başarıyla Gönderildi.</div>';
      }elseif(@$_GET['durum'] == "no"){
      echo '<div class="alert alert-danger" role="alert">Bir Hata Oluştu.</div>';
      }
      ?>
		<?php
		if (isset($_POST['gonder'])) {
		// Rastgele İsim Üretici
		$isim=array("Refaetti̇n","Bünyami̇n","Bahatti̇n","Güldehen","Kalender","Muhammet","Alpaslan","Abdullah","Gülbahar","Mübeccel","Tonyukuk","Nuretti̇n","Süleyman","Mukaddes","Feyzahan","Konuralp","Zekeri̇ya","Muhammed","Gülseren","Si̇mender","Nesli̇han","Bengühan","Yildirim","Gülhanim","Alevti̇na","Bi̇reylül","Gökteki̇n","Kubi̇lay","Bedri̇ye","Hüseyi̇n","Mustafa","Nagi̇han","Tesli̇me","Ayşegül","Baturay","Aydoğan","Ersagun","Mahperi̇","İbrahi̇m","Süheyla","Zülfi̇ye","Muammer","Ersegun","Fevzi̇ye","Münever","Gülperi̇","Ülkühan","Sebahat","Remzi̇ye","Yasemi̇n","Mücella","Aslihan","Hümeyra","Papatya","Nezaket","Süreyya","Oğuzhan","Ni̇lüfer","Aydemi̇r","Tolunay","Bahadir","Mücahi̇t","Şahi̇nde","Nevri̇ye","Müberra","Ramazan","Hayri̇ye","Gülname","Hamdi̇ye","Melahat","Kezi̇ban","Cevahi̇r","Şeyhmus","Rumeysa","Burçhan","Vasfi̇ye","Atilgan","Siddika","Hi̇dayet","Aybegüm","Hi̇layda","Eli̇fcan","Sümeyra","Ayşenur","Cebrai̇l","Fethi̇ye","Ti̇muçi̇n","Kamuran","Sümeyye","Tuğberk","Alperen","Halenur","Zübeyde","Mahmut","Mansur","Kürşad","Hayati̇","Bi̇rsen","Serdal","Reyhan","Gülşah","Serkan","Irazca","Hati̇ce","Gökhan","Mehmet","Mesude","Medi̇ha","Tarkan","Turgay","Yilmaz","Gökmen","Bülent","Tuğsem","Gülçi̇n","İsmai̇l","Taylan","Zeynep","Bayram","Serhat","İlknur","Tevfi̇k","Kürşat","Di̇lber","Volkan","Zümrüt","Serpi̇l","Sultan","Dervi̇ş","Ferhat","Serdar","Yildiz","Berkay","Selçuk","Asudan","Ceyhan","Tayyi̇p","Sali̇ha","Belgi̇n","Seçki̇n","Bi̇rgül","Berfi̇n","Serçi̇n","Almala","Coşkun","Zeli̇ha","Aybüke","Hasi̇be","Gürkan","Benhur","Şi̇rvan","Zerri̇n","Mümtaz","Burhan","Nursel","Cengi̇z","Lati̇fe","Nurdan","Meltem","Gülden","Nafi̇ye","Tayfur","Sevgül","Jüli̇de","Handan","Turgut","Nejdet","Songül","Müsli̇m","Zahi̇de","Cennet","Mürşi̇t","Tayfun","Berker","Ruki̇ye","Gökten","Habi̇be","Kezban","Kivanç","Rengi̇n","Saadet","Rezzan","Berçem","Ni̇lden","Yurdun","Tuğrul","Gülsüm","Ferhan","Atakan","Mehtap","Levent","Şermi̇n","Sezgi̇n","Hi̇cran","Ati̇lla","Selami̇","Çağdaş","Yetki̇n","Veysel","Derman","Berri̇n","Servet","Seyhan","Ceyhun","Muhli̇s","Sidika","Ni̇lgün","Sebi̇ha","Nevroz","Burçi̇n","Sancar","Görkem","Cüneyt","Meli̇ke","Mürsel","Di̇lara","Cumhur","Serhan","Çi̇ğdem","Nurcan","Mümüne","Müjdat","Çavlan","Semi̇ne","Gülsen","Bi̇lgi̇n","Asuman","Huri̇ye","Hati̇ke","Bi̇nnur","Üzeyi̇r","Korhan","Göksel","Hi̇kmet","Ali̇şan","Yüksel","Berkan","Şebnem","Zari̇fe","Türker","Sevi̇nç","Feri̇de","Ceylan","Kiymet","Mahsum","Pervi̇n","Nesri̇n","Selcen","Rahi̇me","Mazlum","Atacan","Gülcan","Meryem","Hali̇me","Egemen","Sertaç","Uğuray","Abi̇di̇n","Erdi̇nç","Nurhan","Nefi̇se","İti̇bar","Turğut","Şahi̇ka","Gündem","Saygin","Çağlar","Gözdem","Hasret","Gökçen","Mevlüt","Gülşen","Muhsi̇n","Tuncay","Perver","Sevcan","Teyfi̇k","Nurgül","Cansen","Cömert","Şuayip","Tevhi̇d","Di̇lşah","Yalçin","Şeri̇fe","Mevsi̇m","Şehmus","Göknur","Salman","Cebbar","Ridvan","Nevzat","Beraat","Gamze","Mi̇raç","Yücel","Özgür","Ferdi̇","İlhan","Nalan","Semi̇h","Ergün","Fati̇h","Şenay","Bariş","Rezan","Orhan","Evren","Oktay","Harun","Yavuz","Pinar","Cahi̇t","Haşi̇m","Eyyup","Sabri̇","Ahmet","Hasan","Kami̇l","Özcan","Ceren","Yusuf","Kenan","Çeti̇n","Meral","Leman","Yahya","Bengü","Nazmi̇","Di̇lek","Tufan","Bahri̇","Özlem","Selma","Nazli","Murat","Tümay","Başak","Evri̇m","Yaser","Özhan","Aksel","Fulya","Burcu","Gülay","Rabi̇a","Sevda","Engi̇n","Sevgi̇","Hali̇l","Bi̇lge","Ferda","Aysun","Özden","Koray","Senem","Kansu","Nuray","Deni̇z","Özgün","Seyfi̇","Şeyma","Mesut","Si̇nan","Sevi̇l","İlkay","Yener","Sedef","Fadil","Hayri̇","Yaşar","Hanim","Mehri̇","Şükrü","Olcay","Aydin","Ni̇hat","Aykan","Nezi̇h","Ti̇mur","Erhan","Mutlu","Osman","Hi̇lmi̇","Tuğçe","Gökçe","Yasi̇n","Gonca","Funda","Demet","Sonay","Zühal","Nazim","Beyza","Di̇ana","Semra","Velat","Emi̇ne","Si̇bel","Hande","Mi̇ray","Tuğba","Ni̇hal","Zafer","Si̇mge","Ni̇lay","Ri̇fat","Samet","Berna","Fazli","Ergül","Erdal","Lezi̇z","Ayşen","Aycan","Selda","Zehra","Beri̇l","Gülüş","Öznur","Güli̇z","Melda","Derya","Faruk","Sedat","Ayli̇n","Şafak","Meti̇n","Fatma","Erkan","Keri̇m","Sezgi̇","Eylül","Nevi̇n","Aysel","Talha","Duygu","Gözde","Firat","Gülen","Vedat","Fi̇li̇z","Şi̇ri̇n","Hatun","Ceyda","Alper","Feyza","Meri̇h","Ari̇fe","Nafi̇z","Damla","Leyla","Tülay","Ender","Yeli̇z","Özgül","Reşat","Mumun","Taner","Sevde","İlker","Deram","Fevzi̇","Sali̇m","Refi̇k","İkli̇l","Ersen","Meli̇a","Ayli̇a","Haluk","Ünsal","Füsun","İkram","Aykut","Sali̇h","Ayhan","Doğan","Güher","Burak","Haççe","Nazan","Ci̇han","Di̇dem","Adnan","Sezi̇n","Orçun","Güneş","Hali̇s","Yelda","Emced","Tuğra","Baran","Kadi̇r","İhsan","Demi̇r","Gökay","Nuran","Habi̇l","Kübra","Belma","Çağri","Önder","Raşan","Soner","Enver","Cemi̇l","Zeri̇n","Bi̇lgi̇","Baver","Neci̇p","Gani̇m","Duran","İrfan","Günay","Beste","Emrah","Di̇cle","Mari̇a","Seçi̇l","Rüştü","Tansu","Erdem","Rasi̇m","Seli̇m","Duçem","Yakup","Ercan","Hi̇lal","Seray","Savaş","Sezen","Eylem","Betül","İzzet","Hakan","Mahi̇r","Merve","Uysan","Neval","Sezer","Melek","Erki̇n","Numan","Hamza","Kasim","Ümran","Teki̇n","Hacer","Beray","Şenol","Seher","Resul","İshak","Ennur","Çağla","Cansu","İdri̇s","Özkan","Övünç","Gi̇zem","Buğra","Ferat","Aslan","Hamdi̇","Ökkeş","Tolga","Yunus","Davut","Peli̇n","Hazan","Hali̇m","Veysi̇","Zuhal","Öztan","Kemal","Si̇nem","Serap","Beki̇r","Bulut","Ersi̇n","İnanç","Buşra","Cafer","Turan","Recep","Uygar","Seval","Şeri̇f","Berfu","Fahri̇","Petek","Büşra","Ekrem","Kader","Vehbi̇","Canan","Fari̇s","Rifat","Fi̇kri̇","Hami̇t","Feri̇t","İlyas","Andaç","Bedri̇","Hazel","Yi̇ği̇t","Cemal","Cemre","Arman","Meri̇ç","Ni̇han","Ertan","Elzem","Bi̇lal","Di̇lan","Nebi̇l","Maruf","Begüm","Bi̇şar","Aytaç","Ethem","Senan","Ni̇met","Nezi̇r","Si̇dar","Orkun","Zühre","Asena","Habi̇p","Havva","Şahi̇n","Tamer","Hi̇di̇r","Fethi̇","Lütfi̇","Elçi̇n","Bi̇rol","Şeyda","Sezai̇","Tahi̇r","Seli̇n","Eyyüp","Feray","Veli̇t","Efruz","Caner","Jale","Müge","Emre","Fuat","Umut","Onur","Ufuk","Nebi̇","Ural","Akin","Erol","Özen","Ebru","Ülkü","Asli","Tuba","Ezgi̇","Seda","Emel","Eli̇f","Hale","Onat","Esi̇n","Esra","Ari̇f","Ümi̇t","Özge","Ayla","Eray","Sema","Işil","İnci̇","Emi̇n","İpek","Resa","Ömer","Veli̇","Enes","İrem","Feza","Ayşe","Haci","Arda","Evre","Ömür","Mete","Cenk","Esma","Sami̇","Bala","Neşe","Arzu","Suna","Işin","Suat","Okan","Zeki̇","Utku","Zi̇ya","Tuna","Emi̇ş","Adem","Öykü","Işik","Mi̇ne","Ulaş","Azi̇z","Erem","Eser","Lale","Eyüp","Asim","Oğuz","Mert","Şule","Uğur","Nai̇l","Sefa","Şi̇fa","Adi̇l","Ezel","Cuma","Çi̇le","Bora","Şadi̇","Sai̇d","Esen","Anil","Eren","Nuri̇","Yüce","Fai̇k","Musa","Eki̇n","Sare","Ozan","Aysu","Berk","Alev","Baki̇","Sena","Ünal","Ali̇","Ela","Can","Gül","Ece","Cem","Nur","Eda","Nuh","İsa","Alp");
			$anahtar1 = array_rand($isim,1);
			
			// Rasgele mail uzantısı üreticisi
			$mail=array("@gmail.com","@yahoo.com","@yandex.com","@bing.com","@outlook.com","@hotmail.com","@mail.com");
			$anahtar2 = array_rand($mail,1);

			//Mail TR karakter temizliyor.

			function seo($s) {
				$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',' ',',','?');
				$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','','');
				$s = str_replace($tr,$eng,$s);
				$s = strtolower($s);
				$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
				$s = preg_replace('/\s+/', '-', $s);
				$s = preg_replace('|-+|', '-', $s);
				$s = preg_replace('/#/', '', $s);
				$s = str_replace('.', '', $s);
				$s = trim($s, '-');
				return $s;
			} 
				

			// Veriler hazırlanıyor
			$_POST['comment_post_ID'] = $_POST['comment_post_ID'];	
			$_POST['comment_author'] = $isim[$anahtar1].rand(99,999);
			$_POST['comment_author_email'] =seo($_POST['comment_author']).$mail[$anahtar2];
			$_POST['comment_author_url'] = "";
			$_POST['comment_author_IP'] =rand(11,999).'.'.rand(11,999).'.'.rand(11,999).'.'.rand(11,999);
			$_POST['comment_date'] = date('Y-m-d H:i:s');
			$_POST['comment_date_gmt'] = date('Y-m-d H:i:s');
			$_POST['comment_content'] = $_POST['comment_content'];
			$_POST['comment_karma'] =0;
			$_POST['comment_approved'] = 1;
			$_POST['comment_agent'] = $_SERVER['HTTP_USER_AGENT'];
			$_POST['comment_type'] = "comment";
			$_POST['comment_parent'] = 0;
			$_POST['user_id'] = 0;

		$wp_comments=$db->prepare("INSERT into wp_comments set
			comment_post_ID=:comment_post_ID,
			comment_author=:comment_author,
			comment_author_email=:comment_author_email,
			comment_author_url=:comment_author_url,
			comment_author_IP=:comment_author_IP,
			comment_date=:comment_date,
			comment_date_gmt=:comment_date_gmt,
			comment_content=:comment_content,
			comment_karma=:comment_karma,
			comment_approved=:comment_approved,
			comment_agent=:comment_agent,
			comment_type=:comment_type,
			comment_parent=:comment_parent,
			user_id=:user_id
			");

		$insert=$wp_comments->execute(array(
				
			'comment_post_ID' => $_POST['comment_post_ID'],
			'comment_author' => $_POST['comment_author'],
			'comment_author_email' => $_POST['comment_author_email'],
			'comment_author_url' => $_POST['comment_author_url'],
			'comment_author_IP' => $_POST['comment_author_IP'],
			'comment_date' => $_POST['comment_date'],
			'comment_date_gmt' => $_POST['comment_date_gmt'],
			'comment_content' => $_POST['comment_content'],
			'comment_karma' => $_POST['comment_karma'],
			'comment_approved' => $_POST['comment_approved'],
			'comment_agent' => $_POST['comment_agent'],
			'comment_type' => $_POST['comment_type'],
			'comment_parent' => $_POST['comment_parent'],
			'user_id'=> $_POST['user_id']
		));

		if ($insert) {
			header("Location:yorum.php?durum=ok");
		}else{
			header("Location:yorum.php?durum=no");
		}}
		?>
		<div class="card">
			<div class="card-body">
			<form action="" method="POST">
			  <div class="mb-3">
			  	<?php
                $postsor = $db->prepare("SELECT * FROM wp_posts WHERE post_status='publish' AND post_type='post' ORDER BY rand() LIMIT 1");
                $postsor->execute(); 
                while($postcek=$postsor->fetch(PDO::FETCH_ASSOC)){
                echo '<div class="text-center"><h2>'.$postcek['post_title'].'</h2></div>';
                $postid = $postcek['ID'];
			    }
			    ?>
			    <input type="text" class="form-control" name="comment_post_ID" value="<?php echo $postid; ?>" hidden>
			    <textarea  type="text" rows="5" name="comment_content" class="form-control" required></textarea>
			  </div>
			  <div class="d-flex justify-content-end">
			  <button type="submit" name="gonder" class="btn btn-primary">Yorum Gönder</button>
			</div>
			</form>
			</div>
		</div>
		<div class="d-flex justify-content-end">
			<div class="text-muted">Organik Wordpress Yorum Botu</div>
		</div>                   
		</div>     
	</div> 
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{ ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yorum</title>
    <link rel="icon" href="yorum.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">     
	<div class="row">         
		<div class="col-md-4 mx-auto">
		<div class="card">
			<div class="card-body">
				<?php 
				if(@$_GET['durum']=="no"){ echo '<div class="alert alert-danger" role="alert">Hatalı Şifre</div>'; }
				if (isset($_POST['giris'])) {
				 if($_POST['sifre'] == $sifre){ // Şifre gerekirse buradan değiştirilebilir.
				 	$admin = "admin"; // Kullanıcı adı gerekirse buradan değiştirlebilir.
				 	$_SESSION['kadi'] = $admin;
				 	header("Location:yorum.php?durum=ok");
				 }else{
				 	header("Location:yorum.php?durum=no");
				 }
				}
				?>
			<form action="" method="POST">
			  <div class="mb-3">
			    <label class="form-label">Şifrenizi Giriniz:</label>
			    <input type="number" name="sifre" class="form-control" >
			  </div>
			  <button type="submit" name="giris" class="btn btn-primary">GİRİŞ</button>
			</form>
			</div>
		</div>                   
		</div>     
	</div> 
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
?>