-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 09 Haz 2022, 11:05:16
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mobil`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `kategori_ad`, `resim`) VALUES
(1, 'Parklar', 'assets/park.jpg'),
(2, 'Kütüphaneler', 'assets/ktp.jpg'),
(3, 'Tarihi Yerler', 'assets/ldk.jpg'),
(4, 'İbadet Yerleri', 'assets/inanc.jpg'),
(5, 'Marketler', 'assets/market.jpg'),
(6, 'Konaklama', 'assets/konak.jpg'),
(7, 'Otoparklar', 'assets/otopark.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori_alt`
--

DROP TABLE IF EXISTS `kategori_alt`;
CREATE TABLE IF NOT EXISTS `kategori_alt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `kategori_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ucret` int(11) DEFAULT NULL,
  `saatler` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategori_alt`
--

INSERT INTO `kategori_alt` (`id`, `kategori_id`, `kategori_ad`, `kategori_icerik`, `kategori_resim`, `ucret`, `saatler`) VALUES
(1, 1, 'İncilipınar Parkı', 'Bugün tamamen bitirilen 174 bin metrekare alanı bulunan parkımızda 1 adet ana gölet, 3 adet küçük gölet, kameriyeler, koşu parkuru, çocuk oyun alanları ve dinlenme noktaları bulunmaktadır. Artık insanlarımız yeniden doğan İncilipınar Parkı’nda gönül rahatlığıyla dolaşıyor ve dinleniyor.\r\nİncilipınar Parkındaki doğal kaynaklardan elde edilen su, projede yapılan gölette toplanıp buradan da çimlendirilen orta kaldırım ve park alanı sulanmaktadır.', 'assets/incili.jpg', 0, '7/24'),
(4, 1, 'Çamlık Parkı', 'Denizli il merkezine 3 km. mesafede, günübirlik gezilmeye uygun bir biçimde düzenlenmiş olan Çamlık Orman İçi Dinlenme Yeri’nin, denizden yüksekliği 400 m. olup, 30 hektarlık bir kızılçam ormanı içindedir. Alanın 60 ha.ya çıkarılması çalışmaları sürmektedir. 1977 yılında düzenlenen alanda 150 kişilik kır gazinosu, büfe, 300 araç kapasiteli otopark, 3 çocuk oyun alanı, 16 çeşme, 4 wc, yağmur barınağı, ankesörlü telefon ve 3 km. uzunluğunda koşu parkuru bulunmaktadır. Gezilmeye en uygun zaman Mayıs-Eylül dönemidir. Yıllık kapasitesi 200 bin kişi, günlük kapasitesi 2 bin kişidir. Dinlenme yerinin batı kesiminde yaklaşık 2 ha’lık bir alanda Arboretum çalışmaları başlatılmıştır. Sahanın bitki örtüsü kızılçam, yalancı akasya piramidal ve dallı servi, akçaağaç gibi türlerdir.\r\n\r\nPamukkale Üniversitesi Kampüsü’ ne bitişik olan Çamlık Orman İçi Dinlenme Yeri’ ne en önemli özelliklerinden birisi de gece pikniği olanağıdır. Alanın emniyet altında ve çok iyi aydınlatılmış olması nedeni ile geceleri de piknik yapılmaktadır. Girişin ücretli olduğu piknik yerinin Çamlık ve Kınıklı olmak üzere iki giriş kapısı vardır. Ulaşım için minibüs ve belediye otobüslerinden yararlanılmaktadır.Ayrıca halk çamlık- eski Tavas yolunu yürüyüş parkuru olarak kullanmaktadır.\r\n\r\nPark içinde Milli Park Yönetim Binası, 50 kişilik orman yangın söndürme grubu ve orman ana tamirhane müdürlüğü bulunmaktadır.\r\n\r\nAdres: Çamlaraltı, 20160 Pamukkale/Denizli', 'assets/camlik.jpg', NULL, '7/24'),
(5, 1, 'Yunus Emre Parkı', 'Doğal yapısı korunarak bu alanda yapılan düzenlemeler kent yaşamından sıkılanlarla, yeşillikler içinde oksijen alarak dinlenmek isteyenlerle, spor yaparak sağlıklı yaşamayı keşfedenlerle ve ailesiyle pikniğe gelenlerle dolup taşıyor.Özellikle sabah saatlerinde sportif faaliyetler açısından hareketli olan Yunus Emre Parkı, piknik yapmak isteyenlerin de her türlü ihtiyacına karşılık veriyor. Doğal yapısı korunarak bu alanda yapılan düzenlemeler kent yaşamından sıkılanlarla, yeşillikler içinde oksijen alarak dinlenmek isteyenlerle dolup taşıyor. Parkımızdaki spor sahalarında spor yaparak sağlıklı yaşamayı ilke edinenlerin yanında ailesiyle pikniğe gelenlerle parkımız cıvıl cıvıl. Yunus Emre Parkı’nda çocuklar için tasarlanan ahşap oyuncak grupları ve tırmanma elemanları yerleştirilerek çocukların doyasıya oynamasına olanak sunduk.\r\n\r\nYenişehir Mahallesi 48. Sokak No:1 Merkezefendi / DENİZLİ', 'assets/yunus.jpg', NULL, '7/24'),
(6, 1, 'Akdağ Tabiat Parkı', 'Akdağ Tabiat parkı yemyeşil ormanları su kaynakları, uçsuz bucaksız çayırları;  zengin bitki örtüsüyle eş değerde yaban hayatıyla, (yılkı atları, geyik, domuz, tilki, kurt v.s) monoton ve betonlaşan hayatınıza bir anda huzur ve canlılık kazandırır.\r\n\r\nDoğal peyzajı bozmadan yapılan patika yolları, atlı gezi yolları, bisiklet parkurları, yaban hayatı izleme noktaları, göleti, gölcükler, günübirlikçiler ve kampçılar için sosyal tesisler, bungalovlar bu güzellikleri daha da çekici ve eşsiz kılmıştır.\r\n\r\nDoğa sevenlere, doğayla baş başa kalmak isteyen her yaş grubu insana hizmet edecek etkinliklerin yapılabileceği Kocayayla civarında, keşfedilmeyi bekleyen pek çok mağara vardır. Tahmini 20 km. uzunluğunda olan kanyon ve kanyondan Çivril gölüne dökülen Akçay görülmeye değerdir. Kanyon boyunca insanoğlunun ayak basmadığı mağaralar, treking yapanların ilgisini çekecek güzergahlar bulunmaktadır.\r\n\r\nAdres: Akdağ Tabiat Parkı, 03500 Çamoğlu/Sandıklı/Afyonkarahisar', 'assets/akdag.jpg', NULL, '7/24'),
(7, 2, 'Merkezefendi Merkez Kütüphanesi', 'Proje, gelişen muhitte kentin dokusuyla uyumlu yeni bir kent simgesi olması için tasarlandı. Bu yüzden modern bir anlayış benimsendi. Çevreyle ilişkisi göz önünde bulundurularak sosyal ve kültürel bir Merkez olması amaçlandı. Kullanıcıları karşılayan meydan ve dışarıdan içeriye yönlendiren kütle organizasyonu ile kullanıcının yönlenme içgüdüsü önemsenmiştir\r\n\r\nKütleye yönelik tasarım kararları hiyerarşi kurgusu kullanılarak oluşturulmuştur. Zemin ve alt kotlar daha sesli ve hareketin yoğun olduğu fonksiyonlar için kurgulanırken üst kotlara çıkıldıkça sessizlik isteyen fonksiyonlar yerleştirilmiştir. Ana meydandan - kamusal alandan başlayıp sessiz alana doğru ilerleyen bir dolaşım ağı oluşturulmuştur.\r\n\r\nKütüphane olgusu ile bağlantı kurularak ‘’Bilgi birikimi’’ konsepti benimsenmiştir. Yapıdaki her bir kütle öğrenilen yeni bilgileri temsil etmektedir ve kütleler üst üste gelerek ortadaki galeri boşluğu ile birleştirilmiştir.\r\n\r\nYapının en üst kotunda bulunan konsol ana tasarım elemanı olarak vurgulanmış ve yapının şehir simgesi olmasını sağlamıştır. Bütün yapı Kütüphaneler Birliği’nin yönlendirmesi ile içeride gölge oluşmasının önüne geçmek için cam cephe olarak tasarlanmıştır.\r\n\r\nAyrıca konsol kütlesi gölgesi ile beraber yapının peyzaj kotunda tasarlanmış olan amfi oturma alanını tanımlamıştır.\r\n\r\nYapının taşıyıcı elemanları çekirdeğin etrafında konumlandırılıp ortadaki merdivenlere referans sağlamıştır. Kullanılan materyaller enerji tasarrufuna uygun olarak seçilmiştir.', 'assets/merkez.jpg', NULL, '7/24'),
(8, 3, 'Leodikia Antik Kenti', 'Laodikeia Antik Kenti, Denizli İli’nin 6 km. kuzeyinde yer almaktadır. Helenistik kent, M.Ö. 3. yy.’ın ortalarında Seleukos Kralı II. Antiokhos tarafından karısı Laodike adına kurulmuştur. M.Ö. 130/129 yılında ise bölge tamamen Roma’ya (önce Cumhuriyet, sonra İmparatorluk) bağlanmıştır. Hıristiyanlığın ilk 7 kilisesinden birine sahip olan kent, Erken Bizans Dönemi’nde metropollük seviyesinde dini bir merkez haline gelmiştir. Laodikeia’da yapılan kazı çalışmaları, Erken Kalkolitik Dönem (Bakır Çağı, M.Ö. 5500’den M.S. 7. yy.’a kadar kesintisiz yerleşimlerin varlığını ortaya koymuştur. Laodikeia, önemli arkeolojik kalıntılara sahiptir. Yaklaşık 5 kilometrekarelik alana yayılan Laodikeia’nın önemli ve günümüze kadar gelebilen yapıları içinde; Anadolu’nun en büyük stadyumu (ölçüleri 285x70 m.), 2 tiyatrosu, 4 hamam kompleksi, 5 agorası, 5 nymphaeumu, 2 anıtsal giriş kapısı, Bouleuterionu, tapınakları, Peristylli evleri, Latrina, kiliseleri ve anıtsal caddeleri sayılabilir. Kentin dört tarafını ise nekropol alanları çevirir. Laodikeia, Hıristiyanlık dünyası için çok önemlidir. Çünkü kent M.S. 4. yy.’dan itibaren Kutsal Hac Merkezi olma gibi dinsel bir özelliğe sahip olmuştur. Bu nedenle İncil’de adı geçen ve Laodikeia Kilisesi adına vahiy gönderilen bir kentte Laodikeia Kilisesi’nin ortaya çıkarılması, bu kutsallığı bir kat daha artırmaktadır. Kilise, Büyük Constantinus zamanında (M.S. 306-337), Hıristiyanlığın M.S. 313 yılında Milano Fermanı ile serbest olmasıyla birlikte yapılmıştır. Bu yönüyle Hıristiyanlık dünyasının en eski ve en önemli kutsal yapılarından biri olma özelliğini korumaktadır ve bu nedenle yapı bir hac kilisesidir.', 'assets/leodk.jpg', 40, '08:00–18:00'),
(9, 2, 'Pamukkale Üniversitesi Kütüphanesi', 'Pamukkale Üniversitesi Prof. Dr. Fuat SEZGİN Kütüphanesi olarak amacımız, bilgiye ulaşımın kolaylaştırılması ve yaygınlaştırılması doğrultusunda, öğretim ve araştırma faaliyetleri için en kısa zamanda doğru ve gerekli kaynaklara çağdaş imkânlarla ulaşılmasını sağlamak, öğrenci ve araştırmacılarımıza çalışmalarında destek olmak ve tüm kullanıcılarımızın bilgi donanımlarının artmasına zemin hazırlamaktır.', 'assets/pau.jpg', NULL, '7/24'),
(10, 7, 'Kayıhan Otopark', 'Kayıhan Otopark Yediemin Deposu Firmamız Denizli şehrinde Denizli ilçesinde Bağbaşı, Fevzi Çakmak Cd. No:151, 20100 Pamukkale/Denizli adresinde bulunmaktadır.\r\n', 'assets/otp1.jpg', 5, '7/24'),
(11, 4, 'Churc Kilisesi', 'Servergazi, Sümbül Sk. No:1, 20040 Denizli Merkez/Denizli, Turkey', 'assets/ibd.jpg', NULL, '7/24'),
(12, 3, 'Atatürk Evi Ve Etnoğrafya Müzesi', 'Atatürk ve Etnografya Müzesi, Türkiye\'nin Denizli şehrinde yer alan bir müzedir. 1984\'te açılan müzede etnografik eserler ile Mustafa Kemal Atatürk\'e ait eşyalar sergilenmektedir.', 'assets/ata.jpg', NULL, '08.00-18.00'),
(13, 4, 'Ahmet Hulusi Efendi Cami', 'Ege Bölgesi\'nde, Kuvay-i Milliye ve Milli Mücadele hareketlerinin mihrakını teşkil eden Müftü Ahmet Hulusi Efendi, Yunan işgal ve istilasına karşı, bölgede teşkil eden Müftü Ahmet Hulusi Efendi, Yunan işgal ve istilasına karşı, bölgede ilk protesto mitingi yapan ve direnişe geçen, “Düşmana karşı koymak farz-ı ayındır!” diye fetva veren bir milli kahramandır.', 'assets/ibd1.jpg', NULL, '7/24'),
(14, 5, 'Metro Market Denizli', 'Sinpaş Aquamall Yanı, Kayalar Mah. Menderes Bulvarı No :185 / A, 20010 Merkezefendi/Denizli', 'assets/metro.jpg', NULL, '08:00–21:30'),
(15, 5, 'Bilgin Market', 'Yenişehir, No: 24/A, Adalet Sitesi, 20125 Denizli', 'assets/mrkt1.jpg', NULL, '08:30–22:30'),
(16, 7, 'Katlı Otopark', '23.587 metrekare toplam kapalı alanda yapılan katlı otopark 700 araca hizmet verecek.15 Mayıs, 1065 Sk. No:11, 20150 Denizli Merkez/Denizli ÜCRET: AYLIK ABONMAN ÜYELİĞİ 100 TL', 'assets/otp3.jpg', NULL, '7/24'),
(17, 6, 'Leodikya Otel', 'Topraklık, Merkez, 630. Sk. No : 19, 20150 Pamukkale/Denizli', 'assets/otel1.jpg', 500, '7/24'),
(18, 6, 'Dedeman Park Otel', 'Karşıyaka Mahallesi 2394 Sok No:, D:4, 20175 Pamukkale/Denizli\r\n(0258) 268 80 00', 'assets/otel2.jpg', 780, '7/24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `olusturmatarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `ad_soyad`, `mail`, `telefon`, `sifre`, `olusturmatarih`) VALUES
(1, 'Batuhan Küçükarslan1', 'mail@batuhankucukarslan.com.tr', '053703843071', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f', '2022-06-08 19:11:03'),
(2, 'Sefa Tankal', 'tankal55@gmail.com', '05438622258', '822a19edb23fd5f1d01b9e547bf3a8e15b13b7569d5f42c382be59a1ba4244a5bf71208935f1512b929c14dd218bc2312fa63bce11617f35202018b523e63823', '2022-06-08 19:15:50'),
(3, 'Aysun Akkoyun', 'akkyn46@gmail.com', '05362157192', '14cadb02bdd829f01fb83d46aa5bf663dc2dc57ce611d9990cc3c8653342240c79b2710ebfeb382095ffc544e416ea02e8e5033756f97bbc14911dddd54857bd', '2022-06-08 19:16:59'),
(5, 'Hatice Tekin', 'tknhtc20@gmail.com', '05559862735', '344907e89b981caf221d05f597eb57a6af408f15f4dd7895bbd1b96a2938ec24a7dcf23acb94ece0b6d7b0640358bc56bdb448194b9305311aff038a834a079f', '2022-06-08 19:26:05');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE IF NOT EXISTS `yorumlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_alt_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `puan` int(11) NOT NULL,
  `icerik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `olusturmatarih` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`id`, `kategori_alt_id`, `kullanici_id`, `puan`, `icerik`, `olusturmatarih`) VALUES
(1, 1, 2, 5, 'Gerçekten mükemmel bir park samsunda maraşta böyle yerler yok çok kıskanıyorummm.', '2022-06-08 21:08:25'),
(2, 1, 3, 5, 'Maraş\'a da bundan yapmak lazım', '2022-06-08 21:08:25'),
(3, 1, 1, 5, '  Güzel memleketim', '2022-06-08 21:36:49'),
(5, 6, 1, 1, '  ', '2022-06-09 13:15:42'),
(6, 7, 1, 5, '  İyi\r\n', '2022-06-09 13:21:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
